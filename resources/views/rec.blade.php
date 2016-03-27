@extends('layouts.app')

@section('content')
<style media="screen">
.center{
  text-align:center;
}
</style>
  <div class="container pad pb">
      <div class="row" >
        <div class="pull left center">
          <blockquote class="center blockquote-reverse">
                    <strong></strong>it is not possible to manufacture talent, you have to recruit them in the first place</strong>
          </blockquote>
          <h3>We Curate Talent for you</h3>
          <p class="center">
            Creating Skills does not really help unless it is matched with the perfect opportunity.<br>
            That's why we started <strong>unigigg</strong>, where we help our young talents to build their <br>
            skills and find out what they do best. Then we try to match them with the opportunity.
          </p>


      </div>
    </div>
  </div>
  <div class="container-fluid blue pad textw">
    <h3 class="center textw">How it Works</h3>
  <div class="col-md-4 col-md-offset-1">
    <h4 class="textw">1. Create a profile</h4>
    <p>
      Create a Company Profile with all the necessary Information
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
      <small>You can also Search through our database and shortlist</small>

    </p>

  </div>
  <div class="col-md-4 col-md-offset-1">
    <h4 class="textw">4. Shortlist. Finalize. Pay</h4>
    <p>
      After you shortlist a bunch of applicants, you finalize them for interview <br>
      <small>After Finalizing You pay us can we fix the interview for you according to you time</small>

    </p>

  </div>

</div>
<div class="container-fluid pb pad whiteproper">
  <div class="row center">
    <h2>How We Help You</h2>
    <h3>We help you to :</h3>
    <h4>Identify proactive new employees with specific skills</h4>
    <h3>We help you to :</h3>
    <h4>Expedite the lengthy hiring process</h4>
  </div>

</div>
  <div class="container-fluid white center pad">

      <h2 class="center">Pricing</h2>
      <h4 class="center">Posting a Job is Completely Free</h4>
      <h5 class="center">Pay Less, Get More</h5>


      <div class="col-md-3 ">

        <!-- PRICE ITEM -->
        <div class="panel price panel-white">
          <div class="panel-heading arrow_box text-center">
          <h5>Pay as You Go</h5>
          </div>
          <div class="panel-body text-center">
            <p class="lead" style="font-size:20px"><strong>Tk.1000 / Hire</strong></p>
          </div>
          <ul class="list-group list-group-flush text-center">
            <li class="list-group-item"><i class="icon-ok text-success"></i> Self Serving</li>
            <li class="list-group-item"><i class="icon-ok text-success"></i> Charged Per Hire</li>
            <li class="list-group-item"><i class="icon-ok text-success"></i> 27/7 support</li>
          </ul>

        </div>
        <!-- /PRICE ITEM -->


      </div>

      <div class=" col-md-3">

        <!-- PRICE ITEM -->
        <div class="panel price panel-white">
          <div class="panel-heading arrow_box text-center">
          <h5>Pay Per Quarter</h5>
          </div>
          <div class="panel-body text-center">
            <p class="lead" style="font-size:20px"><strong>Tk.4000 / 3-month</strong></p>
          </div>
          <ul class="list-group list-group-flush text-center">
            <li class="list-group-item"><i class="icon-ok text-success"></i> Dedicated Account Manager</li>
            <li class="list-group-item"><i class="icon-ok text-success"></i> For 5 Application</li>
            <li class="list-group-item"><i class="icon-ok text-success"></i> 27/7 support</li>
          </ul>

        </div>
        <!-- /PRICE ITEM -->


      </div>

        <div class=" col-md-3">

        <!-- PRICE ITEM -->
        <div class="panel price panel-white">
          <div class="panel-heading arrow_box text-center">
          <h5>Pay Upfront Yearly</h5>
          </div>
          <div class="panel-body text-center">
            <p class="lead" style="font-size:20px"><strong>Tk. 10000 / Year</strong></p>
          </div>
          <ul class="list-group list-group-flush text-center">
            <li class="list-group-item"><i class="icon-ok text-success"></i> Dedicated Account Manager</li>
            <li class="list-group-item"><i class="icon-ok text-success"></i> 15 Applicants</li>
            <li class="list-group-item"><i class="icon-ok text-success"></i> 27/7 support</li>
          </ul>

        </div>
          </div>
        <!-- /PRICE ITEM -->
        <div class=" col-md-3">

        <!-- PRICE ITEM -->
        <div class="panel price panel-white ">
          <div class="panel-heading arrow_box text-center">
          <h5>Internship</h5>
          </div>
          <div class="panel-body text-center">
            <p class="lead" style="font-size:20px"><strong>Tk. 500 / Intern</strong></p>
          </div>
          <ul class="list-group list-group-flush text-center">
            <li class="list-group-item"><i class="icon-ok text-success"></i> Self Serve</li>
            <li class="list-group-item"><i class="icon-ok text-success"></i> Charger Per Hire</li>
            <li class="list-group-item"><i class="icon-ok text-success"></i> 27/7 support</li>
          </ul>

        </div>
        <!-- /PRICE ITEM -->


      </div>


    </div>
    <div class="center pad">
    <h4>  Hiring for Eccentric Job is free <a href="eccentric">Learn more.</a>
      </h4>
  </div>

  @include('layouts.footer')
  @endsection
