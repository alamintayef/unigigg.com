@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">

      <div class="col-sm-4 pull-left whiteproper panel">
        <div class="panel-body">
          {!! Form::open(array('url' => '/area')) !!}

          <div class="form-group">
            {!! Form::label('area', 'Add Area:', ['class' => 'control-label']) !!}
            {!! Form::text('area', null, ['class' => 'form-control']) !!}
          </div>
          {!! Form::submit('Add', ['class' => 'btn btn-primary']) !!}
        </div>

      </div>
      <div class="col-sm 4 pull-right pad whiteproper panel">
        @foreach($area as $alaka)
          {{$alaka->area}} <br>

        @endforeach

      </div>
    </div>
  </div>

@endsection
