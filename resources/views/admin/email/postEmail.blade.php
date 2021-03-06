@extends('layouts.app')

@section('content')
  <script type="text/javascript">
  (function ($) {
    $('#email').smoothState();
 }) (jQuery);

  </script>
  <div class="container padtop" id="email">
    <div class="row">

      <div class="col-md-12 col-xs-12">

      <div class="well">

            @if(count($errors)>0)
              <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                  <p>{{ $error }}</p>
                @endforeach
              </div>
            @endif
        @include('errors.notify')

    <div class="panel panel-default">
      <div class="panel-heading">Create a Email</div>

      <div class="panel-body">

    {!! Form::open(array('url' => 'admin/email/send')) !!}

        <small class="text-danger">Email</small>
        <div class="form-group">
          {!! Form::label('Subject', 'Subject:', ['class' => 'control-label']) !!}
          {!! Form::text('subject', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('subtitle', 'Sub Title:', ['class' => 'control-label']) !!}
          {!! Form::text('subtitle', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('body', 'Body :', ['class' => 'control-label']) !!}
          {!! Form::textarea('body', null, ['class' => 'form-control' ,'rows'=>'10','id'=>'post']) !!}
        </div>

        @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
      @endif



        {!! Form::submit('Send', ['class' => 'btn btn-primary']) !!}

 {!! Form::close() !!}

</div>
</div>
</div>

<script type="text/javascript">
 CKEDITOR.replace( 'post' );


</script>

      </div>
    </div>

  </div>
</div>



@endsection
