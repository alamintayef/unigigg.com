@extends('layouts.app')
<script type="text/javascript">
$.preloadImages = function() {
for (var i = 0; i < arguments.length; i++) {
  $("<img />").attr("src", arguments[i]);
}
}
$.preloadImages("http://s32.postimg.org/rg1efg31h/cover2w.jpg");
</script>
@section('content')
<style media="screen">
body{

  /*
  background-image: url(http://s32.postimg.org/rg1efg31h/cover2w.jpg) no-repeat center center fixed  ;
  -webkit-background-size: cover;
  -o-background-size: cover;
  background-size: cover;

  top: 0;
  width: 100%;
  height: 100%;
  z-index: -10;


  http://www.louisdumont.com/temp/bulb_test.jpg
  http://s32.postimg.org/rg1efg31h/cover2w.jpg

  */

}
.ecc{
  background-color: rgba(0, 0, 0, 0.3);
}
</style>
<div class="">


<div class="container-fluid ecc" id="cover">

  <div class="row ">
    <div class="center ">
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
      <br>
      <div class="foo">
      <a href="#search" class="btn btn-default btn-change font-cor"></b><i class="fa fa-search fa-1x"></i> Search Jobs</b></a>
      <a class="btn btn-default font-cor btn-change" href="{{url('jobs/view')}}"><b>Find a Gigg / Internship <i class="fa fa-search-plus"></i></b></a>
      <a class="btn btn-default font-cor btn-change" onclick="myFunction();"><b>Post a Job <i class="fa fa-pencil"></i></b></a>
      </div>
      <script>
          function myFunction() {
               swal("We are working on It!", "Thank you for trying out :D")
          }
      </script>
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
<!--
<div class="container-fluid pad whiteproper">
  <h2 class="center">Find <i class="fa fa-search fa-2x"></i>Jobs</h2>
  <div class="row">
    <div class="col-md-2 col-md-offset-1 ">
      <i class="fa fa-edit fa-4x"></i><br>
      <h3 class="btn-change">Full Time</h3>
    </div>
    <div class="col-md-2 ">
      <i class="fa fa-edit fa-4x"></i><br>
    <h3 class="btn-change">Part Time </h3>
    </div>
    <div class="col-md-2">
      <i class="fa fa-edit fa-4x"></i><br>
    <h3 class="btn-change">Internship</h3>
    </div>
    <div class="col-md-2">
      <i class="fa fa-edit fa-4x"></i><br>
    <h3 class="btn-change">Tuitions</h3>
    </div>
    <div class="col-md-2">
      <i class="fa fa-edit fa-4x"></i><br>
    <h3 class=" textb btn-change">Quick Jobs</h3>
    </div>



  </div>

</div>

<div class="container pad" id="features">
	<div class="row">
    <h2 class="center">How it Works</h2>
		<div class="col-md-3 feature">
    	    <i class="glyphicon glyphicon-user"></i>
            <h3>Create a Gig Profile</h3>
            <div class="title_border"></div>
            <p>Add all your awesome skills and acheiments, make a great profile that you can display publicly</p>
		</div>
        <div class="col-md-3 feature">
            <i class="glyphicon glyphicon-facetime-video"></i>
            <h3>Upload Your Video Resume</h3>
            <div class="title_border"></div>
            <p>Tell us something more about you.Give a short introduction of yourself</p>
		</div>
        <div class="col-md-3 feature">
            <i class="glyphicon glyphicon-briefcase"></i>
            <h3>Validate Profile and Skills</h3>
            <div class="title_border"></div>
            <p>Praediximus enim Montium sub ipso vivendi termino his vocabulis appellatos fabricarum culpasse tribunos ut adminicula futurae molitioni pollicitos</p>
		</div>
        <div class="col-md-3 feature">
            <i class="glyphicon glyphicon-briefcase"></i>
            <h3>Get Hired</h3>
            <div class="title_border"></div>
            <p>Praediximus enim Montium sub ipso vivendi termino his vocabulis appellatos fabricarum culpasse tribunos ut adminicula futurae molitioni pollicitos</p>
    	</div>
	</div>
</div>
-->
<div class="container-fluid" id="timelinebg">
  <div class="col-md-12 pad">


<div class="page-header center">
    <h1 id="timeline" class="textw">How it Works</h1>
</div>
<ul class="timeline">
    <li>
      <div class="timeline-badge">1</div>
      <div class="timeline-panel foo">
        <div class="timeline-heading">
          <h4 class="timeline-title textw">Create a Profile</h4>
        </div>
        <div class="timeline-body">
          <p class="textw">Add all your awesome skills and acheiments, make a great profile that you can display publicly</p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-badge warning">2</div>
      <div class="timeline-panel bar">
        <div class="timeline-heading">
          <h4 class="timeline-title textw">Upload a Video Resume</h4>
        </div>
        <div class="timeline-body">
          <p class="textw">Tell us something more about you.Give a short introduction of yourself</p>
        </div>
      </div>
    </li>
    <li>
      <div class="timeline-badge danger">3</i></div>
      <div class="timeline-panel foo">
        <div class="timeline-heading">
          <h4 class="timeline-title textw">Validate Profile</h4>
        </div>
        <div class="timeline-body">
          <p class="textw">Validate all your skills by adding your projects/portfolio. Give a short Interview over skype</p>
        </div>
      </div>
    </li>
    <li class="timeline-inverted">
      <div class="timeline-badge info">4</div>
      <div class="timeline-panel bar">
        <div class="timeline-heading">
          <h4 class="timeline-title textw">Get Hired</h4>
        </div>
        <div class="timeline-body">
          <p class="textw">That(s) all. Sit back and let us do the job</p></div>
      </div>
    </li>

</ul>
  </div>
</div>
<!--
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
-->
<div class="cover container-fluid" id="homepage-hero" >
  <div class="row center" >
      <div class="ecc">
    <br>
    <br>
    <br>
    <br>
    <br>
    <h2 class="textw efoo">Eccentric Jobs</h2>
    <h3 class="textw efoo">Find out what you like doing best, and get someone to pay you for it.</h3>
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
</div>

<div class="container-fluid center whiteproper  padsmall" >
  <h3 class="padsmall" style="font-size:3.2em;"> People We Work With</h2>
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -->
    <div class="carousel-inner logofoo">

      <div class="item active container ">
          <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="http://s32.postimg.org/v6yho8rwl/7teen.jpg" alt="...">
          <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="http://s33.postimg.org/ksxxfm3tr/Blue_Scheme_Logo.jpg" alt="...">
          <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="http://s32.postimg.org/yvdkmkvut/download.jpg" alt="...">
          <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="http://s32.postimg.org/dkl2ffk1x/FInal_Amar_Bike_Logo_Page_01.png" alt="...">
          <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="http://s33.postimg.org/gwzraz1sv/logo.png" alt="...">
          <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="http://s32.postimg.org/5i9g50vxx/13233332_10209234151228216_840004034_n.jpg" alt="...">
      </div>

      <div class="item container ">
        <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="http://s33.postimg.org/9xgnehvj3/logo_1430124641.png" alt="...">
        <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="http://s33.postimg.org/ksxxfm3tr/Blue_Scheme_Logo.jpg" alt="...">
        <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="http://s32.postimg.org/yvdkmkvut/download.jpg" alt="...">
        <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="http://s32.postimg.org/dkl2ffk1x/FInal_Amar_Bike_Logo_Page_01.png" alt="...">
        <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="http://s33.postimg.org/v47zjeiu7/logo_1456081131.png" alt="...">


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
<script>
  $(function(){
      $(".element").typed({
        strings: ["First sentence.", "Second sentence."],
        typeSpeed: .5
      });
  });
</script>



@include('layouts.footer')
@endsection
