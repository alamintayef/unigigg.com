@extends('layouts.app')

@section('content')
  <style media="screen">
    body{
      background-image: url(http://wallpapercave.com/wp/NNo5yub.jpg);
    }
  </style>
  <div class="container pad pb " id="eccentric">
      <div class="row" >
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="center">
          <h3 class="textw">We Promote Eccentric Jobs at Unigigg</h3>
          <h5 class="textw">Jobs that are not counted as jobs in our society can be identified as eccentric jobs or odd jobs</h5>
        </div>
        <div class="center">
          <h4 class="textw">Tutions</h4>
          <h4 class="textw">Photography</h4>
          <h4 class="textw">Content Writing</h4>
          <h4 class="textw">And Many more jobs..</h4>
          <p class="textw">
           Every jobs is a job and helps us to grow and gain experience.
          </p>
        </div>
      </div>
    </div>
    <div class="container-fluid blue pb">
      <div class="row">
        <div class="center">
          <h2 class="textw">Pricing and Information</h2>
          <div class="col-md-4 pull-left">
            <h3 class="textw"><i class="fa fa-graduation-cap"></i> Talent</h3>
            <ul class="list-group ">
              <li class="list-group-item">First 3 Month Free</li>
              <li class="list-group-item">Tk.500 subscription fee for 6 months</li>
              <li class="list-group-item">Can Apply to unlimited jobs</li>
            </ul>
          </div>
          <div class="col-md-4">

            <h4 class="textw">Types of Jobs you can post</h4>
            <h5 class="textw">Tuitions</h5>
            <h5 class="textw">Assignments</h5>
            <h5 class="textw">Research Assistantship</h5>
            <h5 class="textw">FreeLancer Musician</h5>
            <h5 class="textw">Hire a Music Band</h5>
            <h5 class="textw">Freelance Content Writing</h5>

          </div>

          <div class="col-md-4 pull-right">
            <h3 class="textw"><i class="fa fa-users"></i> Recruiter</h3>
            <ul class="list-group ">
              <li class="list-group-item">Posting a Jobs is Free</li>
              <li class="list-group-item">Premium Service per post cost Tk.100</li>
              <li class="list-group-item">Minimum job offering Tk.1000</li>
            </ul>
          </div>
          
        </div>

      </div>
    </div>
    <script type="text/javascript">
    (function ($) {
      $('#eccentric').smoothState();
   }) (jQuery);

    </script>
@include('layouts.footer')
@endsection
