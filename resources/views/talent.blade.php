@extends('layouts.app')

@section('content')
<style media="screen">

</style>
        <div class="container center pad" id="talent">
            <div class="row ">

              <h2  > We Curate Jobs for You</h2>

              <br>
              <br>
              <br>
              <p >
              <strong>  Here @unigigg we believe everyone is special at something.  We do not believe that university degrees <br>
                defines you. You can be good at anything you want.The power is in you but you need to realize it.
                </strong>
              </p>

              <p >
                <strong>We Unigigg, is here to help you to grow and make you career ready. aBookish knowledge is not enough to get you your desired job <br>
                  That is why you should start as early as possible
                </strong>
              </p>

            </div>

          </div>
          <div class="container-fluid center pad blue ">
            <h3 class="textw pb">How it works and information</h3>
            <div class="center col-md-4 ">
              <ul class="list-group center card-raised">
                <li class="list-group-item ">1. Create A profile</li>
                <li class="list-group-item">2. Insert All Your Information</li>
                <li class="list-group-item">3. Create a Video Introduction</li>
                <li class="list-group-item">4. Verify and Validate Skills</li>
                <li class="list-group-item">5. Earn Points </li>
                <li class="list-group-item">6. Get Internships & Jobs</li>
              </ul>

            </div>
            <div class="col-md-8 textw blue">
              <h3 class="textw">Video Profile</h3>
              <p class="textw">
                You will be asked to upload a video clip of yours having your introduction <br>
                in 30 seconds. A simple video reveals a lot about you then a CV, thats why we ask for video intro.<br>
                <strong>P.S: Best of Luck we know you can make an awesome intro</strong>
              </p>
              <h4 class="textw">Pricing</h4>
              <p>
                Hey do not worry about pricing, Getting a regular job and internship is free <br>
                Generating CV is free.<br>
                <small><sub>Basicall you fill in your data and then <br> you can download the cv in different formats any time you want</sub> Great right</small><br>
              <strong></strong>  Validating profile and skills takes time that's why we charge a flat rate of Tk.500 to validate all your skills everytime you request us.</strong>
              </p>
            </div>


          </div>
          <div class="container-fluid whiteproper center pad">
            <div class="pad card card-raised">

              <h2 class="textb">We Help you to</h2>
              <h5 class="textb">Identify you professional work skills</h5>
              <br>
              <h5 class="textb">Build a dynamic profile showing your primary skill groups</h5>
              <br>
              <h5 class="textb">Create a portfolio of online content showing your skills.</h5>
              <br>
              <h5 class="textb">Build work experience.</h5>
              <br>
              <h5 class="textb"> Find better offers, super fast <sup><i class="fa fa-star"></i></sup></h5>

            </div>

          </div>
          <div class="container-fluid white pad" >
            <div class="row center pb" >
                  <br>
                  <br>
                  <br>
                  <h2 class="textb">Eccentric Jobs</h2>
                  <h4 class="textb">Tutions, Assignments, nano-gigs that are neglected as jobs are eccentric jobs</h4>
                  <a href="{{url('eccentric')}}" class="btn btn-default btn-lg">Learn More</a>


              </div>
            </div>
          </div>

          <script type="text/javascript">
          (function ($) {
            $('#talent').smoothState();
         }) (jQuery);

          </script>
  @include('layouts.footer')
  @endsection
