  <div class="panel panel-default">
      <div class="panel-heading"><a class="btn btn-primary btn-lg" data-toggle="collapse" href="#collapseExp">Add Experiences</a></div>
        <div id="collapseExp" class="panel-collapse collapse">
          <div class="panel-body">

    {!! Form::open(array('url' => '/experiencestore')) !!}


    <div class="form-group">
      {!! Form::label('exp_name', 'Title:', ['class' => 'control-label']) !!}
      {!! Form::text('exp_name', null, ['class' => 'form-control','placeholder'=>'Designation, Organization']) !!}
      <small class="textb">i,e Internship, X Company</small>
    </div>

    <div class="form-group">
      {!! Form::label('exp_start_date', 'Start Date:', ['class' => 'control-label']) !!}
      <select name="exp_start_date" class="form-control">
        <option value="2001">2001</option>
        <option value="2002">2002</option>
        <option value="2003">2003</option>
        <option value="2004">2004</option>
        <option value="2005">2005</option>
        <option value="2006">2006</option>
        <option value="2007">2007</option>
        <option value="2008">2008</option>
        <option value="2009">2009</option>
        <option value="2010">2010</option>
        <option value="2011">2011</option>
        <option value="2012">2012</option>
        <option value="2013">2013</option>
        <option value="2014">2014</option>
        <option value="2015">2015</option>
        <option value="2016">2016</option>
    </select>
    </div>
    <div class="form-group">

      {!! Form::label('exp_end_date', 'End Date:', ['class' => 'control-label']) !!}
      <select name="exp_end_date" class="form-control dropdown">
        <option value="2001">2001</option>
        <option value="2002">2002</option>
        <option value="2003">2003</option>
        <option value="2004">2004</option>
        <option value="2005">2005</option>
        <option value="2006">2006</option>
        <option value="2007">2007</option>
        <option value="2008">2008</option>
        <option value="2009">2009</option>
        <option value="2010">2010</option>
        <option value="2011">2011</option>
        <option value="2012">2012</option>
        <option value="2013">2013</option>
        <option value="2014">2014</option>
        <option value="2015">2015</option>
        <option value="2016">2016</option>
    </select>
    </div>
    <div class="form-group">
      {!! Form::label('exp_description', 'Tell Us Something About it:', ['class' => 'control-label']) !!}
      {!! Form::textarea('exp_description', null, ['class' => 'form-control' ,'rows'=>3,]) !!}
    </div>
    <div class="form-group">
      {!! Form::label('exp_validation', 'Please Provide a Validation of Your Experience:', ['class' => 'control-label']) !!}
      {!! Form::text('exp_validation', null, ['class' => 'form-control']) !!}
      <small class="textb">You can add a phone number, email or even an url to validate your Experience</small>
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
