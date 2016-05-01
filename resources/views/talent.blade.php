@extends('layouts.app')

@section('content')
<style media="screen">

</style>
        <div class="container-fluid center pad" id="talent">
            <div class="row ">

              <h2  class="textb"><strong>We Curate Jobs for You</strong> </h2>

              <p class="fontbig pb">
              <strong>  Here @unigigg we believe everyone is special at something.  We do not believe that university degrees <br>
                defines you. You can be good at anything you want.The power is in you but you need to realize it.
                </strong>
              </p>


            </div>

          </div>
          <div class="container-fluid center pad " id="student-vdo">

            <div class="col-md-4 textw">
              <h3 class="textw">Video Profile</h3>
              <p class="textw fontbig pb">
                You will be asked to upload a video clip introducing yourself in 30 seconds.<br>
                A simple video reveals a lot about you than a CV.

              </p>

            </div>


          </div>
          <div class="container-fluid center pad blue">
            <h3 class="textw pb">How it works</h3>
            <div class="col-md-3">

            </div>
            <div class="center col-md-6">
              <h4>
              <ul class="list-group center card-raised">
                <li class="list-group-item "> Create A profile</li>
                <li class="list-group-item"> Insert All Your Information</li>
                <li class="list-group-item"> Create a Video Introduction</li>
                <li class="list-group-item"> Verify and Validate Skills</li>
                <li class="list-group-item"> Earn Points </li>
                <li class="list-group-item"> Get Internships & Jobs</li>
                </h4>
              </ul>

            </div>
            <div class="col-md-3">

            </div>

          </div>
          <div class="container-fluid  center pad" id="student-price">
            <div class="col-md-6 pad fontbig">
              <h3 class="textw">What's Free</h3>
              <ul class="list-inline">
                <h4><strong>
                <li class="textw">Creatng A Gig Profile</li>
                <li class="textw">Generating Resume/CV</li>
                <li class="textw">Applying to Regular Jobs</li>
                <li class="textw">Applying to Eccentric Jobs <sub>Partially</sub></li>
                <li class="textw">Applying to Experienceships</li>
                </strong>
                </h4>
                 <h3 class="textw">What's Not Free</h3>
                 <h4>
                <ul class="list-inline">
                  <strong>
                  <li class="textw">Validating Profile <sub>500 Tk./Every Request</sub></li>

                  <li class="textw">Applying to Eccentric jobs <sub>500 Tk. For Six Months</sub></li>
                  </strong>
                  </h4>
                </ul>
              </ul>

            </div>


          </div>
          <div class="container-fluid whiteproper center pad">
            <div class="">

              <h2 class="textb">We Help you to</h2>
              <h5 class="textb">Identify you professional work skills</h5>
              <br>
              <h5 class="textb">Build a dynamic profile showing your primary skill group</h5>
              <br>
              <h5 class="textb">Create a portfolio of online content showing your skills.</h5>
              <br>
              <h5 class="textb">Build work experience.</h5>
              <br>
              <h5 class="textb"> Find better offers, super fast </h5>

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
