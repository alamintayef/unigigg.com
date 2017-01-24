@extends('layouts.app')

@section('content')
  <div class="container padtop" id="chakri">
    <div class="row">

      @include('layouts.menu')

      <div class="col-md-10 " style="font-size:12px;">
        <div >
          <ul class="nav nav-pills panel whiteproper ">
                    <!--
            <li class="active"><a href="{{url('chakri')}}">All</a></li>

            <li ><a href="{{url('internships')}}">Internships</a></li>
            <li ><a href="{{url('fulltime')}}">Full-Time</a></li>
            <li ><a href="{{url('parttime')}}">Part-Time</a></li>
            <li ><a href="{{url('onetime')}}">One-Time</a></li>
            -->
            
            <li>@include('search.search',['url'=>'search/charki'])</li>
          </ul>
        </div>

          <table class="table table-responsive table-stripped  whiteproper card-raised padsmall">
            <thead>
              <tr>
                <th>Title</th>
                <th>Location</th>
                <th>Salary</th>
                <th>Company</th>
                <th>View </th>
              </tr>
            </thead>
          @if(count($jobs)>0)
            @foreach($jobs as $job)


            <tbody>
            <tr>
              <td>
                <strong> {{$job->job_name}}</td>
                <td>
                  {{$job->job_location}}
                </td>
                <td>
                   {{$job->job_salary}}
                </td>
                <td>
                {{$job->company_name}}

              </td>
              <td>
                  <a href="{{url('show/jobs',$job->id)}}" class="btn btn-default">view</a>
              </td>
            </tr>

    </tbody>

        @endforeach

      @endif



    </table>


      </div>

    </div>
  </div>
    <script type="text/javascript">
    (function ($) {
      $('#chakri').smoothState();
   }) (jQuery);
  </script>
@endsection
