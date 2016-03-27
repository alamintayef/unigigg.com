

<div class="panel panel-default">
    <div class="panel-heading"><a class="btn btn-primary btn-lg" data-toggle="collapse" href="#collapse1">Add Skills</a></div>
      <div id="collapse1" class="panel-collapse collapse">
      <div class="panel-body">

    {!! Form::open(array('url' => '/skillstore')) !!}


    <div class="form-group">
      {!! Form::label('skill_name', 'Skill Name:', ['class' => 'control-label']) !!}
      {!! Form::text('skill_name', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      <label for="skill_level" class="control-label">Skill Level</label>
      <select class="form-control" name="skill_level" id="select">
          <option value="Beginner">Beginner</option>
          <option value="Amature">Amature</option>
          <option value="Expert">Expert</option>
      </select>

    </div>
    <div class="form-group">
      <label for="skill_experience" class="control-label">Skill Experience</label>
      <select class="form-control" name="skill_experience" id="select">
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="5+">5+</option>
      </select>

    </div>



    {!! Form::submit('Add', ['class' => 'btn btn-primary']) !!}

 {!! Form::close() !!}


</div>
</div>
</div>
