@extends('layouts.app')

@section('content')
  <div class="container ">
    <div class="row ">
      @include('layouts.emmenu')
      <div class="col-md-10 whiteproper  panel">
        <div >
          <h4 class="textb">Shortlisted Candidates </h4>
          <form class="" action="" method="post">
              <button type="button" name="button" class="pull-right btn btn-default"> Call for Interview</button>
          </form>

          <h5>Finalized Candidates :  {{$shortlistlimit}}</h5>
          <h6>Remaining {{$limit-$shortlistlimit}}</h6>


        </div>
        @if($shortlistlimit>$limit)
          Sorry call the finalized one first
        @else



          @foreach( $shortlisted as $shortlist )

            @if($shortlist->user_id===Auth::user()->id)


              <table class="table  ">
                <thead>
                  <th>
                    Candidate Name
                  </th>
                  <th>
                    Shortlisted For
                  </th>

                  <th>
                    Remove
                  </th>
                  <th>
                    Finalize
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      {{$shortlist->fname}} {{$shortlist->lname}}
                    </td>
                    <td>
                      {{$shortlist->job_name}}
                    </td>


                    <td>
                      <form action="{{url('shortlist',$shortlist->em_shortlist_id)}}" method="POST">
                        {!! csrf_field() !!}
                        <button type="submit" class="btn btn-info btn-sm ">
                          <i class="fa fa-user"></i> Remove
                        </button>
                      </form>
                    </td>
                    <td>

                      @if($shortlist->finalized===1)
                        <p>
                          Finalized
                        </p>
                      @else

                        <form action="{{url('finalize',$shortlist->em_shortlist_id)}}" method="POST">
                          {!! csrf_field() !!}
                          <button type="submit" class="btn btn-success btn-sm btn-block-sm">
                            <i class="fa fa-check"></i>Finalize
                          </button>
                        </form>


                      @endif
                    </td>

                  </tr>
                </tbody>


              @endif
            @endforeach
          @endif
        </table>


      </div>
    </div>
  </div>
