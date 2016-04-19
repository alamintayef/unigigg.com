

    <div class="panel panel-default">
      <div class="panel-heading"><a class="btn btn-primary btn-lg" data-toggle="collapse" href="#collapse4">
         Add Degrees </a>


       </div>
        <div id="collapse4" class="panel-collapse collapse">
          <div class="panel-body">

    {!! Form::open(array('url' => '/edustore')) !!}
    <div class="form-group">
      {!! Form::label('Degree_name', 'Major:', ['class' => 'control-label']) !!}
      {!! Form::text('Degree_name', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('Degree_type', 'Degree Level:', ['class' => 'control-label']) !!}
      <select class="form-control" name="Degree_type" id="select">
        <option value="SSC">SSC</option>
        <option value="HSC">HSC</option>
        <option value="Bachelors">Bachelors</option>
        <option value="Masters">Masters</option>
      </select>

    </div>
    <div class="form-group">
      {!! Form::label('Degree_start_date', 'Start Date:', ['class' => 'control-label']) !!}
      {!! Form::date('Degree_start_date', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('Degree_end_date', 'Expected / Passing Date:', ['class' => 'control-label']) !!}
      {!! Form::date('Degree_end_date', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('Degree_institute', 'Institute:', ['class' => 'control-label']) !!}
      {!! Form::text('Degree_institute', null, ['class' => 'form-control']) !!}
      <small class="text-danger">Please insert the full Institute name</small>
    </div>
    <div class="form-group">
      {!! Form::label('Degree_result', 'Result:', ['class' => 'control-label']) !!}
      {!! Form::text('Degree_result', null, ['class' => 'form-control']) !!}
    </div>



    {!! Form::submit('Add', ['class' => 'btn btn-primary']) !!}

 {!! Form::close() !!}

</div>
</div>
</div>
