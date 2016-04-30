@extends('layouts.app')
@section('content')
<style media="screen">
body{

  background: url(files/images/cover.jpg) no-repeat center center fixed;
  -webkit-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
#overlay {
  position: absolute;
  width: 100%;
  height: 100%;
  z-index: 2;
  background-color: #080d15;
  opacity: .7;
}
.homepage-hero {
/*
  text-shadow: 0 0 2px rgba(0, 0, 0, 0.8);
  font-family: "Montserrat", sans-serif;

  http://www.bestbuyinsurance.ca/wp-content/uploads/2015/11/motorcycle_147504974.jpg

  */
  background: url(files/images/work.jpg) no-repeat center center fixed;
  -webkit-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
  /*
 http://www.louisdumont.com/temp/bulb_test.jpg

  */

}
</style>

<div class="container">
    <div class="row ">
      <div  class="center">

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
        <br>

        <a class="btn3d btn btn-default font-cor" href="{{url('jobs/view')}}"><span>Find a Gigg/Internship <i class="fa fa-paper-plane"></i></span></a>

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

<div class="container-fluid white center " >
  <div class="row pad">
    <div class="col-sm-5 pull-left">
      <h1 class="text-primary wow bounceInUp" >Talent <i class="fa fa-graduation-cap"></i></h1>
      <p>
        Be Career ready
      </p>
      <p>
        <ul class="list-group card card-raised">
          <li class="list-group-item"><i class="fa fa-user"></i> Create a gig profile</li>
          <li class="list-group-item" ><i class="fa fa-plus-square"></i> Add your awesome skills</li>
          <li class="list-group-item"><i class="fa fa-check"></i> Validate skills</li>
          <li class="list-group-item"><i class="fa fa-search"></i>Sit Back and get searched</li>
          <li class="list-group-item"><i class="fa fa-smile-o fa-2x"></i> <a href="{{url('register')}}">Sign up</a> Its Free</li>
        </ul>
        <h4><a href="{{url('talent')}}">Learn More</a></h4>




      </p>
    </div>
    <div class="col-sm-5 pull-right" >
      <h1 class="text-primary">Recruiter <i class="fa fa-users"></i></h1>
      <p>
          Recruiter find proactive employees
      </p>
        <p>
          <ul class="list-group card card-raised">
            <li class="list-group-item"><i class="fa fa-user"></i> Create a gig profile</li>
            <li class="list-group-item" ><i class="fa fa-plus-square"></i> Add company infomation</li>
            <li class="list-group-item"><i class="fa fa-edit"></i> Post jobs defining your exact requirements</li>
            <li class="list-group-item"><i class="fa fa-asterisk"></i> Hire</li>
            <li class="list-group-item"><i class="fa fa-smile-o fa-2x"></i> <a href="{{url('employer/register')}}">Sign up</a> Its Free</li>
          </ul>
          <h4><a href="{{url('recruiter')}}">Learn More</a></h4>

      </p>
    </div>
  </div>

</div>
<div class="container-fluid pad homepage-hero" >
  <div class="row center" >
        <br>
        <br>
        <br>
        <br>
        <br>
        <h2 class="textw">Eccentric Jobs</h2>
        <h4 class="textw">Find out what you like doing best, and get someone to pay you for it.</h4>
        <a href="eccentric" class="btn btn-default btn-lg raised ">Learn More</a>
        <br>
        <br>
        <br>


    </div>
  </div>
</div>
<script type="text/javascript">
  (function ($) {
    $('#content').smoothState();
 }) (jQuery);
</script>



@include('layouts.footer')
@endsection
