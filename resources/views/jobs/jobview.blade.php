@extends('layouts.app')

@section('content')
  <div class="container ">
    <div class="row">

      @include('layouts.emmenu')


      <div class="col-md-10">
        <div class="panel">
          @if(count($jobs)>0)

            @foreach($jobs as $job)
              <h3 class="textb  padsmall">Title: {{$job->job_name}}</h3>
            </div>
            <div class="col-md-12">

              <div class="panel panel-default">
                <div class="panel-heading">
                  Type: {{$job->job_type}}
                  <li>Location: {{$job->job_location}}</li>
                  <li>Salary: {{$job->job_salary}}</li>
                </div>
                <div class="panel-body">


                  <p>
                    <strong>Description: </strong>{{$job->job_description}}
                  </p>
                  <hr>
                  <p>
                    <strong>Requirements: </strong> {{$job->job_reqs}}
                  </p>
                  <p>
                    <strong>  Additional Requirements: </strong>  {{$job->job_reqs_additional}}
                  </p>
                  <p>
                    <strong>  Application Deadline: </strong>  {{$job->job_last_date_application}}
                  </p>
                </div>
                <div class="panel-footer">

                  <div class="well">
                    <strong>Posted By {{$job->company_name}}</strong>

                    <!-- Check if its recruter or not-->
                    @if(Auth::user()->type===1)
                      <form class="form-control" action="{{url('apply')}}" method="post">
                        {!! csrf_field() !!}
                        <div class="form-group">
                          <input type="hidden" name="applied_for_job_id" value="{{$job->job_id}}">
                        </div>
                        <div class="form-group">
                          <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        </div>
                        @if(count($applicable)>0)


                            <button type="submit" name="button" class="btn btn-success">Apply</button>

                        @else
                          <p class="text-danger">
                            Fill Profile Information to apply to jobs
                          </p>
                        @endif


                      </form>
                    </div>
                  </div>
                @endif
              </div>

            </div>
          @endforeach
        @endif
      </div>
    </div>
  </div>
@endsection
