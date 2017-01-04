@extends('layouts.app')

@section('content')


  <div class="container padtop ">
    <div class="row">
      @include('layouts.emmenu')
      <div class="col-md-7">
        <div class="well panel whiteproper" >
          <h4>Post A Job</h4>
          @if($postable>0)
            Welcome
          @else
            <p class="text-danger">
              Please build company profile to post a job <a href="{{url('employerinfo')}}"> Build Profile</a>
            </p>
          @endif
        </div>
        @if($errors->any())
          <div class="alert alert-danger">
            @foreach($errors->all() as $error)
              <p>{{ $error }}</p>
            @endforeach
          </div>
        @endif
        @include('employer.postJobForm');


      </div>
      <div class="col-md-3  panel whiteproper pad">
        <h5>Your Jobs</h5>
        @foreach($postedjobs as $jobs)
          <li id="list">{{$jobs->job_name}}</li>

        @endforeach
        <small>Please visit <a href="{{url('/postedjobs')}}">posted jobs</a> to view full job details</small>

      </div>
    </div>
  </div>

  <script src="//cdn.ckeditor.com/4.5.8/basic/ckeditor.js"></script>
  <script type="text/javascript">
   CKEDITOR.replace( 'job_reqs_additional' );
   CKEDITOR.replace( 'job_description' );

  </script>
  <script type="text/javascript">
    var major = document.getElementById("job_skill_reqs");
    var autocomplete=new Awesomplete(job_skill_reqs, {
    minChars: 1,
    autoFirst: true
    });
    autocomplete.list =['C', 'C++', 'JavaScript','MS-Office','Accounting','Python','Php','Laravel','NodeJs','HTML','Django','Java', 'ASP.NET','Marketing','Finance','Writing','Graphic Design','Web Design','Photo Shop','Adobe Suite','3D Modeling']

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
