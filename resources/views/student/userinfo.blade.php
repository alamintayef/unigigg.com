@extends('layouts.app')

@section('content')
  <div class="container ">
    <div class="row">
      @include('layouts.menu')
      <div class="col-md-6">
        <div class="well">
          <h4 class="text-info">Build Profile</h4>
          <small>Click on buttons to add data</small>
          @if(count($errors)>0)
            <div class="alert alert-danger">
              @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
              @endforeach
            </div>
          @endif
          @if (notify()->ready())
            <div class="alert alert-{{notify()->type()}}">
              {{notify()->message()}}
            </div>
          @endif


        </div>

        <div class="panel panel-default">
          <div class="panel-heading"><a class="btn btn-primary btn-lg btn-block" data-toggle="collapse" href="#collapse2">Basic Information</a></div>
          <div id="collapse2" class="panel-collapse collapse">
            <div class="panel-body">
              {!! Form::open(array('url' => '/userstore')) !!}
              <div class="md-col-6">



                <div class="form-group">
                  {!! Form::label('fname', 'First Name', ['class' => 'control-label']) !!}
                  {!! Form::text('fname', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                  {!! Form::label('lname', 'Last Name', ['class' => 'control-label']) !!}
                  {!! Form::text('lname', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                  {!! Form::label('area', 'Address', ['class' => 'control-label']) !!}
                  {!! Form::text('area', null, ['class' => 'form-control']) !!}
                  <span><small>Provide your living area in Dhaka</small></span>
                </div>
                <div class="form-group">
                  {!! Form::label('post_code', 'post_code', ['class' => 'control-label']) !!}
                  {!! Form::text('post_code', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                  {!! Form::label('other', 'Other Details (if any)', ['class' => 'control-label']) !!}
                  {!! Form::text('other', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                  {!! Form::label('institute', 'Institute :', ['class' => 'control-label']) !!}
                  {!! Form::text('institute', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                  {!! Form::label('passing_date', 'Passing Year :', ['class' => 'control-label']) !!}
                  {!! Form::date('passing_date', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                  {!! Form::label('mobile', 'Contact No :', ['class' => 'control-label']) !!}
                  {!! Form::text('mobile', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                  {!! Form::label('universityId', 'University ID:', ['class' => 'control-label']) !!}
                  {!! Form::text('universityId', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                  {!! Form::label('NId', 'NID:', ['class' => 'control-label']) !!}
                  {!! Form::text('NId', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                  {!! Form::label('facebookId', 'Facebook ID:', ['class' => 'control-label']) !!}
                  {!! Form::text('facebookId', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                  {!! Form::label('LinkedInId', 'LinkedIn ID:', ['class' => 'control-label']) !!}
                  {!! Form::text('LinkedInId', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                  {!! Form::label('youtube', 'Video Profile', ['class' => 'control-label']) !!}
                  {!! Form::text('youtube', null, ['class' => 'form-control']) !!}
                </div>



                {!! Form::submit('Add', ['class' => 'btn btn-primary']) !!}

                {!! Form::close() !!}

              </div>



            </div>
          </div>
          <br>


          @include('student.skills')
          @include('student.interest')
          @include('student.hobby')
          @include('student.education')
          @include('student.image')
          @include('student.experience')
          @include('student.excc')
          @include('student.funfacts')
          @include('student.ref')



        </div>
      </div>
    </div>
  </div>


@endsection
