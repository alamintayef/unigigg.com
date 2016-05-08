@extends('layouts.app')

@section('content')


  <div class="container " id="postjob">
    <div class="row">
      @include('layouts.emmenu')
      <div class="col-md-6 ">
        <div class="well panel whiteproper" >
          <h4>Post A Job</h4>
          @if($postable>0)
            Welcome
          @else
            <p class="text-danger">
              Please build company profile to post a job <a href="{{url('employerinfo')}}"> Build Profile</a>
            </p>
          @endif
          @if (notify()->ready())
            <script>
            swal({
              title: "{!! notify()->message() !!}",
              text: "{!! notify()->option('text') !!}",
              type: "{{ notify()->type() }}",
              @if (notify()->option('timer'))
              timer: {{ notify()->option('timer') }},
              showConfirmButton: false
              @endif
            });
            </script>
          @endif

        </div>

        <div class="col-md-12 panel whiteproper textb pad">
          {!! Form::open(array('url' => '/postjobs', 'file'=>true)) !!}
          @if($errors->any())
            <div class="alert alert-danger">
              @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
              @endforeach
            </div>
          @endif

          <div class="form-group">
            {!! Form::label('job_name', 'Tltle:') !!}<span class="text-danger">*</span>
            {!! Form::text('job_name', null, ['class'=>'form-control']) !!}
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
            {!! Form::text('job_salary', null, ['class'=>'form-control'] ) !!}
          </div>
          <div class="form-group">
            {!! Form::label('job_location', 'Location:', ['class' => 'control-label']) !!}
            <input name="job_location" class="awesomplete form-control" list="arealist" />
            <datalist id="arealist">
              @foreach($area as $areas)
                <option>{{$areas->area}}</option>
              @endforeach
            </datalist>

              <small class="text-danger">Required</small>
            </div>

          <div class="form-group">
            {!! Form::label('job_description', 'Job Description:') !!}<span class="text-danger">*</span>
            {!! Form::textarea('job_description', null, ['class'=>'form-control', 'rows'=>2, 'id'=> 'job_description'] ) !!}
            <small class="ssmal">Describe what the job is all about. e.g. Responsibilities</small>
          </div>

          <hr>
          <div class="form-group">
            {!! Form::label('min_edu_level', 'Minimum Degree Level:', ['class' => 'control-label']) !!}
            <select name="min_edu_level" class="awesomplete form-control" list="levellist" data-multiple  />
            <datalist id="levellist">
             <option>Bachelors</option>
             <option>Masters</option>
             <option>HSC</option>
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
              autocompletemajor.list =['Computer Science', 'Business Administration', 'Economics','Mathemtics']
            </script>
            <small class="text-danger">Required</small>
            </div>
            <div class="form-group">
              {!! Form::label('cgpa', 'Minimum CGPA:', ['class' => 'control-label']) !!}
              <input name="cgpa" id='cgpa' class="awesomplete form-control" />

              <small class="text-danger">Required</small>
              </div>

          <hr>
          <div class="form-group">
            {!! Form::label('job_skill_reqs', 'Skill Requirments:') !!}<span class="text-danger">*</span>
          <input name="job_skill_reqs" id='job_skill_reqs' class="awesomplete form-control" data-multiple  />
            <small class="ssmal">Insert the specific skill set you are looking for. e.g. MS-Office, Php, Java, Accounting</small>
          </div>



          </script>
      <div class="form-group">
            {!! Form::label('job_reqs_additional', 'Additional Requirments: ') !!}
            {!! Form::textarea('job_reqs_additional', null, ['class'=>'form-control', 'rows'=>2,'id'=> 'job_reqs_additional'] ) !!}
            <small class="ssmal">If you have and specific additional requirments</small>
          </div>
          <div class="form-group">
            {!! Form::label('job_start_date', 'Commencing Date:') !!}
            {!! Form::date('job_start_date', null, ['class'=>'form-control'] ) !!}
          </div>
          <div class="form-group">
            {!! Form::label('job_last_date_application', 'Last Date Of Application') !!}
            {!! Form::date('job_last_date_application', null, ['class'=>'form-control'] ) !!}
          </div>

          @if($postable>0)
            @if(Auth::user()->verified===0)
              Sir Please wait untill the profile is verified
            @else
              <div class="form-group">

                  {!! Form::submit('Post Job', array( 'class'=>'btn btn-success form-control' )) !!}
                </div>
            @endif

          @else
            <small class="text-danger">Please build company profile to post a job</small>
          @endif
          @if(Auth::user()->subs_type!=0)
            <input type="hidden" name="paid" value="1">
          @else
              <input type="hidden" name="paid" value="0">
          @endif
          {!! Form::close() !!}
        </div>



      </div>
      <div class="col-md-3 col-xs-offset-1 panel whiteproper pad">
        <h5>Your Jobs</h5>
        @foreach($postedjobs as $jobs)
          <li>{{$jobs->job_name}}</li>

        @endforeach
        <small>Please visit <a href="{{url('/postedjobs')}}">posted jobs</a> to view full job details</small>

      </div>
    </div>
  </div>
  <script type="text/javascript">
  (function ($) {
    $('#postjob').smoothState();
})(jQuery);

  </script>
  <script src="//cdn.ckeditor.com/4.5.8/basic/ckeditor.js"></script>
  <script type="text/javascript">
   CKEDITOR.replace( 'job_reqs_additional' );
   CKEDITOR.replace( 'job_description' );

  </script>
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
autocomplete.list =['C', 'C++', 'JavaScript','MS-Office','Accounting','Python','Php','Laravel','NodeJs','HTML','Django','Java', 'ASP.NET']

  </script>
  <script type="text/javascript">
  var cgpa = document.getElementById("cgpa");
  var autocompletecgpa=new Awesomplete(cgpa, {
  minChars: 1,
  autoFirst: true
  });
  autocompletecgpa.list = ['2','2.5','2.75','3','3.25','3.5']
  </script>



@endsection
