@extends('layouts.app')

@section('content')
  <div class="container ">
    <div class="row">
    @include('layouts.menu')
      <div class="col-md-10">
        <div class="well">
          <h4 class="text-info">Applied Candidates</h4>
        </div>

        @foreach( $applied as $seek )
          @if($seek->user_id===Auth::user()->id)
          <div class="panel panel-default">
            <div class="panel-heading">

              <h4>{{$seek->fname}} {{$seek->lname}}</h4>

            </div>
            <div class="panel-body">
              <p class="col-md-4">
                <iframe width="250" height="150" src="https://www.youtube.com/embed/{{$seek->youtube}}" frameborder="0" allowfullscreen></iframe>

              </p>

              <p class="col-md-4">
                <strong >Applied for</strong> : {{$seek->title}}
                <strong>Institute</strong>: {{$seek->institute}}
              </p>


            </div>

            <div class="panel-footer">


              <p class="inline">


              <form action="{{url('/eprofile',$seek->id)}}" method="GET">
                {!! csrf_field() !!}
                <button type="submit" class="btn btn-info btn-sm btn-block-sm">
                  <i class="fa fa-user"></i> view profile
                </button>
              </form>
<!--
              <form action="{{url('shortlist')}}" method="post">
                {!! csrf_field() !!}
                <input type="hidden" name="user_id" value="{{$seek->id}}">
                <input type="hidden" name="shortlisted_for_job_id" value="{{$seek->odd_id}}">
                <button type="submit" class="btn btn-warning btn-sm btn-block-sm">
                  <i class="fa fa-user"></i> Shortlist
                </button>
              </form>
            -->
              </p>


            </div>

          </div>
              @endif

        @endforeach


      </div>
    </div>
  </div>
