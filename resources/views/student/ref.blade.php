<div class="panel panel-default">
  <div class="panel-heading"><a class="btn btn-primary btn-block btn-lg" data-toggle="collapse" href="#collapseref">Add Reference</a></div>
    <div id="collapseref" class="panel-collapse collapse">
  <div class="panel-body">

{!! Form::open(array('url' => '/refstore')) !!}


<div class="form-group">
  {!! Form::label('referred_by', 'Referee Name:', ['class' => 'control-label']) !!}
  {!! Form::text('referred_by', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('reference_description', 'Description:', ['class' => 'control-label']) !!}
  {!! Form::textarea('reference_description', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('referee_number', 'Referee Contact:', ['class' => 'control-label']) !!}
  {!! Form::text('referee_number', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Add', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

</div>
</div>
</div>
