

    <div class="panel panel-default">
      <div class="panel-heading"><a class="btn btn-primary  btn-lg" data-toggle="collapse" href="#collapse3">Vedio Profile</a></div>
      <div id="collapse3" class="panel-collapse collapse">
          <div class="panel-body">

    {!! Form::open(array('url' => '/vdostore')) !!}


    <div class="form-group">
      {!! Form::label('vdourl', 'Vedio Url:', ['class' => 'control-label']) !!}
      {!! Form::text('vdourl', null, ['class' => 'form-control']) !!}
    </div>


    {!! Form::submit('Add', ['class' => 'btn btn-primary']) !!}

 {!! Form::close() !!}

</div>
</div>

</div>
