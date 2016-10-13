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
  background-color: rgba(0, 0, 0, 0.5);
}
.bighead{
  font-size: 80px;
  font-weight: 400;
}
.bighead2{
  font-size: 70px;
  font-weight: 400;
}
.dirtfello{
  color:yellow;
}
.green{
  color:lightgreen;
}
.red{
  color:red;
}
.azure{
  background-color: #F5F3EE;
}

</style>
<div class="">


<div class="container-fluid" id="cover">

  <div class="row ">
    <div class="center ecc">
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
      <div >
        <h1 class = "textw bighead">We Help <span class="green">T</span>alents to Get <br> Jobs &amp; Internships</h1>
      </div>
      <br>
      <br>
      <br>
      <div class="foo">
      <a href="#search" class="button-alt-light-big"><b><i class="fa fa-search fa-1x"></i> Search Jobs</b></a>
      <a class="button-alt-light-big" href="{{url('jobs/view')}}"><b>Find a Gigg / Internship <i class="fa fa-search-plus"></i></b></a>
      <a class="button-alt-light-big" data-toggle="modal" data-target="#myModal"><b>Post a Job <i class="fa fa-pencil"></i></b></a>
      </div>
      <script>
          function myFunction() {
               swal("We are working on It!", "Thank you for trying out :D")
          }
      </script>

      <!--- Modal --->
      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h3 class="modal-title" id="">Post a Job</h3>
            </div>
            <div class="modal-body">
              <h5>Post a Job with a Call or SMS at : <i class="fa fa-phone"></i> 01987847548</h5>
              <h5><a class="btn font-cor btn-primary" href="{{url('login')}}"> Post a Job Now</a></h5>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

            </div>
          </div>
        </div>
      </div>
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

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center">
        <h2 class="text-uppercase">Features That Builds You</h2>
        <div class="divider"></div>
        <p>We are the only <em>Career</em> Readiness platform in Bangladesh. Our mission is to make you career ready and help you to kick start your career</p>
      </div>
      <div class="col-md-4 ">
        <div class="pv-30 ph-20 service-block bordered shadow text-center object-non-visible animated object-visible fadeInDownSmall" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
          <span class="icon bg-df circle"><i class="fa fa-user"></i></span>
          <h3>Public Resume</h3>
          <div class="divider clearfix"></div>
          <p>Build up your digital profile, Display your profile in public. We will monitor and help you to build your perfect profile and resume. Build the profile once and use it everywhere.</p>
          <a href="#">Read More <i class="pl-5 fa fa-angle-double-right"></i></a>
        </div>
      </div>
      <div class="col-md-4 ">
        <div class="pv-30 ph-20 service-block bordered shadow text-center object-non-visible animated object-visible fadeInDownSmall" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
          <span class="icon bg-df circle"><i class="fa fa-diamond"></i></span>
          <h3>Mentoring</h3>
          <div class="divider clearfix"></div>
          <p>Mentoring is one of the most important part of building a successful career. Mentors guide you to take decision that will help you make your life better. We are introducting virtual mentoring from industry expert who will guide to through every step</p>
          <a href="#">Read More <i class="pl-5 fa fa-angle-double-right"></i></a>
        </div>
      </div>

      <div class="col-md-4 ">
        <div class="pv-30 ph-20 service-block bordered shadow text-center object-non-visible animated object-visible fadeInDownSmall" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
          <span class="icon bg-df circle"><i class="fa fa-laptop"></i></span>
          <h3>Skills Development</h3>
          <div class="divider clearfix"></div>
          <a href="page-services.html">Read More <i class="pl-5 fa fa-angle-double-right"></i></a>
        </div>
      </div>
    </div>
  </div>
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

  <div class="container pad">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center">
        <h2 class="text-uppercase">Connecting You With Opportunities</h2>
        <div class="divider"></div>
        <p>We are the only <em>Career</em> Readiness platform in Bangladesh. Our mission is to make you career ready and help you to kick start your career</p>
      </div>
      <div class="col-md-4 ">
        <div class="pv-30 ph-20 service-block bordered shadow text-center object-non-visible animated object-visible fadeInDownSmall" data-animation-effect="fadeInDownSmall" data-effect-delay="150">
          <span class="icon bg-df circle"><i class="fa fa-connectdevelop"></i></span>
          <h3>Internships &amp; Jobs</h3>
          <div class="divider clearfix"></div>
          <p>We help you find jobs according to your skills. We spent time on you to make you better, make you career ready and fit for the job</p>
          <a href="page-services.html">Read More <i class="pl-5 fa fa-angle-double-right"></i></a>
        </div>
      </div>

      <div class="col-md-4 ">
        <div class="pv-30 ph-20 service-block bordered shadow text-center object-non-visible animated object-visible fadeInDownSmall" data-animation-effect="fadeInDownSmall" data-effect-delay="150">
          <span class="icon bg-df circle"><i class="fa fa-connectdevelop"></i></span>
          <h3>Competitions</h3>
          <div class="divider clearfix"></div>
          <p>We help you find jobs according to your skills. We spent time on you to make you better, make you career ready and fit for the job</p>
          <a href="page-services.html">Read More <i class="pl-5 fa fa-angle-double-right"></i></a>
        </div>
      </div>
      <div class="col-md-4 ">
        <div class="pv-30 ph-20 service-block bordered shadow text-center object-non-visible animated object-visible fadeInDownSmall" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
          <span class="icon bg-df circle"><i class="fa fa-laptop"></i></span>
          <h3>Trainings</h3>
          <div class="divider clearfix"></div>
          <p>We help you to invest in you. Most of the people do not get jobs because of not having the right skills. Here we connect you with skill development opportunities</p>
          <a href="page-services.html">Read More <i class="pl-5 fa fa-angle-double-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

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
--->
<div class="container-fluid whiteproper">
	<div class="row">
    <div class="col-md-6 pad efoo">
      <h1 class="textb">How Does <br> Unigigg Work ?</h1>
      <p class="textb verified">
        Create a profile. Get verified. Receive Notifications. Get Hired.
      </p>
      <a href="talent" class="button-alt-big">I want to know more</a>
    </div>
		<div class="col-md-6 pad bar">
    	 <div class="well profile">
            <div class="col-sm-12">
                <div class="col-xs-12 col-sm-8">
                    <h2>Shereen</h2>
                    <p><strong>About: </strong> Web Designer / UI. </p>
                    <p><strong>Hobbies: </strong> Read, out with friends, listen to music, draw and learn new things. </p>
                    <p><strong>Skills: </strong>
                        <span class="tags">html5</span>
                        <span class="tags">css3</span>
                        <span class="tags">jquery</span>
                        <span class="tags">bootstrap3</span>
                    </p>
                </div>
                <div class="col-xs-12 col-sm-4 text-center">
                    <figure>
                        <img src="https://cdn1.iconfinder.com/data/icons/character-2/240/19-512.png" alt="" class="img-circle img-responsive">

                    </figure>
                </div>
            </div>

    	 </div>
		</div>
	</div>
</div>


<div class="container-fluid   pad">
  <div class="row">
    <div class="col-md-6 text-center">
      <img src="http://vignette3.wikia.nocookie.net/thestudents/images/2/2c/Megamind_Run.png/revision/latest?cb=20140629163338" alt="" />


    </div>
    <div class="col-md-6">
      <h1 class="textb bighead2">Looking for a Megamind to join your team ?</h1>
    </div>

    <div class="col-md-12 text-center">
      <br><br>
      <h3 class="textb">Try Unigigg To Hire The Superstar You Want !</h3>
      <a href="recruiter" class="button-alt-big">Learn More</a>

    </div>

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

<div class="container-fluid  center pad" id="student-price" style="height:400px";>
  <div class="col-md-6 pad fontbig price ecc">

    <ul class="list-inline">

      <h4>
        <li class="textw">CV Validation Tk.500/One Time (Refundable)</li>

        <li class="textw">Subscription fee Tk.500/6 Months</li>

        <li class="textw">Customized CV Tk.500 </li>
        </h4>

    </ul>

  </div>


</div>
--->
<!---
<div class="container-fluid center whiteproper  padsmall" >
  <h3 class="padsmall" style="font-size:3.2em;"> People We Work With</h2>
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
    <!-- Wrapper for slides -
    <div class="carousel-inner logofoo">

      <div class="item active container ">
          <a href="https://www.facebook.com/7teenEvents/" target="_blank"> <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="http://s32.postimg.org/v6yho8rwl/7teen.jpg" alt="..."></a>
          <a href="http://www.bscheme.com/" target="_blank"><img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="http://s33.postimg.org/ksxxfm3tr/Blue_Scheme_Logo.jpg" alt="..."> </a>
          <a href="http://www.beatnikbd.com/" target="_blank"><img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="https://s31.postimg.org/s2rke2m8r/58167_636165749824102_6021701706231799474_n.jpg" alt="..."> </a>
          <a href="https://www.amarbike.com/" target="_blank"><img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="http://s32.postimg.org/dkl2ffk1x/FInal_Amar_Bike_Logo_Page_01.png" alt="..." > </a>
          <a href="http://www.sheba.xyz/#/" target="_blank"><img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="http://s33.postimg.org/gwzraz1sv/logo.png" alt="...">  </a>
          <a href="http://simplesettler.com/" target="_blank"><img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="http://s32.postimg.org/5i9g50vxx/13233332_10209234151228216_840004034_n.jpg" alt="..."> </a>
      </div>

      <div class="item container ">
        <a href="http://hifipublic.com/" target="_blank"> <img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="http://s33.postimg.org/9xgnehvj3/logo_1430124641.png" alt="..."></a>
        <a href="http://simplesettler.com/" target="_blank"><img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="http://s32.postimg.org/yvdkmkvut/download.jpg" alt="..."> </a>
        <a href="https://www.bookmylook.xyz" target="_blank"><img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="https://s32.postimg.org/re0nwooth/13331073_947029015394863_8014595200055167169_n.png" alt="..."></a>
        <a href="http://tripooly.com/" target="_blank"><img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="http://s33.postimg.org/v47zjeiu7/logo_1456081131.png" alt="..."> </a>
        <a href="http://www.unifox.com.bd/" target="_blank"><img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="https://s32.postimg.org/walnnejj9/unifox.png" alt="..."> </a>
        <a href="http://gotripping.club/" target="_blank"><img class="col-md-2 col-sm-2 col-xs-2 logo img-responsive" src="https://s32.postimg.org/dtm6zppmd/tripping.png" alt="..."> </a>

        </div>


    </div>

      <div align="center" style="margin-top:20px;">
      <!-- Controls --
            <a class="left" href="#carousel-example-generic" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right" href="#carousel-example-generic" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
      </div>

  </div>
</div>
</div>
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
