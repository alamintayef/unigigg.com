@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">

      @include('layouts.menu')

      <div class="col-md-10 " style="font-size:12px;">
        @if(count($jobs)>0)
          @foreach($jobs as $job)
            <div class="col-md-3 col-md-offset-1 panel whiteproper">

              <h5 >{{$job->job_name}}</h5>

                Type: {{$job->job_type}}
                <br>Location: {{$job->job_location}}
                <br>Salary: {{$job->job_salary}}<br>

              <strong>Posted By {{$job->company_name}}</strong><br>
              <strong>Posted on {{$job->created_at}}</strong>

              <!-- Check if its recruter or not-->


                  <form class="form-control" action="{{url('show/jobs',$job->job_id)}}" method="GET">
                    {!! csrf_field() !!}

                    <button type="submit" name="button" class="btn btn-default btn-lg">view</button>

                  </form>


            </div>
              <br>

          @endforeach
        @endif


      </div>

    </div>
  </div>
@endsection
