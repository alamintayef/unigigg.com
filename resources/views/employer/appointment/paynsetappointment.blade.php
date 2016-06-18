@extends('layouts.app')
@section('content')
<div class="container padtop">
<div class="row">

<div class="col-md-10">

    <div class="col-md-3">

    </div>
    <div class="col-md-8 ">
  <div class="card-raised whiteproper pad">
    <h4>Set Appointment </h4>
    <small>Admin Will Notify all the candidates for you.</small>

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
      {!! Form::date('appointment', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('appoint_time', 'Time:', ['class' => 'control-label']) !!}
      {!! Form::text('appoint_time', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('identifier', 'Bkash Number:', ['class' => 'control-label']) !!}
      {!! Form::text('identifier', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('transaction_id', 'Transaction ID:', ['class' => 'control-label']) !!}
      {!! Form::text('transaction_id', null, ['class' => 'form-control']) !!}
    </div>
    <input type="hidden" name="job_id" value="{{$job->job_id}}">


  {!! Form::submit('Confirm', ['class' => 'btn btn-primary']) !!}

  {!! Form::close() !!}
  </div>
  </div>
  </div>
</div>
</div>
</div>

@endsection
