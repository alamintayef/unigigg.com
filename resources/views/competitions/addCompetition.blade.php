@extends('layouts.app')

@section('content')


<div class="container padtop">
		<div class="row">
      <div class="col-md-8 panel whiteproper pad">
        <h2>Add Competiton</h2>
      {!! Form::open(array('url' => '/add/competition/create')) !!}


      <div class="form-group">
        {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('event_date', 'Event Date:', ['class' => 'control-label']) !!}
        {!! Form::date('event_date', null, ['class' => 'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('last_date_of_application', 'Deadline:', ['class' => 'control-label']) !!}
        {!! Form::date('last_date_of_application', null, ['class' => 'form-control']) !!}
      </div>
      <div class="form-group">
        {!! Form::label('competition_link', 'Competition URL', ['class' => 'control-label']) !!}
        {!! Form::text('competition_link', null, ['class' => 'form-control']) !!}
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
      @if(count($competition)>0)
        @foreach($competition as $com)
          {{$com->title}}

          <button type="submit" name="button"> <i class="fa fa-edit"></i></button></form> <form class="" action="index.html" method="post"><button type="submit" ><i class="fa fa-close"></i></button></form>

        @endforeach

      @endif

    </div>
    </div>
  </div>
@endsection
