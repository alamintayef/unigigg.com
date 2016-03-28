@extends('layouts.app')

@section('content')
  <div class="container ">
    <div class="row">
      @include('layouts.emmenu')
      <div class="col-md-10">
        <div class="well">
          <h4 class="text-info">Jobs Posted by You</h4>
        </div>
        <div class="col-md-12">
          @if(count($postedjobs)>0)

              @foreach($postedjobs as $jobs)



                  <div class="panel panel-primary">
                    <div class="panel-heading">
                      <h3 class="panel-title">{{$jobs->job_name}}</h3>
                    </div>
                    <div class="panel-body">
                      <Type: {{$jobs->job_type}}</li>
                      <li>Location: {{$jobs->job_location}}</li>
                      <li>Salary: {{$jobs->job_salary}}</li>
                      <div class="well">
                        Description: {{$jobs->job_description}}
                        <br>
                        Requirements :{{$jobs->job_reqs}}
                      </div>
                    </div>

                    <div class="panel-footer">
                      <form class="form-inline" action="{{url('postjobs',$jobs->job_id)}}" method="POST">
                        {!! csrf_field() !!}
                        <button type="submit" class="btn btn-danger btn-sm btn-block-sm">
                          <i class="fa fa-user"></i> Remove
                        </button>
                        <h6 class="pull-right textb">Posted on : {{$jobs->created_at}}</h6>
                      </form>


                    </div>
                  </div>


              @endforeach

            @endif



        </div>
