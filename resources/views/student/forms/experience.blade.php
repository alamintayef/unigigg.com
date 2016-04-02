

    <div class="panel panel-default">
      <div class="panel-heading"><a class="btn btn-primary btn-lg" data-toggle="collapse" href="#collapseExp">Add Experiences</a></div>
        <div id="collapseExp" class="panel-collapse collapse">
          <div class="panel-body">

    {!! Form::open(array('url' => '/experiencestore')) !!}


    <div class="form-group">
      {!! Form::label('exp_name', 'Title:', ['class' => 'control-label']) !!}
      {!! Form::text('exp_name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
      {!! Form::label('exp_start_date', 'Start Date:', ['class' => 'control-label']) !!}
      {!! Form::date('exp_start_date', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('exp_end_date', 'End Date:', ['class' => 'control-label']) !!}
      {!! Form::date('exp_end_date', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('exp_description', 'Tell Us Something About it:', ['class' => 'control-label']) !!}
      {!! Form::textarea('exp_description', null, ['class' => 'form-control' ,'rows'=>2,]) !!}
    </div>
    <div class="form-group">
      {!! Form::label('exp_validation', 'Validate Experience:', ['class' => 'control-label']) !!}
      {!! Form::text('exp_validation', null, ['class' => 'form-control']) !!}
      <small>You can add a phone number, email or even an url to validate your Experience</small>
    </div>
    @if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
  @endif



    {!! Form::submit('Add', ['class' => 'btn btn-primary']) !!}

 {!! Form::close() !!}

</div>
</div>
</div>
