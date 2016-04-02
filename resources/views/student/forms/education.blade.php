

    <div class="panel panel-default">
      <div class="panel-heading"><a class="btn btn-primary btn-lg" data-toggle="collapse" href="#collapse4">
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
      <select class="form-control" name="Degree_type" id="select">
        <option value="Secondary">Secondary</option>
        <option value="Higher Secondary">Higher Secondary</option>
        <option value="Under Graduate">Under Graduate</option>
        <option value="Graduate">Graduate</option>
      </select>

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
