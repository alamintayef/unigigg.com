@extends('layouts.app')

@section('content')
  <div class="container " id="postedjob">
    <div class="row">
      @include('layouts.emmenu')
      <div class="col-md-10">
        <div class="panel whiteproper padsmall">
          <h4 class="textb"><i class="fa fa-briefcase"></i> Jobs Posted by You</h4>
        </div>
        <div class="col-md-12">
          @if(count($postedjobs)>0)

              @foreach($postedjobs as $jobs)



                  <div class="panel padsmall">

                      <h3 class="panel-title">{{$jobs->job_name}}</h3>

                      <Type: {{$jobs->job_type}}</li>
                      <li>Location: {{$jobs->job_location}}</li>
                      <li>Salary: {{$jobs->job_salary}}</li>

                      <p>
                        Description: {{$jobs->job_description}}
                          </p>
                        <p>
                        Requirements :{{$jobs->job_reqs}}
                          </p>
                          <p>
                            Educational Requirements: {{$jobs->job_education_reqs}}
                          </p>
                          <p>
                            Skill Requirements: {{$jobs->job_skill_reqs}}
                          </p>
                          <p>
                            Additional Requirements: {{$jobs->job_reqs_additional}}
                          </p>

                      <form class="form-inline" action="{{url('deletejobs',$jobs->job_id)}}" method="POST">
                        {!! csrf_field() !!}
                        <button type="submit" class="btn btn-danger btn-sm btn-block-sm">
                          <i class="fa fa-user"></i> Remove
                        </button>

                        <h6 class="pull-right textb">Expires on : {{$jobs->job_expires}}</h6>
                      </form>
                      <form class="pull-right" action="{{url('/shortlists',$jobs->job_id)}}" method="GET">
                        {!! csrf_field() !!}
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-star"></i> show Shortlisted
                        </button>
                      </form>
                      <form class="pull-right" action="{{url('/whoapplied',$jobs->job_id)}}" method="GET">
                        {!! csrf_field() !!}
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-paper-plane"></i> Show Applied
                        </button>
                      </form>


                      @if(Auth::user()->subs_type===0)
                        <form class="pull-right" action="{{url('/setappointment',$jobs->job_id)}}" method="GET">

                        <button type="submit" class="btn btn-default btn-sm">
                          <i class="fa fa-phone"></i> call Shortlisted
                        </button>
                      </form>
                      @else
                        <form class="pull-right" action="{{url('callthem/all',$jobs->job_id)}}" method="POST">
                        {!! csrf_field() !!}
                        <button type="submit" class="btn btn-default btn-sm">
                          <i class="fa fa-phone"></i> call-for-interview
                        </button>
                      </form>
                    @endif

                  </div>



              @endforeach
            @else
              <h4>You have Posted No Jobs</h4>
            @endif



        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
  (function ($) {
  $('#postedjob').smoothState();
})(jQuery);
  </script>
