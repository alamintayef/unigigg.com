@extends('layouts.app')
@if(count($job)>0)
<title>{{$job->title}}</title>
@section('content')
  <div class="container-fluid  padtop ">
    <div class="row">
      <div class="col-md-1">

      </div>
      <div class="col-md-10">


          <div class="panel">

          <h3 class="textb padsmall">{{$job->title}}</h3>

            <div class="col-md-12 card card-raised">

                <div class="panel-heading">
                  Type: {{$job->type}}
                  <li>Location: {{$job->area}}</li>
                  <li>Salary: {{$job->offering}}</li>
                </div>
                <div class="panel-body ">
                  <p>
                    <strong>Description: </strong>{{$job->description}}
                  </p>
                  <hr>

                  <p>
                    <strong>  Application Deadline: </strong>  {{$job->job_expires}}
                  </p>
                </div>
                <div class="panel-footer">

                  <div class="well">
                    <strong>Posted By {{$job->name}}</strong>
                    <hr>
                  <a href="{{url('login')}}" class="btn btn-link">Apply</a><br>
                  share the post on
                  <a href="https://www.facebook.com/sharer/sharer.php?u=www.unigigg.com/view/odd/jobs/{{$job->title}}?button=" target="_blank" ><i class="fa fa-facebook"></i></a>


                    </div>
                  </div>

            </div>

        @endif
      </div>
    </div>
  </div>
  @include('layouts.footer')
@endsection
