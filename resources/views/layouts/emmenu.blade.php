<div class="col-md-2">
  <ul class="list-group">
    <li class="list-group-item">
      <a href="{{url('home')}}"><strong><i class="fa fa-dashboard"></i> Dashboard</strong></a>

    </li>
    <li class="list-group-item">
      <a href="{{url('employerinfo')}}"><strong><i class="fa fa-user-secret"></i> Build Profile</strong></a>

    </li>
    <li class="list-group-item">
      <a href="{{url('jobs')}}"><strong><i class="small material-icons">work</i> Jobs</strong></a>

    </li>
    <li class="list-group-item">
      <a href="{{url('postjobs')}}"><strong><i class="fa fa-edit"></i> Post a Job</strong></a>

    </li>

    <li class="list-group-item dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
        <strong>Eccentric-Jobs <span class="caret"></span></strong>
        </a>
        <ul class="dropdown-menu" role="menu">
        <li class="list-group-item">
          <a href="{{url('eccentricJobspostem')}}"><strong>Post an Eccentric Job</strong></a>
        </li>
        <li class="list-group-item">
          <a href="{{url('eccentricJobs')}}"><strong>Eccentric Job</strong></a>

        </li>
        <li class="list-group-item">
          <a href="{{url('eccentric/jobs/whoapplied')}}">See Applied</strong></a>

        </li>
      </ul>
    </li>
  </li>

  <li class="list-group-item">
    <a href="{{url('postedjobs')}}"><strong><i class="small material-icons">shopping_basket</i> Posted Jobs</strong></a>
  </ul>

  <li class="list-group-item">
    <a href=""><strong>Subscription</strong></a><sub>@if(Auth::user()->subs_type===0)
      pay as you go
    @elseif(Auth::user()->subs_type===1)
      <em class="textb">15 Hiring</em>
    @elseif(Auth::user()->subs_type===2)
      Unlimited
    @else
      Special Tier
    @endif</sub>

  </li>
</div>
