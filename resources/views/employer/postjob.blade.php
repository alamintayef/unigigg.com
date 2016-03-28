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
                {!! Form::label('job_name', 'Tltle:') !!}
                {!! Form::text('job_name', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('job_type', 'Job Type:') !!}
                {!! Form::text('job_type', null, ['class'=>'form-control'] ) !!}
            </div>
            <div class="form-group">
                {!! Form::label('job_salary', 'Salary:') !!}
                {!! Form::text('job_salary', null, ['class'=>'form-control'] ) !!}
            </div>
            <div class="form-group">
                {!! Form::label('job_location', 'Location:') !!}
                {!! Form::text('job_location', null, ['class'=>'form-control'] ) !!}
            </div>

            <div class="form-group">
                {!! Form::label('job_description', 'Job Description:') !!}
                {!! Form::textarea('job_description', null, ['class'=>'form-control', 'rows'=>4] ) !!}
            </div>

            <div class="form-group">
                {!! Form::label('job_reqs', 'Job Requirments:') !!}
                {!! Form::textarea('job_reqs', null, ['class'=>'form-control', 'rows'=>2] ) !!}
            </div>

            <div class="form-group">
                {!! Form::label('job_reqs_additional', 'Additional Requirments:') !!}
                {!! Form::textarea('job_reqs_additional', null, ['class'=>'form-control', 'rows'=>2] ) !!}
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
        <small>Please visit <a href="{{url('/postedjobs')}}">posted jobs</a> to view full job detailss</small>
        @foreach($postedjobs as $jobs)
          <li>{{$jobs->job_name}}</li>

        @endforeach
      </div>
      </div>
      </div>


    @endsection
