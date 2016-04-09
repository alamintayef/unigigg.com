
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
      <div class="col-sm-4 panel col-md-offset-1">
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
          </ul>


      </div>




</div>
</div>
