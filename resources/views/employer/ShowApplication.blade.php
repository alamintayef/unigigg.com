@extends('layouts.app')

@section('content')
  <div class="container padtop " id="postedjob">
    <div class="row">
      @include('layouts.emmenu')
      <div class="col-md-10">
        <div class="panel whiteproper padsmall">
          <h4 class="textb"><i class="fa fa-briefcase"></i> Jobs Posted by You</h4>
        </div>
        @include('errors.notify')
        <div class="col-md-12">
          @if(count($postedjobs)>0)

              @foreach($postedjobs as $jobs)



                  <div class="panel padsmall">


                    <strong>Job Title : {{$jobs->job_name}}</strong>


                      <form class="pull-right" action="{{url('/shortlists',$jobs->id)}}" method="GET">
                        {!! csrf_field() !!}
                        <button type="submit" class="btn btn-primary ">
                          <i class="fa fa-star"></i> Show Shortlisted
                        </button>
                      </form>
                      <form class="pull-right" action="{{url('/whoapplied',$jobs->id)}}" method="GET">
                        {!! csrf_field() !!}
                        <button type="submit" class="btn btn-primary">
                          <i class="fa fa-paper-plane"></i> Show Applied
                        </button>
                      </form>
                      @if(Auth::user()->subs_type===0)
                        <form class="pull-right" action="{{url('/setappointment',$jobs->id)}}" method="GET">

                        <button type="submit" class="btn btn-default ">
                          <i class="fa fa-phone"></i> call Shortlisted
                        </button>
                      </form>
                      @else
                        <form class="pull-right" action="{{url('callthem/all',$jobs->id)}}" method="POST">
                        {!! csrf_field() !!}
                        <button type="submit" class="btn btn-default btn-sm">
                          <i class="fa fa-phone"></i> call-for-interview
                        </button>
                      </form>
                    @endif
                    </div>
                  </div>



              @endforeach
            @else
              <h4>You have Posted No Jobs</h4>
            @endif



        </div>
      </div>
    </div>
  </div>
@endsection
