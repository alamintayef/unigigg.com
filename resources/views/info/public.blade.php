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
        @if(count($jobs)>0)
          @foreach($jobs as $job)
            <div class="col-md-3 col-md-offset-1" style="background-color:white;">

              <h5 >{{$job->job_name}}</h5>

                Type: {{$job->job_type}}
                <br>Location: {{$job->job_location}}
                <br>Salary: {{$job->job_salary}}<br>

              <strong>Posted By {{$job->company_name}}</strong><br>
              <strong>Posted on {{$job->created_at}}</strong>

              <!-- Check if its recruter or not-->


                  <form class="form-control" action="{{url('show/ejobs',$job->job_id)}}" method="GET">
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
