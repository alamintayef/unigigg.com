

    <div class="panel panel-default">
      <div class="panel-heading"><a class="btn btn-primary btn-block btn-lg" data-toggle="collapse" href="#collapsefun">Someting About You</a></div>
        <div id="collapsefun" class="panel-collapse collapse">
      <div class="panel-body">

    {!! Form::open(array('url' => '/funstore')) !!}


    <div class="form-group">
      {!! Form::label('fun_facts', 'Decribe yourself in one sentence:', ['class' => 'control-label']) !!}
      {!! Form::text('fun_facts', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('inspiration_qot', 'What is you favorite inspirational qoute:', ['class' => 'control-label']) !!}
      {!! Form::text('inspiration_qot', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('Why_you', 'Why should people Hire You ?', ['class' => 'control-label']) !!}
      {!! Form::textarea('Why_you', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('Why_not_you', 'Why should not people Hire You ?', ['class' => 'control-label']) !!}
      {!! Form::textarea('Why_not_you', null, ['class' => 'form-control']) !!}
    </div>


    {!! Form::submit('Add', ['class' => 'btn btn-primary']) !!}

 {!! Form::close() !!}

</div>
</div>
</div>
