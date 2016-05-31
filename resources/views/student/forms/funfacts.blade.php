

    <div class="panel panel-default">
      
      <div class="panel-body">

    {!! Form::open(array('url' => '/funstore')) !!}

    <small class="text-danger">Every field is required</small>
    <div class="form-group">
      {!! Form::label('fun_facts', 'Decribe yourself in one sentence:', ['class' => 'control-label']) !!}
      {!! Form::text('fun_facts', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('inspiration_qot', 'What is you fav inspirational qoute:', ['class' => 'control-label']) !!}
      {!! Form::text('inspiration_qot', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('Why_you', 'Why People Hire You ?', ['class' => 'control-label']) !!}
      {!! Form::textarea('Why_you', null, ['class' => 'form-control', 'rows'=>2]) !!}
    </div>
    <div class="form-group">
      {!! Form::label('Why_not_you', 'Why should not People Hire You ?', ['class' => 'control-label']) !!}
      {!! Form::textarea('Why_not_you', null, ['class' => 'form-control', 'rows'=>2]) !!}
    </div>


    {!! Form::submit('Add', ['class' => 'btn btn-primary']) !!}

 {!! Form::close() !!}

</div>
</div>
</div>
