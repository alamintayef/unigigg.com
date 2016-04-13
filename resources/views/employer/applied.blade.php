@extends('layouts.app')

@section('content')
  <div class="container ">
    <div class="row">
    @include('layouts.emmenu')
      <div class="col-md-10">
        <div class="well">
          <h4 class="textb">Applied Candidates</h4>
        </div>


        @foreach( $applied as $seek )
          @if($seek->user_id===Auth::user()->id)
          <div class="panel panel-default">
            <div class="panel-heading">

              <h4>{{$seek->fname}} {{$seek->lname}}</h4>

            </div>
            <div class="panel-body">
              <p class="col-md-4">

              </p>

              <p class="col-md-4">
                <strong >Applied for</strong> : {{$seek->job_name}}
                <strong>Institute</strong>: {{$seek->institute}}
              </p>


            </div>

            <div class="panel-footer">


              <p class="inline">


              <form class="pull-right" action="{{url('/profile',$seek->id)}}" method="GET">
                {!! csrf_field() !!}
                <button type="submit" class="btn btn-info">
                  <i class="fa fa-user"></i> view profile
                </button>
              </form>
                @if($seek->already===0)
                  <form action="{{url('shortlist')}}" method="post">
                    {!! csrf_field() !!}
                    <input type="hidden" name="user_id" value="{{$seek->id}}">
                    <input type="hidden" name="shortlisted_for_job_id" value="{{$seek->job_id}}">
                    <input type="hidden" name="shortlistedby" value="{{Auth::user()->id}}">
                    <button type="submit" class="btn btn-primary ">
                      <i class="fa fa-bookmark"></i> Shortlist
                    </button>
                  </form>
                @else
                  <h6 class="textb">Already Shortlisted</h6>




                  @endif

              </p>


            </div>

          </div>
              @endif

        @endforeach

      </div>
    </div>
  </div>
