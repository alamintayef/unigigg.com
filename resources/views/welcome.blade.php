@extends('layouts.app')
@section('content')
<style media="screen">
body{
  background-image:url(http://www.louisdumont.com/temp/bulb_test.jpg);

}
</style>


<div class="container" id="content"  >
    <div class="row">
      <div  style="height:550px; text-align:center;">
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <h3 style="text-align:center;color:white;">Get <strong>Empowered</strong>.Get <strong>Hired</strong>.Get <strong>Recognized.</strong></h3>
        <h5 style="text-align:center;color:white;">CONNECTING YOUNG TALENTS WITH THE EMPLOYERS</h5>
        <a class="btn btn-default btn-lg" href="{{url('jobs/view')}}">Find a Gigg/Internship</a>


      </div>

    </div>
</div>

<div class="container-fluid white center " id="content2" >
  <div class="row" style="padding : 50px;">
    <div class="col-sm-5 pull-left">
      <h1 class="text-primary"y>Talent <i class="fa fa-graduation-cap"></i></h1>
      <p>
        Talents Be Career ready
      </p>
      <p>
        <ul class="list-group">
          <li class="list-group-item"><i class="fa fa-user"></i> Create a gig profile</li>
          <li class="list-group-item" ><i class="fa fa-plus-square"></i> Add your Awesome Skills</li>
          <li class="list-group-item"><i class="fa fa-check"></i> Validate Skills</li>
          <li class="list-group-item"><i class="fa fa-search"></i>Sit Back and get Searched</li>
          <li class="list-group-item"><i class="fa fa-smile-o fa-2x"></i> <a href="{{url('register')}}">Sign up</a> Its Free</li>
        </ul>
        <h4><a href="{{url('talent')}}">Learn More <sub><small>Suggested</small></sub></a></h4>




      </p>
    </div>
    <div class="col-sm-5 pull-right" >
      <h1 class="text-primary">Recruiter <i class="fa fa-users"></i></h1>
      <p>
          Recruiter find proactive employees
      </p>
        <p>
          <ul class="list-group">
            <li class="list-group-item"><i class="fa fa-user"></i> Create a gig profile</li>
            <li class="list-group-item" ><i class="fa fa-plus-square"></i> Add Company Infomation</li>
            <li class="list-group-item"><i class="fa fa-edit"></i> Post Jobs Defining your exact Requirements</li>
            <li class="list-group-item"><i class="fa fa-asterisk"></i> Hire</li>
            <li class="list-group-item"><i class="fa fa-smile-o fa-2x"></i> <a href="{{url('employer/register')}}">Sign up</a> Its Free</li>
          </ul>
          <h4><a href="{{url('recruiter')}}">Learn More</a></h4>

      </p>
    </div>
  </div>

</div>
<div class="container pad" id="content3" data-stellar-background-ratio="0.5">
  <div class="row" style="text-align:center">
        <br>
        <br>
        <br>
        <h2 style="color:white;">Eccentric Jobs</h2>
        <h4 style="color:white;">Find out what you like doing best, and get someone to pay you for it.</h4>
        <a href="eccentric" class="btn btn-default btn-lg">Learn More</a>
        <script type="text/javascript">
        $.stellar({
            horizontalScrolling: false,
            responsive: true
        });
        </script>

    </div>
  </div>
</div>




@include('layouts.footer')
@endsection

<!--
  <div class="col-md-12 ">
      <div class="panel panel-primary">
          <div class="panel-heading"><h3 style="text-align:center;color:white;">Get <strong>Empowered</strong>.Get <strong>Hired</strong>.Get <strong>Recognized.</strong></h3>
          <h5 style="text-align:center;color:white;">CONNECTING YOUNG TALENTS WITH THE EMPLOYERS</h5></div>

          <div class="panel-body">
              <p class="text-primary" style="text-align:center;">
                <button type="button" name="button" class="btn btn-default btn-lg">Find a Gigg/Internship</button>
              <p>


                            <div class="col-md-6">
                            <div class="panel panel-primary">
                              <div class="panel-heading"><h2 style="color:white;"> Talent <i class="fa fa-graduation-cap"></i></h2></div>
                                <div class="panel-body">
                                  Looking for Gigs ?
                                  <h3><a href="{{url('talent')}}">Get started</a></h3>
                                  <p>
                                    Create a gig profile, it's free <a href="{{url('/register')}}">Sign up.</a>
                                  </p>

                                </div>

                            </div>
                          </div>
                          <div class="col-md-6 ">
                          <div class="panel panel-primary">
                            <div class="panel-heading"><h2 style="color:white;">Recruiter <i class="fa fa-users fa-5px"></i></h2></div>
                              <div class="panel-body">
                                Looking for Talents  ?
                                <h3><a href="{{url('/recruiter')}}">Get started</a></h3>
                                <p>
                                <a href="{{url('/employer/register')}}">  SignUp </a>, it's free
                                </p>

                              </div>
                          </div>
                          </div>
                          <div class="col-md-10 col-md-offset-1">
                            <div class="panel panel-success">
                              <div class="panel-heading">
                              <h2 style="color:white; padding:20px;">Eccentric Jobs </h2>
                              </div>
                              <div class="panel-body">
                                <p>
                                  Find out what you like doing best, and get someone to pay you for it.
                                </p>
                                <h3><a href="#">Learn more</a></h3>
                              </div>

                            </div>
                          </div>
          </div>


      </div>
      <hr>



      <hr>


  </div>
-->
