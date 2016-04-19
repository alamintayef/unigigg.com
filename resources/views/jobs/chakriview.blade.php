@extends('layouts.app')

@section('content')
  <div class="container ">
    <div class="row">

      @include('layouts.menu')


      <div class="col-md-10">
        <div class="panel">
          @if(count($job)>0)


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
                    <strong>Educational Requirements: </strong>{{$job->min_edu_level}} / {{$job->major}} / {{$job->cgpa}}
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

                        @if(count($applicable)>2)
                          @if(Auth::user()->verified===0)
                            <p class="text-danger">
                              You need to verify your profile to apply
                            </p>
                          @else
                              @if($reqMatch->Degree_result>=$job->cgpa)
                                <button type="submit" name="button" class="btn btn-success">Apply</button>
                              @else
                                <h6 class="text-danger">Sorry you does not fulfill the minimum job criteria</h6>
                              @endif
                          @endif


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


        @endif
      </div>
    </div>
  </div>
@endsection
