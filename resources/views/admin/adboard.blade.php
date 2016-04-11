
<div class="container">
  <div class="row">
    <h3>Welcome <strong class="primary">{{ Auth::user()->name }}
    </strong> Super admin</h3>
    @if(count($errors)>0)
      <div class="alert alert-danger">
        @foreach($errors->all() as $error)
          <p>{{ $error }}</p>
        @endforeach
      </div>
    @endif
  </div>
  <div class="col-sm-4 panel col-sm-offset-1">

      <ul class="list-group">
        <li class="list-group-item"><a href="{{url('verification')}}">Show Verification Request</a</li>
       <li class="list-group-item">  <a href="{{url('area')}}">Add area</a></li>
       <li class="list-group-item">  <a href="{{url('managejobs')}}">Cron Jobs</a></li>
       <li class="list-group-item">  <a href="{{url('manage/odd/jobs')}}">Eccentric Cron Jobs</a></li>
       <li class="list-group-item"><a href="{{url('call/for/in')}}">Call For interview Request</a></li>
       <li class="list-group-item"><a href="admin">User board</a></li>
       <li class="list-group-item">Total Eccentric Jobs : {{count($allOddJobs)}}</li>
       <li class="list-group-item">Total Jobs : {{count($allJobs)}}</li>
       <li class="list-group-item"><a href="{{url('employerlist')}}">Employer board</a></li>
      
       <li class="list-group-item"><a href="{{url('adduniversity')}}">adduniversity</a></li>
      </ul>


  </div>
  <div class="jumbotron">
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
    <div class="col-md-3  panel ">
      {!! Form::open(['method'=>'GET','url'=>'search','class'=>'form-inline'])  !!}
        <input type="text" class="form-control" name="search" placeholder="Search...">
        <button class="btn btn-default-sm" type="submit">
          <i class="fa fa-search"></i> Search
          </button>
      {!! Form::close() !!}

  </div>







</div>
</div>
