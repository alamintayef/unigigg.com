@extends('layouts.app')

@section('content')




<div class="col-sm-4 panel col-md-offset-1">
  <div class="panel-body">

      {!! Form::open(array('url' => '/university')) !!}

      @if (notify()->ready())
        <div class="alert alert-{{notify()->type()}}">
          {{notify()->message()}}
        </div>
      @endif
    <div class="form-group">
      {!! Form::label('university', 'Add University:', ['class' => 'control-label']) !!}
      {!! Form::text('university', null, ['class' => 'form-control']) !!}
    </div>
      {!! Form::submit('Add', ['class' => 'btn btn-primary']) !!}
  </div>

</div>

@endsection
