@extends('layouts.app')
@section('content')
<style media="screen">
body{

  background: url(http://s32.postimg.org/rg1efg31h/cover2w.jpg) no-repeat center center fixed;
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
      <br>
      <a class="btn btn-default font-cor" href="{{url('jobs/view')}}"><b>Find a Gigg / Internship <i class="fa fa-paper-plane"></i><sub><small class="ssmal">click here</small></sub></b></a>

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
      <h1 class="text-primary wow bounceInUp" >Talent<i class="fa fa-graduation-cap"></i></h1>

      <p>
        <ul class="list-group card card-raised">
          <li class="list-group-item"><i class="fa fa-user"></i> Create a Gig Profile</li>
          <li class="list-group-item" ><i class="fa fa-plus-square"></i> Add Awesome Skills</li>
          <li class="list-group-item"><i class="fa fa-check"></i> Validate Skills</li>
          <li class="list-group-item"><i class="fa fa-search"></i>Sit Back And Get Searched</li>
          <li class="list-group-item"><i class="fa fa-smile-o fa-2x"></i> <a href="{{url('register')}}">Sign up</a> Its Free</li>
        </ul>
        <h4><a href="{{url('talent')}}">Learn More</a></h4>




      </p>
    </div>
    <div class="col-sm-5 pull-right" >
      <h1 class="text-primary">Recruiter <i class="fa fa-users"></i></h1>

      <p>
        <ul class="list-group card card-raised">
          <li class="list-group-item"><i class="fa fa-user"></i> Create a Gig Profile</li>
          <li class="list-group-item" ><i class="fa fa-plus-square"></i> Add Company Infomation</li>
          <li class="list-group-item"><i class="fa fa-edit"></i> Post Jobs Defining Exact Requirements</li>
          <li class="list-group-item"><i class="fa fa-asterisk"></i> Hire</li>
          <li class="list-group-item"><i class="fa fa-smile-o fa-2x"></i> <a href="{{url('employer/register')}}">Sign up</a> Its Free</li>
        </ul>
        <h4><a href="{{url('recruiter')}}">Learn More</a></h4>

      </p>
    </div>
  </div>

</div>
<div class="container-fluid pad" id="homepage-hero" >
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
