@extends('layouts.app')

@section('content')
  <div class="container padtop " id="postedjob">
    <div class="row">
      @include('layouts.emmenu')
      <div class="col-md-10">
        <div class="panel whiteproper padsmall">
          <h4 class="textb"><i class="fa fa-briefcase"></i> Jobs Posted by You</h4>
        </div>
        @include('errors.notify')
        <div class="col-md-12">
          @if(count($postedjobs)>0)

              @foreach($postedjobs as $jobs)



                  <div class="panel padsmall">

                      <h3 class="panel-title">{{$jobs->job_name}}  <a class="pull-right btn btn-link raised" href="{{url('/postjobs/update/view',$jobs->id)}}"><i class="fa fa-edit"></i> edit</a></h3>

                      <Type: {{$jobs->job_type}}</li>
                      <li>Location: {{$jobs->job_location}}</li>
                      <li>Salary: {{$jobs->job_salary}}</li>

                      <p>
                        Description: {!! $jobs->job_description !!}
                          </p>
                        <p>
                      Minimum Education Level :{{$jobs->min_edu_level}}
                          </p>
                          <p>
                            Major {{$jobs->major}}
                          </p>
                          <p>
                            Min CGPA : {{$jobs->cgpa}}
                          </p>
                          <p>
                            Skill Requirements: {{$jobs->job_skill_reqs}}
                          </p>
                          <p>
                            Additional Requirements: {!! $jobs->job_reqs_additional !!}
                          </p>
                          <h6 class="pull-right textb">Expires on : {{$jobs->job_expires}}</h6>

                      <form class="form-inline" action="{{url('deletejobs',$jobs->id)}}" method="POST">
                        {!! csrf_field() !!}
                        <button type="submit" class="btn btn-danger btn-sm btn-block-sm">
                          <i class="fa fa-user"></i> Remove
                        </button>
                      </form>




                  </div>


                @endforeach
                  @else
                    <h4>You have Posted No Jobs</h4>
                  @endif



        </div>
      </div>
    </div>
  </div>




  <script type="text/javascript">
  (function ($) {
  $('#postedjob').smoothState();
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
autocomplete.list =['C', 'C++', 'JavaScript','MS-Office','Accounting','Python','Php','Laravel','NodeJs','HTML','Django','Java', 'ASP.NET','Marketing','Finance','Writing','Graphic Desing','Web Design']

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
