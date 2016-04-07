
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
  <div class="col-sm-4 pull-left">
    <div class="panel">
      <div class="panel-heading">
        Users
      </div>
      <div class="panel-body">
        <h4><a href="admin">User board</a> <br>Total Users :  {{count($allusers)}}</h4>
      </div>

    </div>
  </div>
  <div class="col-sm-4 center">
    <div class="panel">
      <div class="panel-heading">
        Users
      </div>
      <div class="panel-body">
        <h4><a href="{{url('employerlist')}}">Employer board</a> <br>Total Users :  {{count($allemployer)}}</h4>
      </div>

    </div>
  </div>

  <div class="col-sm-4 center">
    <div class="panel">
      <div class="panel-heading">
        Jobs
      </div>
      <div class="panel-body">
        <h4><br>Total Jobs : {{count($allJobs)}}</h4>
      </div>

    </div>
    </div>

    <div class="col-sm-4 center">
      <div class="panel">
        <div class="panel-heading">
           Eccnetric Jobs
        </div>
        <div class="panel-body">
          <h4><br>Total Eccentric Jobs : {{count($allOddJobs)}}</h4>
        </div>

      </div>
        </div>
      <div class="col-sm-4 panel">
        <div class="panel-body">

            {!! Form::open(array('url' => '/university')) !!}

            @if (notify()->ready())
              <div class="alert alert-{{notify()->type()}}">
                {{notify()->message()}}
              </div>
            @endif
          <div class="form-group">
            {!! Form::label('university', 'Add University:', ['class' => 'control-label']) !!}
            {!! Form::text('university', null, ['class' => 'form-control']) !!}
          </div>
            {!! Form::submit('Add', ['class' => 'btn btn-primary']) !!}
        </div>

      </div>

      <div class="col-sm-4 panel">
        <div class="panel-body">
          <a href="{{url('verification')}}">Show Verification Request</a><br>
          <a href="{{url('area')}}">Add area</a><br>
          <a href="{{url('call/for/in')}}">Call For interview Request</a><br>
          <a href="{{url('managejobs')}}">Cron Jobs</a>
        </div>

      </div>




</div>
</div>
