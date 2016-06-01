@extends('layouts.app')

@section('content')
  <style media="screen">
    body{
      background: url(http://s33.postimg.org/os2cacwbj/talent.jpg) no-repeat center center fixed;
      -webkit-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
    .price{
      background-color: rgba(0, 0, 0, 0.5);
    }
    .carsol{
      background-color: rgba(0, 0, 0, 0.1);
    }
  </style>
    <div class="container-fluid center pad " id="talent">
            <div class="row ">
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
              <div id="text-carousel" class="carousel slide carsol" data-ride="carousel">
                <!-- Wrapper for slides -->
                <div class="row">

                    <div class="col-md-offset-3 col-md-6 foo">
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="carousel-content">
                                    <div>
                                      <h2 class="textw "> Get Hired Faster</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="carousel-content">
                                    <div>
                                      <h2 class="textw ">Gain Experience</h2>
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
            </div>

          </div>
          <br>
          <br>
          <br>
          <br>
          <br>
          <br>


          <div class="container-fluid  center pad" id="student-price">
            <div class="col-md-6 pad fontbig price">
              <h3 class="textw">Whats Free</h3>
              <ul class="list-inline">
                <h4><strong>
                <li class="textw">Creatng A Gig Profile</li>
                <li class="textw">Generating Resume/CV</li>
                <li class="textw">Applying to Regular Jobs</li>
                <li class="textw">Applying to Eccentric Jobs <sub>Partially</sub></li>
                <li class="textw">Applying to Experienceships</li>
                </strong>
                </h4>
                 <h3 class="textw">Whats Not Free</h3>
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
            <div class="foo">

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
            <div class="row center pb foo" >
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
         <script type="text/javascript">
         window.sr = ScrollReveal({ duration: 1500 });
         sr.reveal('.foo');
         sr.reveal('.bar');

         </script>

  @include('layouts.footer')
  @endsection
