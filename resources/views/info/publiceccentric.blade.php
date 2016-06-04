@extends('layouts.app')

@section('content')
<style media="screen">
  body
  {
    background: url(http://www.jsrent.com/wp-content/uploads/2015/03/job-hunting.jpg) no-repeat center center fixed;
  }
</style>

  <div class="container padtop">
    <div class="row pad">

      <div class="col-md-12 " style="font-size:12px; padding:5px">
        <div class="transparentbg" >
          <ul class="nav nav-pills nav-justified">
            <li ><a href="{{url('jobs/view')}}"><strong class="textw">Regular Jobs</strong></a></li>
            <li class="active"><a href="{{url('jobs/view/eccentric')}}"><strong class="textw">Eccentric Jobs </strong></a></li>
            <li><form class="form-inline center" action="index.html" method="post">
              <input type="search" class="form-control" name="name" value=""> <button type="button" class=" btn-change textb " name="button"><i class="fa fa-search">Search</i></button>
            </form></li>
          </ul>
        </div>
        <hr>
        @if(count($jobs)>0)
          @foreach($jobs as $job)
            <div class="col-md-3 col-md-offset-1">

              <div class="card-container">
                     <div class="card">
                         <div class="front">
                           <!--
                            <div class="cover">
                                 <img src="https://www.irononsticker.com/images/Kung%20Fu%20Panda%205.jpg"/>
                             </div>
                           -->

                               <!--
                             <div class="user">
                                 <img class="img-circle" src="https://www.irononsticker.com/images/Kung%20Fu%20Panda%205.jpg"/>
                             </div>
                             -->
                             <div class="content">
                                 <div class="main">
                                     <h3 class="name"> {{$job->title}} </h3>
                                     <p class="profession">Type: {{$job->type}}</p>

                                     <p class="text-center">
                                                     <br>Location: {{$job->area}}
                                                     <br>Salary: {{$job->offering}}<br>

                                                   <strong>Posted By {{$job->name}}</strong><br></p>
                                 </div>
                                 <div class="footer">
                                     <div class="rating">
                                         <i class="fa fa-mail-forward"></i> Hover to Rotate
                                     </div>
                                 </div>
                             </div>
                         </div> <!-- end front panel -->
                         <div class="back">
                             <div class="header">
                                 <h5 class="motto">"To be or not to be, this is my awesome motto!"</h5>
                             </div>
                             <div class="content">
                                 <div class="main">
                                     <h4 class="text-center">Job Description</h4>
                                     <p class="text-center">Web design, Adobe Photoshop, HTML5, CSS3, Corel and many others...</p>

                                     <div class="stats-container">
                                       <form class="form-control" action="{{url('/view/odd/jobs',$job->title)}}" method="GET">

                                         <button type="submit" class="btn btn-default btn-mini pull-right">view</button>

                                       </form>
                                     </div>

                                 </div>
                             </div>
                             <div class="footer">
                                 <div class="social-links text-center">
                                     <a href="http://creative-tim.com" class="facebook"><i class="fa fa-facebook fa-fw"></i></a>
                                     <a href="http://creative-tim.com" class="google"><i class="fa fa-google-plus fa-fw"></i></a>
                                     <a href="http://creative-tim.com" class="twitter"><i class="fa fa-twitter fa-fw"></i></a>
                                 </div>
                             </div>
                         </div> <!-- end back panel -->
                     </div> <!-- end card -->
                 </div> <!-- end card-container -->





              <!-- Check if its recruter or not-->





            </div>

          @endforeach

        @endif


      </div>
    </div>
  </div>
@include('layouts.footer')
@endsection
