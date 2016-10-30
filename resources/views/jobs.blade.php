@extends('layouts.app')

@section('content')
  <div class="container padtop" id="jobs">
    <div class="row">

      @include('layouts.emmenu')

      <div class="col-md-10 " style="font-size:12px; padding:5px">
        @if(count($jobs)>0)
          @foreach($jobs as $job)
            <!--
            <div class="col-md-3 col-md-offset-1 panel" style="background-color:white;">

              <h5 >{{$job->job_name}}</h5>

                Type: {{$job->job_type}}
                <br>Location: {{$job->job_location}}
                <br>Salary: {{$job->job_salary}}<br>

              <strong>Posted By {{$job->company_name}}</strong><br>
              <strong>Posted on {{$job->created_at}}</strong>

              <!-- Check if its recruter or not--


                  <form class="form-control" action="{{url('show/ejobs',$job->id)}}" method="GET">
                    {!! csrf_field() !!}

                    <button type="submit" name="button" class="btn btn-default btn-raised btn-xs pull-right">view</button>

                  </form>


            </div>
            --->
            <div class="table table-responsive">
              <tr>
                <td>
                  <strong> {{$job->job_name}}</strong><br>Location: {{$job->job_location}}
                  <br>Salary: {{$job->job_salary}}<br>
                  <strong>Posted By {{$job->company_name}}</strong><br>
                </td>
              </tr>
            </div>
            <br>
          @endforeach
        @endif


      </div>

    </div>
  </div>
  <script type="text/javascript">
  (function ($) {
  $('#jobs').smoothState();
})(jQuery);
  </script>
@endsection
