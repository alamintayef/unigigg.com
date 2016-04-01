@extends('layouts.app')

@section('content')
<style media="screen">
  body{
    background-image: url(http://cdn1.theodysseyonline.com/files/2016/01/23/635891727862807756463608822_inspiration.jpg);

  }
</style>
        <div class="container-fluid center pad">
            <div class="row ">
              <blockquote class="pull-left blockquote-reverse textw">
                        <p>
                          Do not wait to strike till the iron is hot, but make it hot by striking.<p>

                       <small> <cite  title="Source Title" class="textw">William Butler Yeats</cite></small>
              </blockquote>

              <br>
              <br>
              <br>

              <h1 class="pull-left textw">We Say</h1>
              <blockquote class="pull-left blockquote-reverse textw">
                        <p><strong>
                          Do not wait for some else to tell you what to do, but take the lead the tell someone else what to do
                          </strong>
                        </p>

                       <small> <cite  title="Source Title" class="textw">unigigg</cite></small>
              </blockquote>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>
              <br>

              <h2 class="pull-left textw "> We Curate Jobs for You</h2>

              <br>
              <br>
              <br>
              <p class=" textw pull-left">
              <strong>  Here @unigigg we believe everyone is special at something. We do not believe that university degrees <br>
                defines you.You can be good at anything you want.The power is in you but you need to realize it.
                </strong>
              </p>
              <br><br>
              <br>
              <br>
              <br>
              <br>
              <br><br>
              <br>
              <br>
              <br>
              <br>
              <p class="textw">
                <strong>We Unigigg, is here to help you to grow and make you career ready. aBookish knowledge is not enough to get you your desired job <br>
                  That is why you should start as early as possible
                </strong>
              </p>

            </div>

          </div>
          <div class="container-fluid center pad blue">
            <h3 class="textw pb">How it works and information</h3>
            <div class="center col-md-4 ">
              <ul class="list-group center">
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
            <div class="row">
              <h2 class="textb"> How We Help You</h2>
              <h4 class="textb">We Help you to</h4>
              <h5 class="textb">Identify you professional work skills</h5>
              <h4 class="textb">We Help you to</h4>
              <h5 class="textb">Build a dynamic profile showing your primary skill groups</h5>
              <h4 class="textb">We Help you to</h4>
              <h5 class="textb">Create a portfolio of online content showing your skills.</h5>
              <h4 class="textb">We Help you to</h4>
              <h5 class="textb"> find better offers, super fast</h5>

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
  @include('layouts.footer')
  @endsection
