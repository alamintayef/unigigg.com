
      <div class="panel-body panel whiteproper">

      {!! Form::open(array('url' => '/imagestore','files'=>true)) !!}



      <div class="form-group">
          {!! Form::label('filePath', 'Choose profile Image') !!}
          {!! Form::file('filePath', array('class'=>'btn btn-info form-control')) !!}
      </div>

      <div class="form-group">
          {!! Form::submit('upload', array( 'class'=>'btn btn-success ' )) !!}
      </div>



      {!! Form::close() !!}
      </div>
