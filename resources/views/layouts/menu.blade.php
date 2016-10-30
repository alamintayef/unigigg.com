<div class="col-md-2">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed btn btn-xs" data-toggle="collapse" data-target="#app-nav-collapse">
  <span class="sr-only">Toggle Navigation</span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <span class="icon-bar"></span>
  <i class="fa fa-folder-open fa-2x"></i>
</button>

</div>
<div class="collapse navbar-collapse" id="app-nav-collapse">

  <ul class="list-group">
    <li class="list-group-item">
      <a href="{{url('home')}}"><strong><i class="fa fa-dashboard"></i> Dashboard</strong></a>
    </li>
    <li class="list-group-item">
      <a href="{{url('userinfo')}}"><strong><i class="zmdi zmdi-settings"></i> Build Profile</strong></a>
    </li>
    <li class="list-group-item">
      <a href="{{url('chakri')}}"><strong><i class="small material-icons">work</i> Jobs</strong></a>
    </li>
  </li>
  <li class="list-group-item">
    <a href="{{url('jobsapplied')}}"><strong>Jobs Applied</strong></a>
  </li>

  <!--
  <li class="list-group-item dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
      <strong> <i class="fa fa-btn fa-tasks"></i> Resources <span class="caret"></span></strong>
      </a>
      <ul class="dropdown-menu" role="menu">
      <li class="list-group-item">
        <a href="{{url('vlog')}}"><i class="fa fa-video-camera"></i> <strong>Vlog</strong></a>
    </li>
      <li class="list-group-item">
        <a href="{{url('blog')}}"><i class="fa fa-file-text"></i> <strong>Blog</strong></a>
      </li>
    </ul>

  </li>
  --->
  <li class="list-group-item">
    <a href="#"><strong>Jobs Sorted</strong></a>
  </li>
  <li class="list-group-item dropdown">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
      <strong>   Eccentric-Jobs <span class="caret"></span></strong>
      </a>
      <ul class="dropdown-menu" role="menu">
      <li class="list-group-item">
        <a href="{{url('eccentricJobspost')}}"><strong>Post an Eccentric Job</strong></a>

      </li>
      <li class="list-group-item">
        <a href="{{url('eccentricJobs')}}"><strong>Eccentric Job</strong></a>

      </li>
      <li class="list-group-item">
        <a href="{{url('eccentricJobsiApplied')}}"><strong>Applied Jobs</strong></a>

      </li>

      <li class="list-group-item">
        <a href="{{url('postedoddjobs')}}"><strong>Jobs Posted By You</strong></a>

      </li>

      <li class="list-group-item">
        <a href="{{url('eccentric/jobs/whoapplied')}}"><strong>Applied For your Jobs</strong></a>

      </li>

    </ul>



  </li>

  <li class="list-group-item"> <strong>
    <a  href="{{ url('change/password') }}">Change Password</a></strong>
  </li>
  <li class="list-group-item"> <strong>
    <a  href="{{ url('blog/post') }}">Post a article</a></strong>
  </li>
  <li class="list-group-item">
    <form class="" action="{{url('unsubscribe',Auth::user()->id)}}" method="post">
      {!! csrf_field() !!}
      @if(Auth::user()->subscribe==0)
         <button  type="submit" name="name" value=""> Unsubscribe</button>

      From Job Notifications
      @endif
    </form>
</li>
<li class="list-group-item">
<strong><a data-toggle="modal" data-target="#feedback">Feedback</a></strong>
  <!-- Modal -->
<div class="modal fade" id="feedback" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Help us improve</h4>
      </div>
      <form class="" action="{{url('/feedback')}}" method="post">
      {!! csrf_field() !!}

      <div class="modal-body">
        <label for="feedback">Tell us your problems with our system</label>
        <textarea name="feedback" rows="8" cols="40"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>

</li>



  </ul>
</div>
</div>
