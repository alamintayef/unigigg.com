@extends('layouts.app')
@section('content')
<style media="screen">
body{

  background: url(http://s32.postimg.org/rg1efg31h/cover2w.jpg) no-repeat center center fixed;
  -webkit-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: -10;


  /*
  http://www.louisdumont.com/temp/bulb_test.jpg
  http://s32.postimg.org/rg1efg31h/cover2w.jpg

  */

}
</style>

<div class="container foo" id="cover" >
  <div class="row ">
    <div  class="center">

      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>

      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <a class="btn btn-default font-cor" href="{{url('jobs/view')}}"><b>Find a Gigg / Internship <i class="fa fa-paper-plane"></i><sub><small class="ssmal">click here</small></sub></b></a>

      <br>
      <br>
      <br>
      <br>

      <br>
      <br>
      <br>
      <br>

    </div>

  </div>
</div>

<div class="container-fluid white center " >
  <div class="row pad">
    <div class="col-sm-5 pull-left">
      <h1 class="text-primary foo" >Talent<i class="fa fa-graduation-cap"></i></h1>

      <p>
        <ul class="list-group card card-raised bar">
          <li class="list-group-item"><i class="fa fa-user"></i> Create a Gig Profile</li>
          <li class="list-group-item" ><i class="fa fa-plus-square"></i> Add Awesome Skills</li>
          <li class="list-group-item"><i class="fa fa-check"></i> Validate Skills</li>
          <li class="list-group-item"><i class="fa fa-search"></i>Sit Back And Get Searched</li>
          <li class="list-group-item"><i class="fa fa-smile-o fa-2x"></i> <a href="{{url('register')}}">Sign up</a> Its Free</li>
        </ul>
        <h4><a href="{{url('talent')}}">Learn More</a></h4>




      </p>
    </div>
    <div class="col-sm-5 pull-right" >
      <h1 class="text-primary foo">Recruiter <i class="fa fa-users"></i></h1>

      <p>
        <ul class="list-group card card-raised bar">
          <li class="list-group-item"><i class="fa fa-user"></i> Create a Gig Profile</li>
          <li class="list-group-item" ><i class="fa fa-plus-square"></i> Add Company Infomation</li>
          <li class="list-group-item"><i class="fa fa-edit"></i> Post Jobs Defining Exact Requirements</li>
          <li class="list-group-item"><i class="fa fa-asterisk"></i> Hire</li>
          <li class="list-group-item"><i class="fa fa-smile-o fa-2x"></i> <a href="{{url('employer/register')}}">Sign up</a> Its Free</li>
        </ul>
        <h4><a href="{{url('recruiter')}}">Learn More</a></h4>

      </p>
    </div>
  </div>

</div>
<div class="cover container-fluid" id="homepage-hero" >
  <div class="row center" >
    <br>
    <br>
    <br>
    <br>
    <br>
    <h2 class="textw efoo">Eccentric Jobs</h2>
    <h3 class="textw efoo"><b>Find out what you like doing best, and get someone to pay you for it.</b></h3>
    <a href="eccentric" class="btn btn-default btn-lg font-cor efoo ">Learn More</a>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>


  </div>
</div>
<div class="container-fluid center whiteproper  padsmall" >
  <h3 class="font-cor padsmall" style="font-size:3.2em;"> People We Work With</h2>
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner logofoo">

      <div class="item active container ">
          <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="http://s32.postimg.org/v6yho8rwl/7teen.jpg" alt="...">
          <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="http://jobs.hifipublic.com/wp-content/uploads/2014/09/Blue-Scheme-Logo.jpg" alt="...">
          <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="http://s32.postimg.org/yvdkmkvut/download.jpg" alt="...">
          <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="http://s32.postimg.org/dkl2ffk1x/FInal_Amar_Bike_Logo_Page_01.png" alt="...">
          <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="https://e27.co/img/startups/2238/logo-1430124641.png" alt="...">
          <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="http://s32.postimg.org/5i9g50vxx/13233332_10209234151228216_840004034_n.jpg" alt="...">
      </div>

      <div class="item container ">
        <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="http://s32.postimg.org/618uhkg5h/datarace.png" alt="...">
        <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="http://jobs.hifipublic.com/wp-content/uploads/2014/09/Blue-Scheme-Logo.jpg" alt="...">
        <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="http://s32.postimg.org/yvdkmkvut/download.jpg" alt="...">
        <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="http://s32.postimg.org/dkl2ffk1x/FInal_Amar_Bike_Logo_Page_01.png" alt="...">
        <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="https://e27.co/img/startups/2238/logo-1430124641.png" alt="...">
        </div>


    </div>

      <div align="center" style="margin-top:20px;">
      <!-- Controls -->
            <a class="left" href="#carousel-example-generic" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right" href="#carousel-example-generic" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
      </div>

  </div>
</div><!--
<script type="text/javascript">
(function ($) {
  $('#content').smoothState();
}) (jQuery);
</script>
-->
<script type="text/javascript">
  $('.carousel').carousel()
</script>
<script type="text/javascript">
window.sr = ScrollReveal({ duration: 1500 });
sr.reveal('.foo');
sr.reveal('.bar');
sr.reveal('.efoo');
sr.reveal('.logofoo')
</script>

@include('layouts.footer')
@endsection
