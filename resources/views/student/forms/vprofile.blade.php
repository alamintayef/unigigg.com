


    <div class="col-md-8 padsmall panel">

    {!! Form::open(array('url' => '/vdostore')) !!}


    <div class="form-group">
      {!! Form::label('vdourl', 'Video ID:', ['class' => 'control-label']) !!}
      {!! Form::text('vdourl', null, ['class' => 'form-control']) !!}
    </div>

    <i id='loading' class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
    <span class="sr-only">Loading...</span>
    {!! Form::submit('Add', ['class' => 'btn btn-sm btn-raised']) !!}

 {!! Form::close() !!}

</div>


</div>
