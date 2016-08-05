@extends('layouts.app')

@section('content')

<div class="container padtop">
<div class="panel pad">

<form  action="{{url('postjobs/update',$jobs->id)}}" method="POST">
    {!! csrf_field() !!}
  @if($errors->any())
    <div class="alert alert-danger">
      @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
      @endforeach
    </div>
  @endif

  <div class="form-group">
    {!! Form::label('job_name', 'Tltle:') !!}<span class="text-danger">*</span>
    {!! Form::text('job_name', $jobs->job_name, ['class'=>'form-control']) !!}
  </div>

  <div class="form-group">
    <label for="job_type">Job Type</label>
    <select class="form-control" id="select" name="job_type">
      <option value="Internship">Internship</option>
      <option value="OneTime">One-Time</option>
      <option value="PartTime">Part-Time</option>
      <option value="FullTime">Full-Time</option>

    </select>
  </div>
  <div class="form-group">
    {!! Form::label('job_salary', 'Salary Offering:') !!}<span class="text-danger">*</span>
    {!! Form::text('job_salary',$jobs->job_salary , ['class'=>'form-control'] ) !!}
  </div>
  <div class="form-group">
    {!! Form::label('job_location', 'Location:', ['class' => 'control-label']) !!}
    <input name="job_location" value="{{$jobs->job_location}}" class="awesomplete form-control" list="arealist" />
    <datalist id="arealist">
      @foreach($area as $areas)
        <option>{{$areas->area}}</option>
      @endforeach
    </datalist>

      <small class="text-danger">Required</small>
    </div>
    <div class="form-group">
      <p>
        <strong>Current Job Description</strong> <br>
        {!! $jobs->job_description !!}
      </p>

    </div>
    <div class="form-group">
      {!! Form::label('job_description', 'Job Description:') !!}<span class="text-danger">*</span>
      {!! Form::textarea('job_description', null, ['class'=>'form-control', 'rows'=>4, 'id'=> 'job_description'] ) !!}
      <small class="ssmal">Describe what the job is all about. e.g. Responsibilities</small>
    </div>

  <hr>
  <div class="form-group">
    {!! Form::label('min_edu_level', 'Minimum Degree Level:', ['class' => 'control-label']) !!}
    <input name="min_edu_level" value="{{$jobs->min_edu_level}}" class="awesomplete form-control" list="levellist" data-multiple  />
    <datalist id="levellist">
     <option>Bachelors</option>
     <option>Masters</option>
     <option>HSC</option>
     <option>Graduating Soon</option>
   </datalist>
    <small class="ssmal">e.g. Bachelors, Masters, PHD</small>
  </div>


  <div class="form-group">
    {!! Form::label('major', 'Major:', ['class' => 'control-label']) !!}
    <input name="major" id='major' value="{{$jobs->major}}" class="awesomplete form-control" />

    <script type="text/javascript">
        var major = document.getElementById("major");
        var autocompletemajor=new Awesomplete(major, {
        minChars: 1,
        autoFirst: true
        });
          autocompletemajor.list =['Computer Science', 'Business Administration', 'Economics','Mathemtics']
    </script>
    <small class="text-danger">Required</small>
    </div>
    <div class="form-group">
      {!! Form::label('cgpa', 'Minimum CGPA:', ['class' => 'control-label']) !!}
      <input name="cgpa" id='cgpa' value="{{$jobs->cgpa}}" class="awesomplete form-control" />

      <small class="text-danger">Required</small>
      </div>
      <script type="text/javascript">
        var cgpa = document.getElementById("cgpa");
        var autocompletecgpa=new Awesomplete(cgpa, {
        minChars: 1,
        autoFirst: true
        });
        autocompletecgpa.list = ['2','2.5','2.75','3','3.25','3.5']
      </script>
  <hr>
  <div class="form-group">
    {!! Form::label('job_skill_reqs', 'Skill Requirments:') !!}<span class="text-danger">*</span>
  <input name="job_skill_reqs" value="{{$jobs->job_skill_reqs}}" id='job_skill_reqs' class="awesomplete form-control" data-multiple  />
    <small class="ssmal">Insert the specific skill set you are looking for. e.g. MS-Office, Php, Java, Accounting</small>
  </div>
  <script type="text/javascript">
    var input = document.getElementById("job_skill_reqs");
    var autocomplete=new Awesomplete(input, {
    minChars: 1,
    autoFirst: true,
    filter: function(text, input) {
      return Awesomplete.FILTER_CONTAINS(text, input.match(/[^,]*$/)[0]);
    },

    replace: function(text) {
      var before = this.input.value.match(/^.+,\s*|/)[0];
      this.input.value = before + text + ", ";
    }
});
autocomplete.list =['C', 'C++', 'JavaScript','MS-Office','Accounting','Python','Php','Laravel','NodeJs','HTML','Django','Java', 'ASP.NET','Marketing','Finance','Writing','Graphic Desing','Web Design'

  </script>
  <div class="form-group">
    <p>
      <strong>Current Additional Requirments</strong> <br>
      {!! $jobs->job_reqs_additional !!}
    </p>

  </div>
  <div class="form-group">
        {!! Form::label('job_reqs_additional', 'Additional Requirments: ') !!}
        {!! Form::textarea('job_reqs_additional',null , ['class'=>'form-control', 'rows'=>3,'id'=> 'job_reqs_additional'] ) !!}
        <small class="ssmal">If you have and specific additional requirments</small>
      </div>
  <div class="form-group">
    {!! Form::label('job_start_date', 'Commencing Date:') !!}
    {!! Form::date('job_start_date', $jobs->job_start_date, ['class'=>'form-control'] ) !!}
  </div>
  <div class="form-group">
    {!! Form::label('job_last_date_application', 'Last Date Of Application') !!}
    {!! Form::date('job_last_date_application', $jobs->job_last_date_application, ['class'=>'form-control'] ) !!}
  </div>
  @if(Auth::user()->subs_type!=0)
    <input type="hidden" name="paid" value="1">
  @else
      <input type="hidden" name="paid" value="0">
  @endif

  <div class="form-group">

      {!! Form::submit('Update', array( 'class'=>'btn btn-success form-control' )) !!}
  </div>
</form>

</div>

</div>
<script src="//cdn.ckeditor.com/4.5.8/basic/ckeditor.js"></script>
<script type="text/javascript">
 CKEDITOR.replace( 'job_reqs_additional' );
 CKEDITOR.replace( 'job_description' );

</script>
@endsection
