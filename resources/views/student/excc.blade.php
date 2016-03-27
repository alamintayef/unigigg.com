

    <div class="panel panel-default">
      <div class="panel-heading"><a class="btn btn-primary btn-block btn-lg" data-toggle="collapse" href="#collapseexcc">Add Extra Curricular Acitivities</a></div>
        <div id="collapseexcc" class="panel-collapse collapse">
          <div class="panel-body">

    {!! Form::open(array('url' => '/exccstore')) !!}


    <div class="form-group">
      {!! Form::label('excc_name', 'Title:', ['class' => 'control-label']) !!}
      {!! Form::text('excc_name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('excc_start_date', 'Start Date:', ['class' => 'control-label']) !!}
      {!! Form::date('excc_start_date', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('excc_end_date', 'End Date:', ['class' => 'control-label']) !!}
      {!! Form::date('excc_end_date', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('excc_description', 'Tell Us Something About it:', ['class' => 'control-label']) !!}
      {!! Form::textarea('excc_description', null, ['class' => 'form-control' ,'row'=>'3',]) !!}
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
