@extends('layouts.app')
@section('content')
<style media="screen">
body{
  background-image:url(http://www.louisdumont.com/temp/bulb_test.jpg);

}
</style>


<div class="container" id="content"  >
    <div class="row ">
      <div  style="height:550px; text-align:center;">

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h3 style="text-align:center;color:white;">Get <strong>Empowered</strong>.Get <strong>Hired</strong>.Get <strong>Recognized.</strong></h3>
        <h5 style="text-align:center;color:white;">CONNECTING YOUNG TALENTS WITH THE EMPLOYERS</h5>
        <a class="btn btn-default btn-lg " href="{{url('jobs/view')}}"><span>Find a Gigg/Internship</span></a>


      </div>

    </div>
</div>

<div class="container-fluid white center " >
  <div class="row pad">
    <div class="col-sm-5 pull-left">
      <h1 class="text-primary wow bounceInUp" data-wow-duration="2s" data-wow-delay="5s">Talent <i class="fa fa-graduation-cap"></i></h1>
      <p>
        Be Career ready
      </p>
      <p>
        <ul class="list-group card card-raised">
          <li class="list-group-item"><i class="fa fa-user"></i> Create a gig profile</li>
          <li class="list-group-item" ><i class="fa fa-plus-square"></i> Add your Awesome Skills</li>
          <li class="list-group-item"><i class="fa fa-check"></i> Validate Skills</li>
          <li class="list-group-item"><i class="fa fa-search"></i>Sit Back and get Searched</li>
          <li class="list-group-item"><i class="fa fa-smile-o fa-2x"></i> <a href="{{url('register')}}">Sign up</a> Its Free</li>
        </ul>
        <h4><a href="{{url('talent')}}">Learn More</a></h4>




      </p>
    </div>
    <div class="col-sm-5 pull-right" >
      <h1 class="text-primary">Recruiter <i class="fa fa-users"></i></h1>
      <p>
          Recruiter find proactive employees
      </p>
        <p>
          <ul class="list-group card card-raised">
            <li class="list-group-item"><i class="fa fa-user"></i> Create a gig profile</li>
            <li class="list-group-item" ><i class="fa fa-plus-square"></i> Add Company Infomation</li>
            <li class="list-group-item"><i class="fa fa-edit"></i> Post Jobs Defining your exact Requirements</li>
            <li class="list-group-item"><i class="fa fa-asterisk"></i> Hire</li>
            <li class="list-group-item"><i class="fa fa-smile-o fa-2x"></i> <a href="{{url('employer/register')}}">Sign up</a> Its Free</li>
          </ul>
          <h4><a href="{{url('recruiter')}}">Learn More</a></h4>

      </p>
    </div>
  </div>

</div>
<div class="container pad" id="content3" data-stellar-background-ratio="0.5">
  <div class="row" style="text-align:center">
        <br>
        <br>
        <br>
        <h2 style="color:white;">Eccentric Jobs</h2>
        <h4 style="color:white;">Find out what you like doing best, and get someone to pay you for it.</h4>
        <a href="eccentric" class="btn btn-default btn-raised ">Learn More</a>


    </div>
  </div>
</div>
<script type="text/javascript">
  (function ($) {
    $('#content').smoothState();
 }) (jQuery);
</script>



@include('layouts.footer')
@endsection
