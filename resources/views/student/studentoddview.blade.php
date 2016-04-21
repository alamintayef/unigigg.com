@extends('layouts.app')

@section('content')
<style media="screen">
.pl
{
    padding: 10px;
}
.ft{ font-size: 13px;}
.td {
  width:150px;
  }
  </style>
  <div class="container ">
    <div class="row">
      @if(Auth::user()->type==2)
        <a href="{{URL::previous()}}">Go Back</a>
      @elseif(Auth::user()->type==1)
        <a href="{{url('home')}}">Go Back</a>
      @else
        <a href="{{url('admin')}}">Go Back</a>
      @endif

      <div class="col-md-10">

        <div class="card card-raised" >
          <div class="panel-heading">
              <div class="pull-right pl">
                @foreach($images as $image)
                <img class="card-raised" src="{!!' /files/images/'.$image->filePath !!}" alt="propic" height="100px" width="100px"  />
              @endforeach
              <br>
              <br>
              @foreach($user as $users)
                @if($users->verified===1)
                  <h6 class="text-success">
                    Verified
                  </h6>
                @else
                  <h6 class="text-danger">
                    Not Verified
                  </h6>
                @endif
              @endforeach
            </div>
              @foreach($profile as $view )
              <h3 class="textb">{{$view->fname}}   {{$view->lname}}</h3>

            </div>
            <div class="panel-body ft pl">
              <div >

                <p>
                <b>  University:</b> <b> {{$view->institute}} </b><br> <b>  Contact:</b> <b> {{$view->mobile}} </b>
                </p>

              </div>
            @endforeach

            <h4>Skills</h4>

            @foreach($skill as $skills)

            <strong>Skills :</strong> {{$skills->skill_name}} , <strong>Level: </strong>{{$skills->skill_level}} <br>

            @endforeach

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

            </div>
            <hr>
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
          <h4 class="pl">References</h4>
          <div class="pl" >
            @foreach($refs as $ref )
        <p>
          <strong>Referred By</strong> {{$ref->referred_by}}<br>
          <strong>Description</strong>:<br>
            {{$ref->reference_description}}<br>
          <small><strong>Contact : </strong>{{$ref->referee_number}}</small>  </p>
        @endforeach

          </div>



          </div>
          <!--

          <div class="panel-footer">
            <button type="button" name="button">Shortlist</button>
          </div>
        </div>
      -->

      </div>
