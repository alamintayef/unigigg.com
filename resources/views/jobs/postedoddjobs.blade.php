@extends('layouts.app')

@section('content')
  <div class="container padtop">
    <div class="row">
      @include('layouts.menu')
      <div class="col-md-6">
        <div class="well">
          <h4 class="text-info">Jobs Posted by You</h4>
        </div>
        <div class="col-md-8">
          @if(count($postedjobs)>0)

              @foreach($postedjobs as $jobs)

                  <div class="panel panel-primary">
                    <div class="panel-heading">
                      <h3 class="panel-title">{{$jobs->title}}</h3>
                    </div>
                    <div class="panel-body">
                      <Type: {{$jobs->job_type}}</li>
                      <li>Location: {{$jobs->area}}</li>
                      <li>Salary: {{$jobs->offering}}</li>
                      <div class="well">
                        Description: {{$jobs->description}}
                        <br>
                        {{$jobs->university}}
                        <br>
                        {{$jobs->job_expires}}
                      </div>


                    </div>

                    <div class="panel-footer">
                      <form action="{{url('/deleteoddjobs',$jobs->odd_id)}}" method="POST">
                        {!! csrf_field() !!}
                        <button type="submit" class="btn btn-danger btn-sm btn-block-sm">
                          <i class="fa fa-user"></i> Remove
                        </button>
                      </form>

                    </div>
                  </div>


              @endforeach

            @endif



        </div>
@endsection
