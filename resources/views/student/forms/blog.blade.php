

    <div class="panel panel-default">
      <div class="panel-heading">Create a Post</div>

      <div class="panel-body">

    {!! Form::open(array('url' => 'blog/post/create','id'=>'BlogForm')) !!}

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

  <i id='loading' class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
  <span class="sr-only">Loading...</span>
    {!! Form::submit('Add', ['class' => 'btn btn-primary','id'=>'blog_submit']) !!}

 {!! Form::close() !!}

</div>
</div>
</div>

<script type="text/javascript">
 CKEDITOR.replace( 'post' );
  $("#loading").hide();

</script>
<script type="text/javascript">
var form = $('#form');

var alert = $('.alert');// contact form

$("#blog_submit").click(function (e) {
  $("#loading").show();
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    }
  })

  e.preventDefault();

  $.ajax({
    url: '/blog/post/create',

    data: {
      'title':$('input[name=title]').val(),
      'subtitle':$('input[name=subtitle]').val(),
      'body':$('textarea[name=body]').val(),
      '_token': $('input[name=_token]').val(),

    },

    type: 'POST',
    datatype: 'JSON',
    success: function (response) {
      $("#loading").hide();
      alertify.success("Added Successfully");
      document.getElementById('BlogForm').reset();

  },
  error: function (data) {
    console.log('Error:', data);
  }
});
});
</script>
