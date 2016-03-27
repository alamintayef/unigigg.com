
      <div class="panel-body whiteproper">

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
