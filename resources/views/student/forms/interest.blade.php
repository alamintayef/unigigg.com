

    <div class="panel panel-default">
    <div class="panel-body">

    {!! Form::open(array('url' => '/interest/store','id'=>'cvform')) !!}


    <div class="form-group">
      <h4>Upload you CV/Resume in GoogleDrive/Dropbox and share the link here.</h4>
      {!! Form::label('interest_name', 'Your CV or Resume Link', ['class' => 'control-label']) !!}
      {!! Form::text('interest_name', null, ['class' => 'form-control']) !!}
    </div>


    <i id='loading' class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
    <span class="sr-only">Loading...</span>
    {!! Form::submit('Add', ['class' => 'btn btn-info','id'=>'cvid']) !!}

 {!! Form::close() !!}

</div>
</div>
