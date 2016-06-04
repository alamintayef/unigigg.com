@extends('layouts.app')

@section('content')
  <div class="container padtop">
    <div class="row">
    @include('layouts.emmenu')
      <div class="col-md-10">
        <div class="well">
          <h4 class="text-info">Applied Candidates</h4>
        </div>

        @foreach( $applied as $seek )
          @if($seek->user_id===Auth::user()->id)
          <div class="panel padsmall">
            <h4>{{$seek->fname}} {{$seek->lname}}</h4> <strong >Applied for</strong> : {{$seek->title}}


                <strong>Institute</strong>: {{$seek->institute}}


              <form  class=" form-inline pull-right">
                <form class="form-inline" action="{{url('/profile',$seek->id)}}" method="GET">
                {!! csrf_field() !!}
                <button type="submit" class="btn btn-info btn-sm btn-block-sm">
                  <i class="fa fa-user"></i> view profile
                </button>
              </form>


              <form action="{{url('shortlist')}}" method="post">
                {!! csrf_field() !!}
                <input type="hidden" name="user_id" value="{{$seek->id}}">
                <input type="hidden" name="shortlisted_for_job_id" value="{{$seek->odd_id}}">
                <button type="submit" class="btn btn-warning btn-sm btn-block-sm">
                  <i class="fa fa-user"></i> Shortlist
                </button>
              </form>
            </form>



            </div>

          </div>
              @endif

        @endforeach


      </div>
    </div>
  </div>
