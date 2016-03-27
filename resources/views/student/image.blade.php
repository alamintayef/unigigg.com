<div class="panel panel-default">
  <div class="panel-heading"><a class="btn btn-primary btn-block btn-lg" data-toggle="collapse" href="#collapse5">Upload Profile Pic</a>

  </div>
  <div id="collapse5" class="panel-collapse collapse">
      <div class="panel-body">

      {!! Form::open(array('url' => '/imagestore','files'=>true)) !!}



      <div class="form-group">
          {!! Form::label('filePath', 'Choose profile Image') !!}
          {!! Form::file('filePath', array('class'=>'btn btn-info')) !!}
      </div>

      <div class="form-group">
          {!! Form::submit('upload', array( 'class'=>'btn btn-success form-contro' )) !!}
      </div>



      {!! Form::close() !!}
      </div>
    </div>
  </div>
