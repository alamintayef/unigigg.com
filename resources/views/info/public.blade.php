@extends('layouts.app')

@section('content')
<style media="screen">
body
{
  background-image: url(http://tweakmytwitter.com/backgrounds/images/bg/2257.jpg);
}
</style>

<div class="container">
  <div class="row pad">

    <div class="col-md-12" style="font-size:12px; padding:5px">
      <div >
        <ul class="nav nav-pills  nav-justified">
          <li class="active"><a href="{{url('jobs/view')}}"><strong class="textw">Regular Jobs</strong></a></li>
          <li ><a href="{{url('jobs/view/eccentric')}}"><strong class="textw">Eccentric Jobs </strong></a></li>
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
              <div class="content">
                <div class="main">
                  <h3 class="name"> {{$job->job_name}} </h3>
                  <p class="profession"> Type: {{$job->job_type}}</p>

                  <p class="text-center">  <br>Location: {{$job->job_location}}
                    <br>Salary: {{$job->job_salary}}<br>

                    <strong>Posted By {{$job->company_name}}</strong><br>
                    <strong>Posted on {{$job->created_at}}</strong>
                  </p>
                </div>
                <div class="footer">
                  <div class="rating">
                    <i class="fa fa-mail-forward"></i> Auto Rotation
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
                  <p class="textb text-center">
                    {!! $job->job_description !!}
                  </p>
                  <p class="text-center">{{$job->job_expires}}.</p>

                  <div class="stats-container">
                    <form class="form-control" action="{{url('/show/jobs',$job->job_id)}}" method="GET">
                      {!! csrf_field() !!}

                      <button type="submit" name="button" class="btn btn-default btn-mini pull-right">view</button>

                    </form>
                  </div>

                </div>
              </div>
              <div class="footer">

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
