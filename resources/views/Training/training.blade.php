@extends('layouts.app')

@section('content')


<div class="container padtop">
		<div class="row">
      <div class="col-md-8 panel whiteproper pad">
        <h2>Add Training</h2>
      {!! Form::open(array('url' => '/add/training/create')) !!}


      <div class="form-group">
        {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('training_type', 'Type:', ['class' => 'control-label']) !!}
        {!! Form::text('training_type', null, ['class' => 'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('training_description', 'Description:', ['class' => 'control-label']) !!}
        {!! Form::textarea('training_description', null, ['class' => 'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('application_fee', 'Application Fee:', ['class' => 'control-label']) !!}
        {!! Form::text('application_fee', null, ['class' => 'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('training_start_date', 'Event Date:', ['class' => 'control-label']) !!}
        {!! Form::date('training_start_date', null, ['class' => 'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('application_dead_line', 'Deadline:', ['class' => 'control-label']) !!}
        {!! Form::date('application_dead_line', null, ['class' => 'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('payment_method', 'Payment Method', ['class' => 'control-label']) !!}
        {!! Form::text('payment_method', null, ['class' => 'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('organized_by', 'Organizer', ['class' => 'control-label']) !!}
        {!! Form::text('organized_by', null, ['class' => 'form-control']) !!}
      </div>


      {!! Form::submit('Add', ['class' => 'btn btn-primary']) !!}

      {!! Form::close() !!}


    </div>
    <div class="col-md-3 col-md-offset-1 panel padsmall">

      <h3>Added So Far</h3>
      @if(count($training)>0)
        @foreach($training as $trainings)
          {{$trainings->title}}

        @endforeach

      @endif

    </div>
    </div>
  </div>
@endsection
