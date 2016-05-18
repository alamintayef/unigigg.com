@extends('layouts.app')

@section('content')
<style media="screen">
.center{
  text-align:center;
}
body{
  /*https://images.unsplash.com/photo-1422393462206-207b0fbd8d6b?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&s=b09f84e8e8fd58ee91faf817b9f903d7
  http://www.userzoom.com/wp-content/uploads/2015/04/Recruitingpng.png*/
  background: url(http://www.userzoom.com/wp-content/uploads/2015/04/Recruitingpng.png) no-repeat center center fixed;
  -webkit-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  background-color: rgba(0, 0, 255, 0.3);  /* blue with opacity */
  top: 0;
  width: 100%;
  height: 100%;
  z-index: -10;

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
  <div class="container pad pb" id="rec">
      <div class="row" >
        <div class="pull left center  pad">
          <br>
          <br>


          <br>
          <div class="card card-raised pad">
            <strong class="">it is not possible to manufacture talent, you have to recruit them in the first place</strong>

            <h1 class=" font-corb ">HR Solution for startups and SMEs</h1>
          </div>




      </div>
    </div>
  </div>
  <div class="container pad pb whiteproper">
      <div class="row">
        <div class="col-md-4 pull left  padsmall">


          <strong class="">it is not possible to manufacture talent, you have to recruit them in the first place</strong>

          <h1 class=" font-corb">We Curate Talent For You</h1>



      </div>
      <div class="col-md-8" >
      <img src="http://s32.postimg.org/8d29hrxxx/Recruit.jpg" alt="" />
      </div>
    </div>
  </div>

  <div class="container-fluid blue pad textw">
    <h3 class="center textw">How it Works</h3>
  <div class="col-md-4 col-md-offset-1">
    <h4 class="textw">1. Create a profile</h4>
    <p>
      Create a company profile with all the necessary information
    </p>
  </div>

  <div class="col-md-4 col-md-offset-1">
    <h4 class="textw">2. Post a Job</h4>
    <p>
      Post job specifying exact needs, target university, area <br>
      <small>we will notify every student that matchs with your needs</small>

    </p>

  </div>
  <div class="col-md-4 col-md-offset-1">
    <h4 class="textw">3. Curating Starts</h4>
    <p>
      Sit back, watch the applications roll in <br>
      <small>You can also search through our database and shortlist</small>

    </p>

  </div>
  <div class="col-md-4 col-md-offset-1">
    <h4 class="textw">4. Shortlist. Finalize. Pay</h4>
    <p>
      After you shortlist a bunch of applicants, you finalize them for interview <br>
      <small>After Finalizing You pay us. Then notify the candidates for interview according to your time</small>

    </p>

  </div>

</div>

  <div class="container-fluid white center pad">

      <h2 class="center">Pricing</h2>
      <h4 class="center">Posting a Job is Completely Free</h4>
      <h5 class="center">You’ll only be charged when you finalize applicants who match your requirements</h5>


      <div class="col-md-4 ">

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
            <li class="list-group-item"><i class="icon-ok text-success"></i> 27/7 support</li>
          </ul>

        </div>
        <!-- /PRICE ITEM -->


      </div>

      <div class=" col-md-4">

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
            <li class="list-group-item"><i class="icon-ok text-success"></i> 27/7 support</li>
          </ul>

        </div>
      <h4 class="text-success">  Best Value </h4>
        <!-- /PRICE ITEM -->


      </div>

        <div class=" col-md-4">

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
            <li class="list-group-item"><i class="icon-ok text-success"></i> 27/7 support</li>
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

  @include('layouts.footer')
  @endsection
