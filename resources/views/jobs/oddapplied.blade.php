@extends('layouts.app')

@section('content')
  <div class="container ">
    <div class="row">
      @if(Auth::user()->type===1)
          @include('layouts.menu')
      @else
          @include('layouts.emmenu')
      @endif

      <div class="col-md-10">
        <div class="well">
          <h4 class="text-info">Applied Candidates</h4>
        </div>

        @foreach( $applied as $seek )
          @if($seek->user_id===Auth::user()->id)
          <div class="panel padsmall">
            <h4>{{$seek->fname}} {{$seek->lname}}</h4> <strong >Applied for</strong> : <h6>{{$seek->title}}</h6>


                <strong>Institute</strong>: {{$seek->institute}}



                <form class="pull-right" action="{{url('/profile',$seek->id)}}" method="GET">
                {!! csrf_field() !!}
                <button type="submit" class="btn btn-info btn-sm btn-block-sm">
                  <i class="fa fa-user"></i> view profile
                </button>
              </form>

              <form action="{{url('shortlist')}}" method="post">
                {!! csrf_field() !!}
                <input type="hidden" name="user_id" value="{{$seek->id}}">
                <input type="hidden" name="shortlisted_for_job_id" value="{{$seek->odd_id}}">
                <button type="submit" class="btn btn-success btn-sm btn-block-sm">
                  <i class="fa fa-phone"></i> Call For Interview
                </button>
              </form>




            </div>

          </div>
              @endif

        @endforeach


      </div>
    </div>
  </div>
