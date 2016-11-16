@extends('layouts.employernav')

@section('content')
<style media="screen">

.center{
  text-align:center;
}
/*
body{
  background: #000;
  padding-top: 10px;
}

h2{
  color: lime;
  font-family: "Courier";
  font-size: 20px;

  white-space: nowrap;
  overflow: hidden;
  width: 30em;
  animation: type 4s steps(60, end);
}

p:nth-child(2){
  animation: type2 8s steps(60, end);
}

p a{
  color: lime;
  text-decoration: none;
}

span{
  animation: blink 1s infinite;
}

@keyframes type{
  from { width: 0; }
}

@keyframes type2{
  0%{width: 0;}
  50%{width: 0;}
  100%{ width: 100; }
}

@keyframes blink{
  to{opacity: .0;}
}

::selection{
  background: black;
}*/
body{
  /*https://images.unsplash.com/photo-1422393462206-207b0fbd8d6b?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&s=b09f84e8e8fd58ee91faf817b9f903d7
  http://www.userzoom.com/wp-content/uploads/2015/04/Recruitingpng.png*/
  background: url(https://images.unsplash.com/uploads/1412739483594d16c8046/a9a53469?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&s=7383aaaa5d52a5970a0818a219e43b40) no-repeat center center fixed;
  -webkit-background-size: cover;
  -o-background-size: cover;
  background-size: cover;

  /* blue with opacity */
  top: 0;
  width: 100%;
  height: 100%;
  z-index: -10;
}
.carousel-content {
    color:black;
    display:flex;
    align-items:center;
    padding: 20px;
    background:
        rgba(0, 0, 0, 0.3);
}
#text-carousel {
  width: 100%;
  height: auto;
  padding: 50px;
}
.boton{
  font-size: 15px;
}
.bighead{
  font-size: 90px;
  font-weight: 400;
}





</style>
<div class="container-fluid transparentbg">

  <br>
  <br>
  <div class="row">
    <div class="center">
      <br>
      <br>
      <br>
      <br>
      <div class=" pad">
        <h1 class="textw bighead">Finding Talents Got Easier</h1>
        <h3 class="textw">Discover Skill Validated Rockstars With A Click</h3>
      </h1>
        <br>
        <a type="submit" name="button" class="button-alt-light-big" href="{{url('login')}}">Post a Job For Free</a>

      </div>
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
    </div>

  </div>

</div>
<div class="container-fluid whiteproper">
    <div class="row">
        <div class="col-md-6 pad">
          <br>
          <br>
          <h1 class="textb">Find Pre-Screen Talents
          </h1>
           <p class="verified textb">
          Candidates who apply through our platform have to go though a long process of verification and validation of skills.
          Each week we’ll deliver fresh, experienced, and fully verified candidates straight to you.
          </p>

        </div>
        <div class="col-md-6 pad">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h4>Talents</h4>
                </div>
                <ul class="list-group" id="contact-list">
                    <li class="list-group-item">
                        <div class="col-xs-12 col-sm-3">
                            <img src="https://pbs.twimg.com/profile_images/495254085067476993/haerjYuZ_400x400.png" alt="Scott Stevens" class="img-responsive img-circle" />
                        </div>
                        <div class="col-xs-12 col-sm-9">
                            <span class="name">Jonny Bravo</span><i class="fa fa-check fa-2x"></i><br/>
                            <span>Business Developer</span><br>
                            <span class="glyphicon glyphicon-map-marker text-muted c-info" data-toggle="tooltip" title="5842 Hillcrest Rd"></span>
                            <span class="visible-xs"> <span class="text-muted">5842 Hillcrest Rd</span><br/></span>
                            <span class="glyphicon glyphicon-earphone text-muted c-info" data-toggle="tooltip" title="(870) 288-4149"></span>
                            <span class="visible-xs"> <span class="text-muted">(870) 288-4149</span><br/></span>
                            <span class="fa fa-comments text-muted c-info" data-toggle="tooltip" title="scott.stevens@example.com"></span>
                            <span class="visible-xs"> <span class="text-muted">scott.stevens@example.com</span><br/></span>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <li class="list-group-item">
                        <div class="col-xs-12 col-sm-3">
                            <img src="http://i2.kym-cdn.com/entries/icons/original/000/020/802/Dexter-DextersLaboratory.png" alt="Seth Frazier" class="img-responsive img-circle" />
                        </div>
                        <div class="col-xs-12 col-sm-9">
                            <span class="name">Dexter</span> <i class="fa fa-check fa-2x"></i><br/>
                              <span>Data Scientist</span><br>
                            <span class="glyphicon glyphicon-map-marker text-muted c-info" data-toggle="tooltip" title="7396 E North St"></span>
                            <span class="visible-xs"> <span class="text-muted">7396 E North St</span><br/></span>
                            <span class="glyphicon glyphicon-earphone text-muted c-info" data-toggle="tooltip" title="(560) 180-4143"></span>
                            <span class="visible-xs"> <span class="text-muted">(560) 180-4143</span><br/></span>
                            <span class="fa fa-comments text-muted c-info" data-toggle="tooltip" title="seth.frazier@example.com"></span>
                            <span class="visible-xs"> <span class="text-muted">seth.frazier@example.com</span><br/></span>
                        </div>
                        <div class="clearfix"></div>
                    </li>
                    <li class="list-group-item">
                        <div class="col-xs-12 col-sm-3">
                            <img src="http://vignette4.wikia.nocookie.net/powerpuff/images/7/7b/Bubbles-pic.png/revision/latest?cb=20160727212257" alt="Jean Myers" class="img-responsive img-circle" />
                        </div>
                        <div class="col-xs-12 col-sm-9">
                            <span class="name">Bubbles</span><i class="fa fa-check fa-2x"></i><br/>
                            <span>Power Manager</span><br>
                            <span class="glyphicon glyphicon-map-marker text-muted c-info" data-toggle="tooltip" title="4949 W Dallas St"></span>
                            <span class="visible-xs"> <span class="text-muted">4949 W Dallas St</span><br/></span>
                            <span class="glyphicon glyphicon-earphone text-muted c-info" data-toggle="tooltip" title="(477) 792-2822"></span>
                            <span class="visible-xs"> <span class="text-muted">(477) 792-2822</span><br/></span>
                            <span class="fa fa-comments text-muted c-info" data-toggle="tooltip" title="jean.myers@example.com"></span>
                            <span class="visible-xs"> <span class="text-muted">jean.myers@example.com</span><br/></span>
                        </div>
                        <div class="clearfix"></div>
                    </li>


                </ul>
            </div>
        </div>
	</div>

</div>
<!---
<div class="container-fluid">
<div id="carousel" class="carousel slide carousel-fade" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner carousel-zoom" >
        <div class="active item" ><img class="img-responsive" src="https://images.unsplash.com/photo-1456930266018-fda42f7404a7?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&s=a6945a53354d6325a2bca0215b6b2e14">
          <div class="carousel-caption">
            <h2>HR Solution for Startups and SME</h2>
            <p>Description</p>
          </div>
        </div>
        <div class="item"><img class="img-responsive" src="https://images.unsplash.com/photo-1445280471656-618bf9abcfe0?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=1200">
          <div class="carousel-caption">
            <h2>Title</h2>
            <p>Description</p>
          </div>
        </div>
        <div class="item"><img class="img-responsive" src="https://images.unsplash.com/photo-1445462657202-a0893228a1e1?crop=entropy&fit=crop&fm=jpg&h=400&ixjsv=2.1.0&ixlib=rb-0.3.5&q=80&w=1200">
          <div class="carousel-caption">
            <h2>Title</h2>
            <p>Description</p>
          </div>
        </div>
       </div>

    <a class="carousel-control left" href="#carousel" data-slide="prev">‹</a>
    <a class="carousel-control right" href="#carousel" data-slide="next">›</a>
</div>
</div>

<br>
<br><br>
<div id="text-carousel" class="carousel slide" data-ride="carousel">
   Wrapper for slides
  <div class="row">

      <div class="col-md-offset-3 col-md-6 foo">
          <div class="carousel-inner">
              <div class="item active">
                  <div class="carousel-content">
                      <div>
                        <h2 class="textw ">HR Solution For Startups and SMEs</h2>
                      </div>
                  </div>
              </div>
              <div class="item">
                  <div class="carousel-content">
                      <div>
                        <h2 class="textw ">Hire Better,Hire Fast, Hire Efficiently</h2>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

<a class="left carousel-control" href="#text-carousel" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left"></span>
</a>
<a class="right carousel-control" href="#text-carousel" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right"></span>
</a>


</div>
<br>
<br><br>
<br>
<br><br>
<br>
<br><br>
<br>
<br><br>
<!--
  <div class="container pad pb" id="rec">
      <div class="row" >
        <div class="pull left center  pad">
          <br>
          <br>
          <br>
          <div class="bg">

          <div class="card card-raised pad">
            <strong class="">it is not possible to manufacture talent, you have to recruit them in the first place</strong>

            <h1 class=" font-corb ">HR Solution for startups and SMEs</h1>
          </div>
          </div>

      </div>
    </div>
  </div>
  <div class="container pad pb whiteproper">
      <div class="row">
        <div class="col-md-4 pull left padsmall foo">

          <h2>We Curate Talent For You</h2>


        </div>
      <div class="col-md-8 foo" >
      <img src="http://s32.postimg.org/8d29hrxxx/Recruit.jpg" alt="" />
      </div>
    </div>
  </div>

  <div class="container-fluid transparentbg pad textw">
    <h3 class="center textw foo">How it Works</h3>
  <div class="col-md-4 col-md-offset-1 bar">
    <h4 class="textw ">1. Create a profile</h4>
    <p class="textw">
      Create a company profile with all the necessary information
    </p>
  </div>

  <div class="col-md-4 col-md-offset-1 bar">
    <h4 class="textw ">2. Post a Job</h4>
    <p class="textw ">
      Post job specifying exact needs, target university, area <br>
      <small>we will notify every student that matchs with your needs</small>

    </p>

  </div>
  <div class="col-md-4 col-md-offset-1 bar">
    <h4 class="textw ">3. Curating Starts</h4>
    <p class="textw">
      Sit back, watch the applications roll in <br>
      <small>You can also search through our database and shortlist</small>
    </p>

  </div>
  <div class="col-md-4 col-md-offset-1 bar">
    <h4 class="textw ">4. Shortlist. Finalize. Pay</h4>
    <p class="textw ">
      After you shortlist a bunch of applicants, you finalize them for interview <br>
      <small>After Finalizing You pay us. Then notify the candidates for interview according to your time</small>
    </p>

  </div>

</div>

--->
<div class="container-fluid white">
	<div class="row">

		<div class="col-md-6 pad bar">
      <div class="panel panel-info">
        <div class="panel-heading">
          <h3 class="panel-title">Sheena </h3>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-3 col-lg-3 " align="right"> <img alt="User Pic" src="http://babyinfoforyou.com/wp-content/uploads/2014/10/avatar-300x300.png" class="img-circle img-responsive"> </div>
            <div class=" col-md-9 col-lg-9 ">
              <table class="table table-user-information">
                <tbody>
                  <tr>
                    <td>Department:</td>
                    <td>Programming</td>
                  </tr>
                  <tr>
                    <td>Hire date:</td>
                    <td>06/23/2013</td>
                  </tr>
                  <tr>
                    <td>Date of Birth</td>
                    <td>01/24/1988</td>
                  </tr>

                     <tr>
                         <tr>
                    <td>Gender</td>
                    <td>Female</td>
                  </tr>
                    <tr>
                    <td>Home Address</td>
                    <td>Dhaka, Bangladesh</td>
                  </tr>
                  <tr>
                    <td>Email</td>
                    <td><a >info@support.com</a></td>
                  </tr>
                    <td>Phone Number</td>
                    <td>123-4567-890(Landline)<br><br>555-4567-890(Mobile)
                    </td>

                  </tr>

                </tbody>
              </table>


            </div>
          </div>
        </div>


      </div>
    </div>

    <div class="col-md-6 pad efoo">
      <br>
      <br>
      <h1 class="textb">Take Complete Control</h1>
      <p class="textb verified">
        Review resumes, salary expectations, and other details for every candidate. We give you the ability to request interviews directly with candidates and control your hiring process without pushy recruiters.
      </p>

    </div>
  </div>
	</div>


  <div class="container-fluid whiteproper pad">
    <div class="row">


      <div class="col-md-6">
        <br><br><br>
        <h1 class="textb">Get Results </h1>
        <p class="textb verified">
          Find better candidates with less hassle. We’re confident you’ll find a great candidate who will fit perfectly with your requirements.
        </p>

      </div>
      <div class="col-md-6">

        <img src="http://clickmultiplier.com/wp-content/uploads/2015/01/ResultsPresentation.png" alt="" />

      </div>


    </div>

  </div>


  <div class="container-fluid white center pad">

      <h2 class="center foo">Pricing</h2>
      <h4 class="center foo">Posting a Job is Completely Free</h4>
      <h5 class="center foo">You’ll only be charged when you finalize applicants who match your requirements</h5>

      <div class="col-md-3 foo ">

        <!-- PRICE ITEM -->
        <div class="panel price panel-white">
          <div class="panel-heading arrow_box text-center">
          <h5>Starter</h5>
          </div>
          <div class="panel-body text-center">
            <p class="lead" style="font-size:20px"><strong>Free</strong></p>
          </div>
          <ul class="list-group list-group-flush text-center">
            <li class="list-group-item"><i class="icon-ok text-success"></i>Self Serve</li>
            <li class="list-group-item"><i class="icon-ok text-success"></i>First 2 Hires or 3 months</li>
            <li class="list-group-item"><i class="icon-ok text-success"></i> 24/7 support</li>
          </ul>

        </div>
        <!-- /PRICE ITEM -->


      </div>

      <div class="col-md-3 foo ">

        <!-- PRICE ITEM -->
        <div class="panel price panel-white">
          <div class="panel-heading arrow_box text-center">
          <h5>Pay as You Go</h5>
          </div>
          <div class="panel-body text-center">
            <p class="lead" style="font-size:20px"><strong>Tk.1000 / Hire</strong></p>
          </div>
          <ul class="list-group list-group-flush text-center">
            <li class="list-group-item"><i class="icon-ok text-success"></i>Self Serve</li>
            <li class="list-group-item"><i class="icon-ok text-success"></i>Better For &lt; 10 Hires </li>
            <li class="list-group-item"><i class="icon-ok text-success"></i> 24/7 support</li>
          </ul>

        </div>
        <!-- /PRICE ITEM -->


      </div>

      <div class=" col-md-3 foo">

        <!-- PRICE ITEM -->
        <div class="panel price panel-white">
          <div class="panel-heading arrow_box text-center">
          <h5>Pay Up Front and Save</h5>
          </div>
          <div class="panel-body text-center">
            <p class="lead" style="font-size:20px"><strong>Contact Us for the pricing</strong></p>
          </div>
          <ul class="list-group list-group-flush text-center">
            <li class="list-group-item"><i class="icon-ok text-success"></i> Dedicated Account Manager</li>
            <li class="list-group-item"><i class="icon-ok text-success"></i> Suited for &gt; 10 Hires</li>
            <li class="list-group-item"><i class="icon-ok text-success"></i> 24/7 support</li>
          </ul>

        </div>
      <h4 class="text-success">  Best Value </h4>
        <!-- /PRICE ITEM -->


      </div>

        <div class=" col-md-3 foo">

        <!-- PRICE ITEM -->
        <div class="panel price panel-white">
          <div class="panel-heading arrow_box text-center">
          <h5>Corporate</h5>
          </div>
          <div class="panel-body text-center">
            <p class="lead" style="font-size:20px"><strong>Contact Us for the pricing</strong></p>
          </div>
          <ul class="list-group list-group-flush text-center">
            <li class="list-group-item"><i class="icon-ok text-success"></i> Dedicated Account Manager</li>
            <li class="list-group-item"><i class="icon-ok text-success"></i> No Limit on Hiring</li>
            <li class="list-group-item"><i class="icon-ok text-success"></i> 24/7 support</li>
          </ul>

        </div>
          </div>
        <!-- /PRICE ITEM -->

        <!-- /PRICE ITEM -->


      </div>


      <div class="container-fluid whiteproper pad">
        <div class="col-md-6">
          <h1 class="textb">Ready to hire ?</h1>
          <p class="textb verified">
            We are ready to help! Try Unigigg to find a candidate you desire <br>
            <a href="register" class="button-alt-big">Sign Up</a>
          </p>
        </div>
        <div class="col-md-5 col-md-offset-1 pull-right">
          <h1 class="textb ">Have more questions ?</h1>
          <p class="verified textb">Check out our <a href="/faqs" class="btn btn-link">FAQs</a></h3>

        </div>

      </div>
    <!--
    <div class="center pad whiteproper">
    <h4>  Hiring for Eccentric Job is free <a href="eccentric">Learn more.</a>
      </h4>
  </div>
  --->
  <script type="text/javascript">
  (function ($) {
    $('#rec').smoothState();
 }) (jQuery);


  </script>
  <script type="text/javascript">
  window.sr = ScrollReveal({ duration: 1500 });
  sr.reveal('.foo');
  sr.reveal('.bar');

  </script>

  @include('layouts.footer')
  @endsection
