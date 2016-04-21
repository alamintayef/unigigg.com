


    <div class="col-md-8 padsmall panel">

    {!! Form::open(array('url' => '/vdostore')) !!}


    <div class="form-group">
      {!! Form::label('vdourl', 'Video ID:', ['class' => 'control-label']) !!}
      {!! Form::text('vdourl', null, ['class' => 'form-control']) !!}
    </div>


    {!! Form::submit('Add', ['class' => 'btn btn-sm btn-raised']) !!}

 {!! Form::close() !!}

</div>


</div>
