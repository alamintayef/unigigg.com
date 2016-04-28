

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
      {!! Form::label('body', 'Write Post:', ['class' => 'control-label']) !!}
      {!! Form::textarea('body', null, ['class' => 'form-control' ,'rows'=>'4','id'=>'post']) !!}
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
<script src="//cdn.ckeditor.com/4.5.8/standard/ckeditor.js"></script>
<script type="text/javascript">
 CKEDITOR.replace( 'post' );


</script>
