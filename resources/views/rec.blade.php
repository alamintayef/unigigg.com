@extends('layouts.employernav')

@section('content')
<style media="screen">
.center{
  text-align:center;
}
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
}

</style>
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
--->
<br>
<br><br>
<div id="text-carousel" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
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
-->
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
    <h4 class="textw">1. Create a profile</h4>
    <p>
      Create a company profile with all the necessary information
    </p>
  </div>

  <div class="col-md-4 col-md-offset-1 bar">
    <h4 class="textw">2. Post a Job</h4>
    <p>
      Post job specifying exact needs, target university, area <br>
      <small>we will notify every student that matchs with your needs</small>

    </p>

  </div>
  <div class="col-md-4 col-md-offset-1 bar">
    <h4 class="textw">3. Curating Starts</h4>
    <p>
      Sit back, watch the applications roll in <br>
      <small>You can also search through our database and shortlist</small>
    </p>

  </div>
  <div class="col-md-4 col-md-offset-1 bar">
    <h4 class="textw">4. Shortlist. Finalize. Pay</h4>
    <p>
      After you shortlist a bunch of applicants, you finalize them for interview <br>
      <small>After Finalizing You pay us. Then notify the candidates for interview according to your time</small>
    </p>

  </div>

</div>
<section>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center">
        <h2 class="text-uppercase">Our Services</h2>
        <div class="divider"></div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam voluptas facere vero ex tempora saepe perspiciatis ducimus sequi animi.</p>
      </div>
      <div class="col-md-4 ">
        <div class="pv-30 ph-20 service-block bordered shadow text-center object-non-visible animated object-visible fadeInDownSmall" data-animation-effect="fadeInDownSmall" data-effect-delay="100">
          <span class="icon bg-df circle"><i class="fa fa-diamond"></i></span>
          <h3>Clean Code & Design</h3>
          <div class="divider clearfix"></div>
          <p>Voluptatem ad provident non repudiandae beatae cupiditate amet reiciendis lorem ipsum dolor sit amet, consectetur.</p>
          <a href="page-services.html">Read More <i class="pl-5 fa fa-angle-double-right"></i></a>
        </div>
      </div>
      <div class="col-md-4 ">
        <div class="pv-30 ph-20 service-block bordered shadow text-center object-non-visible animated object-visible fadeInDownSmall" data-animation-effect="fadeInDownSmall" data-effect-delay="150">
          <span class="icon bg-df circle"><i class="fa fa-connectdevelop"></i></span>
          <h3>Extremely Flexible</h3>
          <div class="divider clearfix"></div>
          <p>Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet, consectetur.</p>
          <a href="page-services.html">Read More <i class="pl-5 fa fa-angle-double-right"></i></a>
        </div>
      </div>
      <div class="col-md-4 ">
        <div class="pv-30 ph-20 service-block bordered shadow text-center object-non-visible animated object-visible fadeInDownSmall" data-animation-effect="fadeInDownSmall" data-effect-delay="200">
          <span class="icon bg-df circle"><i class="fa fa-laptop"></i></span>
          <h3>Latest Technologies</h3>
          <div class="divider clearfix"></div>
          <p>Iure sequi unde hic. Sapiente quaerat sequi inventore veritatis cumque lorem ipsum dolor sit amet, consectetur.</p>
          <a href="page-services.html">Read More <i class="pl-5 fa fa-angle-double-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>


  <div class="container-fluid white center pad">

      <h2 class="center foo">Pricing</h2>
      <h4 class="center foo">Posting a Job is Completely Free</h4>
      <h5 class="center foo">You’ll only be charged when you finalize applicants who match your requirements</h5>


      <div class="col-md-4 foo ">

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

      <div class=" col-md-4 foo">

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

        <div class=" col-md-4 foo">

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


    </div>
    <div class="container-fluid pb pad whiteproper" id="student-vdo">
      <div class="row center">
        <div class="col-md-3"></div>

        <div class="panel padsmall white col-md-6">


          <h3>We help you to :</h3>
          <h4>Identify proactive employees with specific skills</h4>

          <h4>Expedite the lengthy hiring process</h4>
          <h4>Reduce HR Cost</h4>

        </div>
        <div class="col-md-3"></div>

      </div>

    </div>
    <div class="center pad whiteproper">
    <h4>  Hiring for Eccentric Job is free <a href="eccentric">Learn more.</a>
      </h4>
  </div>
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
