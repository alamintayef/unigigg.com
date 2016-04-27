@extends('layouts.app')

@section('content')
<style media="screen">
.pl
{
    padding: 10px;
}
.ft
{
  font-size: 13px;
}
.td {
  width:150px;
  }
  </style>
  <div class="container ">
    <div class="row">
      @if(Auth::user()->type==2)
        <a href="{{url('whoapplied')}}">Go Back</a>
      @elseif(Auth::user()->type==1)
        <a href="{{url('home')}}">Go Back</a>
      @else
        <a href="{{url('admin')}}">Go Back</a>
      @endif

      <div class="col-md-10">

        <div class="panel panel-blue" >
          <div class="panel-heading">
              <div class="pull-right pl">
                @foreach($images as $image)
                <img src="{!!' /files/images/'.$image->filePath !!}" alt="propic" height="100px" width="100px" style="border-radius:50%;" />
              @endforeach
              <br>
              <br>


              @foreach($about as $info)
                @if(count($info)>0)

                <div class="well">
                  {{$info->fun_facts}}<br>
                  {{$info->inspiration_qot}}<br>
                  {{$info->Why_you}}<br>
                  {{$info->Why_not_you}}<br>
                </div>

                                @else
                                  <p>
                                    Nothing Added Yet`
                                  </p>

                                @endif

              @endforeach



                @if($user->verified===1)
                  <p class="text-success">
                    Verified
                  </p>
                @else
                  <p class="text-danger">
                    Not Verified
                  </p>
                @endif
                @if($user->subs_type===0)
                  <p class="text-warning">
                    Free
                    <form class="form-group" action="{{url('/verify',$user->id)}}" method="POST">
                      {!! csrf_field() !!}
                      <button type="submit" class="btn btn-success">
                        <i class="fa fa-check"></i> Change
                      </button>
                    </form>
                  </p>
                @else
                  <p class="text-success">
                    Subscribed
                  </p>
                @endif

            </div>
            @if(count($view)>0)

              <h3 class="textb">{{$view->fname}}   {{$view->lname}}</h3>

            </div>
            <div class="panel-body ft pl">
              <div >

                <p>
                  University :{{$view->institute}}<br>
                  NID :{{$view->NId}}<br>
                  Facebook :<a href="{{$view->facebookId}}"> Facebook</a> <br>
                  LINKEDIN :{{$view->LinkedInId}}
                </p>

              </div>

                          @else
                            Nothing added
                          @endif
            @if(count($skill)>0)

            <h4>Skills</h4>
            <table class="table ft">
              <thead>
                <th>
                  Title
                </th>
                <th>
                  Level
                </th>
                <th>
                  Verification
                </th>
              </thead>
            @foreach($skill as $skills)

                <tbody>
                  <tr>
                    <td class="td">
                      {{$skills->skill_name}}
                    </td>
                    <td class="td">
                      {{$skills->skill_level}}
                    </td>
                    <td>
                      Verified
                    </td>

                  </tr>
                </tbody>
                  @endforeach
              </table>


            @else
              Nothing added
            @endif
            @if(count($education)>0)

            <h4>Education</h4>

            @foreach($education as $edu )
              <div class="panel panel-default">

                <div class='panel-heading'>
                  <h4 class="panel-title"> <strong>Degree:</strong>  {{$edu->Degree_name}}</h4>
                  <strong>Type:</strong>  {{$edu->Degree_type}}
                </div>
                <div class="panel-body">
                  <strong>Institute</strong><span class="pl"> {{$edu->Degree_institute}}</span>
                  <strong>Results</strong> <span class="pl"> {{$edu->Degree_result}}</span>
                  <strong> Start Date: </strong><span class="pl"> {{$edu->Degree_start_date}}</span>
                  <strong> Passing Date: </strong><span class="pl">{{$edu->Degree_end_date}}</span>
                </div>



              @endforeach

                          @else
                            nothing added
                          @endif

            </div>
            <hr>
            @if(count($exps)>0)


            <h4 class="pl">Experiences</h4>
            <div class="pl">
                @foreach($exps as $exp )
                  <hr>
            <p class="pl">
              <strong>Title:</strong> {{$exp->exp_name}}<br>
              <strong>Description</strong>:<br>
                {{$exp->exp_description}}<br>
              <small><strong>start date :</strong></small> {{$exp->exp_start_date}} <small><strong>end date :</strong></small> {{$exp->exp_end_date}}
            </p>
            @endforeach
          </div>
            @endif
            @if(count($refs)>0)


          <h4 class="pl">References</h4>
          <div class="pl" >
            @foreach($refs as $ref )
        <p>
          <strong>Referred By</strong> {{$ref->referred_by}}<br>
          <strong>Description</strong>:<br>
            {{$ref->reference_description}}<br>
          <small><strong>Contact : </strong>{{$ref->referee_number}}</small>  </p>
        @endforeach
            @endif
          </div>
          @if(count($vdo)>0)


          <div class="center card card-raised padsmall">
            <iframe width="460" height="275" src="https://www.youtube.com/embed/{{$vdo->vdourl}}" frameborder="0" allowfullscreen></iframe>

          </div>
                  @endif



          </div>
          <!--

          <div class="panel-footer">
            <button type="button" name="button">Shortlist</button>
          </div>
        </div>
      -->

      </div>
