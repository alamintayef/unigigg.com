

    <div class="panel panel-default">
      <div class="panel-heading"><a class="btn btn-primary btn-lg btn-block" data-toggle="collapse" href="#collapse4">
         Add Degrees </a>
      

       </div>
        <div id="collapse4" class="panel-collapse collapse">
          <div class="panel-body">

    {!! Form::open(array('url' => '/edustore')) !!}


    <div class="form-group">
      {!! Form::label('Degree_name', 'Degree Name:', ['class' => 'control-label']) !!}
      {!! Form::text('Degree_name', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('Degree_type', 'Degree Level:', ['class' => 'control-label']) !!}
      {!! Form::text('Degree_type', null, ['class' => 'form-control']) !!}
      <small>E,G: SSC, HSC, BSC,MSC,PHD</small>
    </div>
    <div class="form-group">
      {!! Form::label('Degree_start_date', 'Start Date:', ['class' => 'control-label']) !!}
      {!! Form::date('Degree_start_date', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('Degree_end_date', 'Passing Date:', ['class' => 'control-label']) !!}
      {!! Form::date('Degree_end_date', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('Degree_institute', 'Degree Institute:', ['class' => 'control-label']) !!}
      {!! Form::text('Degree_institute', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('Degree_result', 'Degree_result:', ['class' => 'control-label']) !!}
      {!! Form::number('Degree_result', null, ['class' => 'form-control']) !!}
    </div>



    {!! Form::submit('Add', ['class' => 'btn btn-primary']) !!}

 {!! Form::close() !!}

</div>
</div>
</div>
