

    <div class="panel panel-default">
      <div class="panel-heading"><a class="btn btn-primary btn-block btn-lg" data-toggle="collapse" href="#collapse6">Add Hobbies</a></div>
        <div id="collapse6" class="panel-collapse collapse">
      <div class="panel-body">

    {!! Form::open(array('url' => '/hobbystore')) !!}


    <div class="form-group">
      {!! Form::label('hobbies_name', 'Hobby Name:', ['class' => 'control-label']) !!}
      {!! Form::text('hobbies_name', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('hobbies_related_work', 'Tell Us Someting:', ['class' => 'control-label']) !!}
      {!! Form::textarea('hobbies_related_work', null, ['class' => 'form-control']) !!}
    </div>


    {!! Form::submit('Add', ['class' => 'btn btn-primary']) !!}

 {!! Form::close() !!}

</div>
</div>
</div>
