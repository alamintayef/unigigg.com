@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">

<div class="col-md-8">


    <div class="col-md-8 center">
  <div class="panel whiteproper pad">
    <h4>Set Appointment </h4>
    <small>Admin will notify all the finalized candidates for you</small>

      {!! Form::open(array('url' => 'payment/call/for/interview')) !!}
      @if(count($errors)>0)
        <div class="alert alert-danger">
          @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
          @endforeach
        </div>
      @endif
      @if (notify()->ready())
        <script>
        swal({
          title: "{!! notify()->message() !!}",
          text: "{!! notify()->option('text') !!}",
          type: "{{ notify()->type() }}",
          @if (notify()->option('timer'))
          timer: {{ notify()->option('timer') }},
          showConfirmButton: false
          @endif
        });
        </script>
      @endif
    <div class="form-group">
      {!! Form::label('appointment', 'Appointment Date:', ['class' => 'control-label']) !!}
      {!! Form::date('appointment', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('appoint_time', 'Time:', ['class' => 'control-label']) !!}
      {!! Form::text('appoint_time', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('identifier', 'Proof of Payment:', ['class' => 'control-label']) !!}
      {!! Form::text('identifier', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('transaction_id', 'Transaction ID:', ['class' => 'control-label']) !!}
      {!! Form::text('transaction_id', null, ['class' => 'form-control']) !!}
    </div>


      {!! Form::submit('Confirm', ['class' => 'btn btn-primary']) !!}
  </div>
  </div>
  </div>
</div>
</div>
</div>

@endsection
