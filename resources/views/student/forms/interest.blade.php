

    <div class="panel panel-default">
    <div class="panel-body">

    {!! Form::open(array('url' => '/intereststore')) !!}


    <div class="form-group">
      <h4>Upload you CV/Resume in GoogleDriver/Dropbox and share the link here.</h4>
      {!! Form::label('interest_name', 'Your CV or Resume Link', ['class' => 'control-label']) !!}
      {!! Form::text('interest_name', null, ['class' => 'form-control']) !!}
    </div>



    {!! Form::submit('Add', ['class' => 'btn btn-primary']) !!}

 {!! Form::close() !!}

</div>
</div>
