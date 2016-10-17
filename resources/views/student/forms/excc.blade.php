

    <div class="panel panel-default">
      <div class="panel-heading">Add Extra Curricular Acitivities</div>
      
          <div class="panel-body">

    {!! Form::open(array('url' => '/exccstore')) !!}

    <small class="text-danger">Every field is required</small>
    <div class="form-group">
      {!! Form::label('excc_name', 'Title:', ['class' => 'control-label']) !!}
      {!! Form::text('excc_name', null, ['class' => 'form-control','placeholder'=>'Designation, Organization']) !!}
      <small class="textb">i,e Volunteer, X Foundation</small>
    </div>

    <div class="form-group">
      {!! Form::label('excc_start_date', 'Start Date:', ['class' => 'control-label']) !!}
      {!! Form::date('excc_start_date', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('excc_end_date', 'End Date:', ['class' => 'control-label']) !!}
      {!! Form::date('excc_end_date', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('excc_description', 'Tell Us Something About it:', ['class' => 'control-label']) !!}
      {!! Form::textarea('excc_description', null, ['class' => 'form-control' ,'rows'=>'2',]) !!}
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
