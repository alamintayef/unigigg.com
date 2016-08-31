

    <div class="panel panel-default">
      <div class="panel-heading"><a class="btn btn-primary  btn-lg" data-toggle="collapse" href="#collapse6">Add a Cover Letter</a></div>
        <div id="collapse6" class="panel-collapse collapse">
      <div class="panel-body">

    {!! Form::open(array('url' => '/hobbystore')) !!}


    <div class="form-group">
      {!! Form::label('hobbies_name', 'Cover Letter URL:', ['class' => 'control-label']) !!}
      {!! Form::text('hobbies_name', null, ['class' => 'form-control']) !!}
    </div>



    {!! Form::submit('Add', ['class' => 'btn btn-primary']) !!}

 {!! Form::close() !!}

</div>
</div>
</div>
