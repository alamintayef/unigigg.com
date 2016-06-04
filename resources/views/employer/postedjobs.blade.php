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

                      <h3 class="panel-title">{{$jobs->job_name}}  <a class="pull-right btn btn-link raised" data-toggle="modal" data-target="#update"><i class="fa fa-edit"></i> edit</a></h3>

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

                      <form class="form-inline" action="{{url('deletejobs',$jobs->job_id)}}" method="POST">
                        {!! csrf_field() !!}
                        <button type="submit" class="btn btn-danger btn-sm btn-block-sm">
                          <i class="fa fa-user"></i> Remove
                        </button>

                        <h6 class="pull-right textb">Expires on : {{$jobs->job_expires}}</h6>
                      </form>
                      <form class="pull-right" action="{{url('/shortlists',$jobs->job_id)}}" method="GET">
                        {!! csrf_field() !!}
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-star"></i> show Shortlisted
                        </button>
                      </form>
                      <form class="pull-right" action="{{url('/whoapplied',$jobs->job_id)}}" method="GET">
                        {!! csrf_field() !!}
                        <button type="submit" class="btn btn-primary btn-sm">
                          <i class="fa fa-paper-plane"></i> Show Applied
                        </button>
                      </form>


                      @if(Auth::user()->subs_type===0)
                        <form class="pull-right" action="{{url('/setappointment',$jobs->job_id)}}" method="GET">

                        <button type="submit" class="btn btn-default btn-sm">
                          <i class="fa fa-phone"></i> call Shortlisted
                        </button>
                      </form>
                      @else
                        <form class="pull-right" action="{{url('callthem/all',$jobs->job_id)}}" method="POST">
                        {!! csrf_field() !!}
                        <button type="submit" class="btn btn-default btn-sm">
                          <i class="fa fa-phone"></i> call-for-interview
                        </button>
                      </form>
                    @endif

                  </div>



              @endforeach
            @else
              <h4>You have Posted No Jobs</h4>
            @endif



        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title" id=""></h4>
        </div>
        <div class="modal-body">
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
            {!! Form::textarea('job_description', null, ['class'=>'form-control', 'rows'=>2] ) !!}
            <small class="ssmal">Describe what the job is all about. e.g. Responsibilities</small>
          </div>

          <hr>
          <div class="form-group">
            {!! Form::label('min_edu_level', 'Minimum Degree Level:', ['class' => 'control-label']) !!}
            <input name="min_edu_level" class="awesomplete form-control" list="levellist" data-multiple  />
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
          <input name="job_skill_reqs" id='job_skill_reqs' class="awesomplete form-control" data-multiple  />
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
        autocomplete.list =['C', 'C++', 'JavaScript','MS-Office','Accounting','Python','Php','Laravel','NodeJs']

          </script>

      <div class="form-group">
            {!! Form::label('job_reqs_additional', 'Additional Requirments: ') !!}
            {!! Form::textarea('job_reqs_additional', null, ['class'=>'form-control', 'rows'=>2] ) !!}
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

          <div class="form-group">

              {!! Form::submit('Post Job', array( 'class'=>'btn btn-success form-control' )) !!}
          </div>
          {!! Form::close() !!}

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
  (function ($) {
  $('#postedjob').smoothState();
  })(jQuery);
  </script>
