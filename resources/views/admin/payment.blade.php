@extends('layouts.app')
@section('content')
<div class="container">
<div class="row">

<div class="col-md-8 center">



  <div class="panel whiteproper pad">
    <h4>Add you payment information</h4>
    <small>You can use any bkash number. Just bkash the fee and add the number with transaction id</small>
    <br><small class="text-primary">We encourage you to register for bkash.</small>
      {!! Form::open(array('url' => '/payment/store/bkash')) !!}
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
      {!! Form::label('bkash_number', 'Bkash Number:', ['class' => 'control-label']) !!}
      {!! Form::text('bkash_number', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('transaction_id', 'Transaction ID:', ['class' => 'control-label']) !!}
      {!! Form::text('transaction_id', null, ['class' => 'form-control']) !!}
    </div>
      {!! Form::submit('Verify', ['class' => 'btn btn-primary']) !!}
  </div>
  </div>
</div>
</div>

@endsection
