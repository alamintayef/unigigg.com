@extends('layouts.app')
@if(count($job)>0)
<title>{{$job->job_name}}</title>
@section('content')
  <div class="container-fluid padtop  ">
    <div class="row">
      <div class="col-md-1">

      </div>
      <div class="col-md-10">


          <div class="panel">

          <h3 class="textb padsmall">{{$job->job_name}}</h3>

            <div class="col-md-12 card card-raised">

                <div class="panel-heading">
                  Type: {{$job->job_type}}
                  <li>Location: {{$job->job_location}}</li>
                  <li>Salary: {{$job->job_salary}}</li>
                </div>
                <div class="panel-body ">
                  <p>
                    <strong>Description: </strong>{!! $job->job_description !!}
                  </p>
                  <hr>
                  <p>
                    <strong>Educational Requirements: </strong>{{$job->min_edu_level}} / {{$job->major}} / {{$job->cgpa}}
                  </p>
                  <p>
                    <strong>  Additional Requirements: </strong>  {!! $job->job_reqs_additional !!}
                  </p>
                  <p>
                    <strong>  Application Deadline: </strong>  {{$job->job_last_date_application}}
                  </p>
                </div>
                <div class="panel-footer">

                  <div class="well">
                    <strong>Posted By {{$job->company_name}}</strong>
                    <hr>
                  <a href="{{url('login')}}" class="btn btn-link">Apply</a><br>
                  share the post on
                  <a href="https://www.facebook.com/sharer/sharer.php?u=www.unigigg.com/view/jobs/{{$job->slug}}?button=" target="_blank" ><i class="fa fa-facebook"></i></a>


                    </div>
                  </div>

            </div>

        @endif
      </div>
    </div>
  </div>
  @include('layouts.footer')
@endsection
