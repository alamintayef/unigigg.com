

    <div class="panel panel-default">
      <div class="panel-heading">Create a Post</div>

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
