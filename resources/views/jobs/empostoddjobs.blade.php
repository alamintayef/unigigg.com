@extends('layouts.app')

@section('content')
  <div class="container ">
    <div class="row">
      @include('layouts.emmenu')
      <div class="col-md-6">

          <h2>Post Eccentric Jobs</h2>




      {!! Form::open(array('url' => '/eccentricJobspost')) !!}
      @if($errors->any())
      <div class="alert alert-danger">
          @foreach($errors->all() as $error)
              <p>{{ $error }}</p>
          @endforeach
      </div>
    @endif
    <div class="whiteproper pad">


      <div class="form-group">
        {!! Form::label('title', 'Job Title:', ['class' => 'control-label']) !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
      </div>
      <div class="form-group">

          <label for="type">Catagory</label>
            <select class="form-control" id="select" name="type">
              <option value="Tution">Tution</option>
              <option value="Assignment">Assignment Help</option>
              <option value="Others">Others</option>

            </select>

      </div>
      <div class="form-group">
        {!! Form::label('description', 'Job Description:', ['class' => 'control-label']) !!}
        {!! Form::textarea('description', null, ['class' => 'form-control', 'rows'=> 2]) !!}
      </div>
      <div class="form-group">

          <label for="type">Offering(Tk):</label>
            <select class="form-control" id="select" name="offering">
              <option value="500-1000">1000</option>
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
        <small>Choose Preferred University, If you have any. <span class="text-danger">Please insert full University name</span></small>
      </div>
      <div class="form-group">
        {!! Form::submit('Post Job', array( 'class'=>'btn btn-success form-control' )) !!}
      </div>

</div>



    </div>
  </div>
  </div>
@endsection
