@extends('layouts.app')

@section('content')
  <style media="screen">
    body{
      background-image: url(http://wallpapercave.com/wp/NNo5yub.jpg);
    }
  </style>
  <div class="container pad pb">
      <div class="row" >
        <br>
        <br>
        <br>
        <br>
        <br>


        <div class="center ">
          <h3 class="textw">We Promote Eccentric Jobs at Unigigg</h3>
          <h5 class="textw">Jobs that are not counted as jobs in our society can be identified as eccentric jobs or odd jobs</h5>
        </div>
        <div class="center">
          <h4 class="textw">Tutions</h4>
          <h4 class="textw">Photography</h4>
          <h4 class="textw">Content Writing</h4>
          <h4 class="textw">And Many more small jobs..</h4>
          <p class="textw">
            are not counted as jobs in our society. But hey every jobs is a job and helps us to grow and gain experience. So why not list them
          </p>
        </div>

      </div>
    </div>
    <div class="container-fluid blue pb">
      <div class="row">
        <div class="center">
          <h2 class="textw">Pricing and Information</h2>
          <div class="col-md-4 pull-left">
            <h3 class="textw"> Job Seekers</h3>

            <img src="http://recruitmentlobby.com/files/userfiles/images/marketing_icon_free.png" alt="" />
          </div>
          <div class="col-md-4">
            <p class="textw">
              Our aim is to bring down the ridiculously high cost of getting this kind of job through different media
            </p>
            <h4 class="textw">Types of Jobs you can post</h4>
            <h5 class="textw">Tuitions</h5>
            <h5 class="textw">Assignments</h5>
            <h5 class="textw">Research Assistantship</h5>
            <h5 class="textw">FreeLancer Musician</h5>
            <h5 class="textw">Hire a Music Band</h5>
            <h5 class="textw">Freelance Content Writing</h5>

          </div>

          <div class="col-md-4 pull-right">
            <h3 class="textw">Job Providers</h3>
            <ul class="list-group ">
              <li class="list-group-item">Posting a Jobs is Free</li>
              <li class="list-group-item">We Charge 10% of job offering</li>
              <li class="list-group-item">Minimum job offering Tk.1000</li>
            </ul>
          </div>

        </div>

      </div>
    </div>
@include('layouts.footer')
@endsection
