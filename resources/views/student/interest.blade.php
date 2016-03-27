

    <div class="panel panel-default">
      <div class="panel-heading"><a class="btn btn-primary btn-block btn-lg" data-toggle="collapse" href="#collapse3">Interests</a></div>
      <div id="collapse3" class="panel-collapse collapse">
          <div class="panel-body">

    {!! Form::open(array('url' => '/intereststore')) !!}


    <div class="form-group">
      {!! Form::label('interest_name', 'Interest Name:', ['class' => 'control-label']) !!}
      {!! Form::text('interest_name', null, ['class' => 'form-control']) !!}
    </div>


    {!! Form::submit('Add', ['class' => 'btn btn-primary']) !!}

 {!! Form::close() !!}

</div>
</div>

</div>
