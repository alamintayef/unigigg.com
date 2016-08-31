
<div class="container padtop">
  <div class="row">



    <h3>Welcome <strong class="primary">{{ Auth::user()->name }}
    </strong> Sub Admin</h3>
    @if(count($errors)>0)
      <div class="alert alert-danger">
        @foreach($errors->all() as $error)
          <p>{{ $error }}</p>
        @endforeach
      </div>
    @endif

    <div class="col-md-4 card card-raised padsmall">
      <i class="fa fa-user fa-5x"></i>
      <h3><a href="admin">User board</a>
      <h4>{{$allusers}}</h4></h3>

    </div>
    <div class="col-md-4 panel padsmall">
      <i class="fa fa-users fa-5x"></i>
      <h3>
      <a href="{{url('employerlist')}}">
      Employer board</a>
      <h4>{{$allemployer}}</h4>
      </h3>
    </div>
    <div class="col-md-4 panel padsmall">
      <i class="fa fa-dashboard fa-5x"></i>
      <h3>
      <a href="{{url('admin/job/board')}}">Job board</a>
      <h4>{{$jobcount}}</h4>
      </h3>
    </div>
    <div class="col-md-4 panel padsmall">
      <i class="fa fa-check fa-5x"></i>
      <h3>
      <a href="{{url('verification')}}">Verification Request</a>

      </h3>
    </div>
    <div class="col-md-4 panel padsmall">
      <i class="fa fa-plus fa-5x"></i>
      <h3>
      <a href="{{url('Area')}}">Add Area</a>

      </h3>
    </div>
<!--
  <div class="col-sm-4 panel col-sm-offset-1">

      <ul class="list-group">
        <!--
       <li class="list-group-item"><a href="{{url('verification')}}">Show Verification Request</a</li>


       <li class="list-group-item"><a href="{{url('area')}}">Add area</a></li>
       <li class="list-group-item"><a href="{{url('managejobs')}}">Cron Jobs</a></li>
       <li class="list-group-item"><a href="{{url('manage/odd/jobs')}}">Eccentric Cron Jobs</a></li>
       <li class="list-group-item"><a href="{{url('call/for/in')}}">Call For interview Request</a></li>
       <li class="list-group-item"><a href="admin">User board</a> <span class="badge"> {{$allusers}}</span></li>
       <li class="list-group-item"><a href="{{url('admin/job/board')}}">Job board</a></li>
       <li class="list-group-item">Total Eccentric Jobs : {{count($allOddJobs)}}</li>
       <li class="list-group-item">Total Jobs : {{count($allJobs)}}</li>
      <li class="list-group-item"><a href="{{url('addvdo')}}">Add video</a</li>
      <li class="list-group-item"><a href="{{url('add/competition')}}">Add Competition</a</li>
      <li class="list-group-item"><a href="{{url('add/training')}}">Add Training</a</li>
       <li class="list-group-item"><a href="{{url('employerlist')}}">Employer board</a><span class="badge"> {{$allemployer}} </span></li>

       <li class="list-group-item">
         {!! Form::open(['method'=>'GET','url'=>'search','class'=>'form-inline'])  !!}
           <input type="text" class="form-control" name="search" placeholder="Search...">
           <button class="btn btn-default-sm" type="submit">
             <i class="fa fa-search"></i>
             </button>
         {!! Form::close() !!}
       </li>
       <li class="list-group-item"><a href="{{url('adduniversity')}}">Add University</a> <span class="badge">{{$uni}}</span></li>
      </ul>


  </div>
  <div class="col-md-4 card-raised col-md-offset-1 whiteproper">
    <a href="{{url('admin/create/user')}}" class="btn btn-link"><i class="fa fa-plus"></i> Create <i class="fa fa-user"></i></a>

  </div>
-->

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
</div>
</div>
