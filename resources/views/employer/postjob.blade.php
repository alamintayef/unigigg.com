@extends('layouts.app')

@section('content')
  <div class="container ">
    <div class="row">
      @include('layouts.emmenu')
      <div class="col-md-6 ">
        <div class="well panel whiteproper" >
          <h4>Post A Job</h4>
          @if (notify()->ready())
            <div class="alert alert-{{notify()->type()}}">
              {{notify()->message()}}
            </div>
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

          <div class="form-group">
            {!! Form::label('job_reqs', 'Job Requirments:') !!}<span class="text-danger">*</span>
            {!! Form::textarea('job_reqs', null, ['class'=>'form-control', 'rows'=>2] ) !!}
            <small class="ssmal">Basic Requirments</small>
          </div>
          <div class="form-group">
            {!! Form::label('job_education_reqs', 'Educational Requirments:') !!}<span class="text-danger">*</span>
            {!! Form::textarea('job_education_reqs', null, ['class'=>'form-control', 'rows'=>2] ) !!}
            <small class="ssmal">e.g. BSc in Computer Science, Bachelors in Business Administration</small>
          </div>
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

          <div class="form-group">
            {!! Form::submit('Post Job', array( 'class'=>'btn btn-success form-control' )) !!}
          </div>

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
