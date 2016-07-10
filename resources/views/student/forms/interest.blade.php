

    <div class="panel panel-default">
    <div class="panel-body">

    {!! Form::open(array('url' => '/intereststore')) !!}


    <div class="form-group">
      {!! Form::label('interest_name', 'Provide Your CV Link:', ['class' => 'control-label']) !!}
      {!! Form::text('interest_name', null, ['class' => 'form-control']) !!}
    </div>


    {!! Form::submit('Add', ['class' => 'btn btn-primary']) !!}

 {!! Form::close() !!}

</div>
</div>
