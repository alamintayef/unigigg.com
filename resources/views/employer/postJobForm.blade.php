

<div class="col-md-12 panel whiteproper textb pad">
  {!! Form::open(array('url' => '/create/job/post','method'=>'post', 'id'=>'postForm')) !!}


  <div class="form-group">
    {!! Form::label('job_name', 'Tltle:') !!}<span class="text-danger">*</span>
    {!! Form::text('job_name', null, ['class'=>'form-control','id'=>'job_name']) !!}
    <small class="text-danger">Required</small>
  </div>

  <div class="form-group">
    <label for="job_type">Job Type</label>
    <select class="form-control"  name="job_type" id="job_type">
      <option value="Internship">Internship</option>
      <option value="OneTime">One-Time</option>
      <option value="PartTime">Part-Time</option>
      <option value="FullTime">Full-Time</option>

    </select>
  </div>
  <div class="form-group">
    {!! Form::label('job_salary', 'Salary Offering:') !!}<span class="text-danger">*</span>
    {!! Form::text('job_salary', null, ['class'=>'form-control','id'=>'job_salary'] ) !!}
  </div>
  <div class="form-group">
    {!! Form::label('job_location', 'Location:', ['class' => 'control-label']) !!}
    <input name="job_location" class="awesomplete form-control" list="arealist" id="job_location"/>
    <small class="text-danger">Required</small>
  </div>

  <div class="form-group">
    {!! Form::label('job_description', 'Job Description:') !!}<span class="text-danger">*</span>
    {!! Form::textarea('job_description', null, ['class'=>'form-control', 'rows'=>5, 'id'=> 'job_description','id'=>'job_description'] ) !!}
    <small class="ssmal">Describe what the job is all about. e.g. Responsibilities</small>
  </div>

  <div class="form-group">
    {!! Form::label('min_edu_level', 'Minimum Degree Level:', ['class' => 'control-label']) !!}
    <select name="min_edu_level" class="awesomplete form-control" list="levellist" data-multiple id="min_edu_level" />
    <datalist id="levellist">
      <option>Bachelors</option>
      <option>Masters</option>
      <option>HSC/A Level</option>
      <option>Graduating Soon</option>
    </datalist>
  </select>
  <small class="ssmal">e.g. Bachelors, Masters, PHD</small>
</div>


<div class="form-group">
  {!! Form::label('major', 'Major:', ['class' => 'control-label']) !!}
  <input name="major" id='major' class="awesomplete form-control" />

  <script type="text/javascript">
  var major = document.getElementById("major");
  var autocompletemajor=new Awesomplete(major, {
    minChars: 1,
    autoFirst: true
  });
  autocompletemajor.list =['Computer Science and Engineering', 'Business Administration', 'Economics','Mathemtics','Mechanical Engineering','Pharmacy','Electrical and Electronic Engineering','Physics','Chemistry']
  </script>
  <small class="text-danger">Required</small>
</div>
<div class="form-group">
  {!! Form::label('cgpa', 'Minimum CGPA:', ['class' => 'control-label']) !!}
  <input name="cgpa" id='cgpa' class="awesomplete form-control" />

  <small class="text-danger">Required</small>
</div>


<div class="form-group">
  {!! Form::label('job_skill_reqs', 'One Core Skill:') !!}<span class="text-danger">*</span>
  <input name="job_skill_reqs" id='job_skill_reqs' class="awesomplete form-control" data-multiple  />
  <small class="ssmal">Insert the specific skill set you are looking for. e.g. MS-Office, Php, Java, Accounting</small>

</div>

<div class="form-group">
  {!! Form::label('job_reqs_additional', 'Additional Requirments: ') !!}
  {!! Form::textarea('job_reqs_additional', null, ['class'=>'form-control', 'rows'=>3,'id'=> 'job_reqs_additional'] ) !!}
  <small class="ssmal">If you have and specific additional requirments</small>
</div>
<div class="form-group">
  {!! Form::label('job_start_date', 'Commencing Date:') !!}
  {!! Form::date('job_start_date', null, ['class'=>'form-control','id'=>'job_start_date'] ) !!}
</div>
<div class="form-group">
  {!! Form::label('job_last_date_application', 'Last Date Of Application') !!}
  {!! Form::date('job_last_date_application', null, ['class'=>'form-control','id'=>'job_last_date_application'] ) !!}
</div>
@if(Auth::user()->subs_type===0)
  <input type="hidden" name="paid" value="0">
@else
  <input type="hidden" name="paid" value="1">
@endif


@if($postable>0)
  @if(Auth::user()->verified===0)
    Sir Please wait untill the profile is verified
  @else
    <div class="form-group">
      <i id='loading' class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
      {!! Form::submit(' Post Job ', [ 'class'=>'btn btn-success job_post']) !!}
    </div>
  @endif

@else
  <small class="text-danger">Please build company profile to post a job</small>
@endif
{!! Form::close() !!}
<script type="text/javascript">
  $("#loading").hide();
</script>
<script type="text/javascript">


$(".job_post").click(function (e) {
  $("#loading").show();
$.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
    }
  })
  e.preventDefault();
$.ajax({
    url: '/create/job/post',
    data: {
      '_token': $('input[name=_token]').val(),
      'job_name':$('input[name=job_name]').val(),
      'job_type':$('select[name=job_type]').val(),
      'job_salary':$('input[name=job_salary]').val(),
      'job_location':$('input[name=job_location]').val(),
      'job_description':$('textarea[name=job_description]').val(),
      'min_edu_level':$('input[name=min_edu_level]').val(),
      'major':$('input[name=major]').val(),
      'cgpa':$('input[name=cgpa]').val(),
      'job_skill_reqs':$('input[name=job_skill_reqs]').val(),
      'job_reqs_additional':$('textarea[name=job_reqs_additional]').val(),
      'job_start_date':$('input[name=job_start_date]').val(),
      'job_last_date_application':$('input[name=job_last_date_application]').val()
      'paid':$('input[name=paid]').val()

    },
    type: 'POST',
    datatype: 'JSON',
    success: function (name) {
      $("#loading").hide();
      alertify.success("Added Successfully");
    //  $('#list').append('<li><strong>' +  name  +'</strong></li>')
      document.getElementById('postForm').reset();

  },
  error: function (name) {
    console.log('Error:', name);
  }
});
});
</script>
</div>
