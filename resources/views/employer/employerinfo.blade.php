@extends('layouts.app')

@section('content')
  <div class="container ">
    <div class="row">
      @include('layouts.emmenu')
      <div class="col-md-8">
        <div class="well">
          <h4 class="text-info">Build Company Profile</h4>
        </div>
        <h1 class="well well-lg">Basic info</h1>
        @if (notify()->ready())
          <div class="alert alert-{{notify()->type()}}">
            {{notify()->message()}}
          </div>
        @endif
      


        <div class="col-md-8">
          {!! Form::open(array('url' => '/employerinfo')) !!}
          @if($errors->any())
          <div class="alert alert-danger">
              @foreach($errors->all() as $error)
                  <p>{{ $error }}</p>
              @endforeach
          </div>
        @endif

          <div class="form-group">
            {!! Form::label('company_name', 'Company Name:') !!}
            {!! Form::text('company_name', null, ['class'=>'form-control']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('company_phone', 'Company Contact Number:') !!}
            {!! Form::text('company_phone', null, ['class'=>'form-control']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('company_email', 'Company Email:') !!}
            {!! Form::email('company_email', null, ['class'=>'form-control']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('company_address', 'Company Address:') !!}
            {!! Form::textarea('company_address', null, ['class'=>'form-control', 'rows'=>2]) !!}
          </div>

          <div class="form-group">
            <label for="company_type">Company Type</label>
              <select class="form-control" id="select" name="company_type">
                <option value="StartUp">StartUp</option>
                <option value="SMB">SMB</option>
                <option value="MNC">MNC</option>
                <option value="NGO">NGO</option>
                <option value="Govt">Govt</option>
              </select>
            </div>
            <div class="form-group">
              {!! Form::label('company_size', 'Size:') !!}
              {!! Form::text('company_size', null, ['class'=>'form-control'] ) !!}
            </div>

            <div class="form-group">
              {!! Form::label('company_description', 'Description:') !!}
              {!! Form::textarea('company_description', null, ['class'=>'form-control', 'rows'=>2] ) !!}
            </div>


            <div class="form-group">
              {!! Form::submit('Save', array( 'class'=>'btn btn-success form-control' )) !!}
            </div>


            {!! Form::close() !!}
            @include('student.image')
          </div>




        </div>
      </div>
    </div>

  @endsection
