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
          <ul class="nav nav-pills nav-justified">
            <li ><a href="{{url('jobs/view')}}"><strong class="textw">Regular Jobs</strong></a></li>
            <li class="active"><a href="{{url('jobs/view/eccentric')}}"><strong class="textw">Eccentric Jobs </strong></a></li>
          </ul>
        </div>
        <hr>
        @if(count($jobs)>0)
          @foreach($jobs as $job)
            <div class="col-md-3 col-md-offset-1" style="background-color:white;">

              <h5 >{{$job->title}}</h5>

                Type: {{$job->type}}
                <br>Location: {{$job->area}}
                <br>Salary: {{$job->offering}}<br>

              <strong>Posted By {{$job->name}}</strong><br>


              <!-- Check if its recruter or not-->


                  <form class="form-control" action="{{url('show/ejobs',$job->odd_id)}}" method="GET">
                    {!! csrf_field() !!}

                    <button type="submit" name="button" class="btn btn-default btn-mini pull-right">view</button>

                  </form>


            </div>
            <br>
          @endforeach

        @endif


      </div>
    </div>
  </div>
@include('layouts.footer')
@endsection
