@extends('layouts.app')

@section('content')
  <div class="container ">
    <div class="row">
      @include('layouts.menu')
      <div class="col-md-6 whiteproper panel">

          <h2 class="textb">Post Eccentric Jobs</h2>

        {!! Form::open(array('url' => '/eccentricJobspost')) !!}
        @if($errors->any())
          <div class="alert alert-danger">
            @foreach($errors->all() as $error)
              <p>{{ $error }}</p>
            @endforeach
          </div>
        @endif
      <div class=" pad">
        <div class="form-group">
          {!! Form::label('title', 'Job Title:', ['class' => 'control-label']) !!}
          {!! Form::text('title', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">

          <label for="type">Catagory</label>
          <select class="form-control" id="select" name="type">
            <option value="Tution">Tuition</option>
            <option value="Assignment">Assignment Help</option>
            <option value="Others">Others</option>

          </select>

        </div>
        <div class="form-group">
          {!! Form::label('description', 'Job Description:', ['class' => 'control-label']) !!}
          {!! Form::textarea('description', null, ['class' => 'form-control', 'rows'=>2]) !!}
        </div>
        <div class="form-group">

          <label for="type">Offering(TK):</label>
          <select class="form-control" id="select" name="offering">
            <option value="1000">1000</option>
            <option value="1000-3000">1000-3000</option>
            <option value="3000-5000">3000-5000</option>
            <option value="5000-10000">5000-10000</option>
          </select>

        </div>
        <div class="form-group">
          {!! Form::label('area', 'Location:', ['class' => 'control-label']) !!}
          {!! Form::text('area', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
          <label for="university" class="control-label">University</label>
          <select class="form-control" name="university" id="select">
            @foreach($uni as $unis)
              <option value="{{$unis->university}}">{{$unis->university}}</option>
            @endforeach
          </select>
        </div>
        <div class="form-group">
          {!! Form::submit('Post Job', array( 'class'=>'btn btn-success form-control' )) !!}
        </div>
        {!! Form::close() !!}
      </div>
    </div>
      <div class="col-md-3 col-sm-offset-1 whiteproper panel">

          <h4 >Instructions</h4 >
          <p>

          </p>

      </div>
      <div class="col-md-3 col-xs-offset-1 center panel whiteprope pad">
        <h5>Jobs Posted By You</h5>
        @foreach($postedjobs as $jobs)
        {{$jobs->title}}<br>

        @endforeach


      </div>
    </div>
  </div>
@endsection
