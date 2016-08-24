@extends('layouts.app')

@section('content')
  <script type="text/javascript">
  (function ($) {
    $('#hobby').smoothState();
 }) (jQuery);

  </script>
  <div class="container padtop" id="hobby">
    <div class="row">
      @include('layouts.menu')
      <div class="col-md-10">

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

    {!! Form::open(array('url' => 'blog/post/create')) !!}

    <small class="text-danger">Every field is required</small>
    <div class="form-group">
      {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
      {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('subtitle', 'Sub Title:', ['class' => 'control-label']) !!}
      {!! Form::text('subtitle', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('body', 'Write Post:', ['class' => 'control-label']) !!}
      {!! Form::textarea('body', null, ['class' => 'form-control' ,'rows'=>'10','id'=>'post']) !!}
    </div>
    @if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
  @endif



    {!! Form::submit('Add', ['class' => 'btn btn-primary']) !!}

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
