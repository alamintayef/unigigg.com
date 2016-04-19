@extends('layouts.app')

@section('content')
  <div class="container ">
    <div class="row">
      @include('layouts.emmenu')
      <div class="col-md-6 ">
        <div class="well panel whiteproper" >
          <h4>Post A Job</h4>
          @if($postable>0)
            Welcome
          @else
            <p class="text-danger">
              Please build company profile to post a job <a href="{{url('employerinfo')}}"> Build Profile</a>
            </p>
          @endif
          @if (notify()->ready())
            <script>
            swal({
              title: "{!! notify()->message() !!}",
              text: "{!! notify()->option('text') !!}",
              type: "{{ notify()->type() }}",
              @if (notify()->option('timer'))
              timer: {{ notify()->option('timer') }},
              showConfirmButton: false
              @endif
            });
            </script>
          @endif

        </div>

        <div class="col-md-12 panel whiteproper textb pad">
          {!! Form::open(array('url' => '/postjobs', 'file'=>true)) !!}
          @if($errors->any())
            <div class="alert alert-danger">
              @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
              @endforeach
            </div>
          @endif

          <div class="form-group">
            {!! Form::label('job_name', 'Tltle:') !!}<span class="text-danger">*</span>
            {!! Form::text('job_name', null, ['class'=>'form-control']) !!}
          </div>

          <div class="form-group">
            <label for="job_type">Job Type</label>
            <select class="form-control" id="select" name="job_type">
              <option value="Internship">Internship</option>
              <option value="OneTime">One-Time</option>
              <option value="PartTime">Part-Time</option>
              <option value="FullTime">Full-Time</option>

            </select>
          </div>
          <div class="form-group">
            {!! Form::label('job_salary', 'Salary Offering:') !!}<span class="text-danger">*</span>
            {!! Form::text('job_salary', null, ['class'=>'form-control'] ) !!}
          </div>
          <div class="form-group">
            {!! Form::label('job_location', 'Location:') !!}<span class="text-danger">*</span>
            {!! Form::text('job_location', null, ['class'=>'form-control'] ) !!}
          </div>

          <div class="form-group">
            {!! Form::label('job_description', 'Job Description:') !!}<span class="text-danger">*</span>
            {!! Form::textarea('job_description', null, ['class'=>'form-control', 'rows'=>2] ) !!}
            <small class="ssmal">Describe what the job is all about. e.g. Responsibilities</small>
          </div>

          <hr>
          <div class="form-group">
            {!! Form::label('min_edu_level', 'Minimum Degree Level:', ['class' => 'control-label']) !!}
            <input name="min_edu_level" class="form-control" list="levellist"  />
            <datalist id="levellist" data-multiple>
             <option>Bachelors</option>
             <option>Masters</option>
             <option>HSC</option>
             <option>Graduating Soon</option>
           </datalist>
            <small class="ssmal">e.g. Bachelors, Masters, PHD</small>
          </div>

          <div class="form-group">
            {!! Form::label('major', 'Major:', ['class' => 'control-label']) !!}
            <input name="major" id='major' class="form-control" list="majorlist" data-multiple />
            <datalist id="majorlist">
             <option>Computer Science</option>
             <option>Business Administration</option>
             <option>Electrical</option>
             <option>Environmental Science</option>
             <option>Architecture</option>
             <option>Pharmacy</option>
            </datalist>
            <small class="text-danger">Required</small>
            </div>
            <div class="form-group">
              {!! Form::label('cgpa', 'Minimum CGPA:', ['class' => 'control-label']) !!}
              <input name="cgpa" id='cgpa' class="form-control" list="cgpalist" data-multiple />
              <datalist id="cgpalist">
               <option>2</option>
               <option>2.5</option>
               <option>2.75</option>
               <option>3</option>
               <option>3.25</option>
               <option>3.5</option>
              </datalist>
              <small class="text-danger">Required</small>
              </div>
          <hr>
          <div class="form-group">
            {!! Form::label('job_skill_reqs', 'Skill Requirments:') !!}<span class="text-danger">*</span>
            {!! Form::textarea('job_skill_reqs', null, ['class'=>'form-control', 'rows'=>2] ) !!}
            <small class="ssmal">Insert the specific skill set you are looking for. e.g. MS-Office, Php, Java, Accounting</small>
          </div>

          <div class="form-group">
            {!! Form::label('job_reqs_additional', 'Additional Requirments: ') !!}
            {!! Form::textarea('job_reqs_additional', null, ['class'=>'form-control', 'rows'=>2] ) !!}
            <small class="ssmal">If you have and specific additional requirments</small>
          </div>
          <div class="form-group">
            {!! Form::label('job_start_date', 'Commencing Date:') !!}
            {!! Form::date('job_start_date', null, ['class'=>'form-control'] ) !!}
          </div>
          <div class="form-group">
            {!! Form::label('job_last_date_application', 'Last Date Of Application') !!}
            {!! Form::date('job_last_date_application', null, ['class'=>'form-control'] ) !!}
          </div>
          @if($postable>0)
            @if(Auth::user()->verified===0)
              Sir Please wait untill the profile is verified
            @else
              <div class="form-group">

                  {!! Form::submit('Post Job', array( 'class'=>'btn btn-success form-control' )) !!}
                </div>
            @endif

          @else
            <small class="text-danger">Please build company profile to post a job</small>
          @endif
          @if(Auth::user()->subs_type!=0)
            <input type="hidden" name="paid" value="1">
          @else
              <input type="hidden" name="paid" value="0">
          @endif
          {!! Form::close() !!}
        </div>



      </div>
      <div class="col-md-3 col-xs-offset-1 panel whiteproper pad">
        <h5>Your Jobs</h5>
        @foreach($postedjobs as $jobs)
          <li>{{$jobs->job_name}}</li>

        @endforeach
        <small>Please visit <a href="{{url('/postedjobs')}}">posted jobs</a> to view full job details</small>

      </div>
    </div>
  </div>


@endsection
