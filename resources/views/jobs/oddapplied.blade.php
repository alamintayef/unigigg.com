@extends('layouts.app')

@section('content')
  <div class="container padtop">
    <div class="row">
      @if(Auth::user()->type===1)
          @include('layouts.menu')
      @else
          @include('layouts.emmenu')
      @endif

      <div class="col-md-10">
        <div class="well">
          <h4 class="text-info">Applied Candidates</h4>
        </div>

        @foreach( $applied as $seek )
          @if($seek->user_id===Auth::user()->id)
          <div class="panel padsmall">
            <h4>{{$seek->fname}} {{$seek->lname}}</h4> <strong >Applied for</strong> : <h6>{{$seek->title}}</h6>


                <strong>Institute</strong>: {{$seek->institute}}


                <div class="pull-right col-md-2">
                  <form  action="{{url('eccentricjobswhoapplieddelete',$seek->o_a_id)}}" method="post">
                  {!! csrf_field() !!}
                  <button type="submit" class="btn btn-danger btn-block btn-sm">
                    <i class="fa fa-trash-o"></i> Delete
                  </button>
                </form>
                  <form  action="{{url('talent/profile/eccentric',$seek->id)}}" method="GET">
                  {!! csrf_field() !!}
                  <button type="submit" class="btn btn-info btn-block btn-sm ">
                    <i class="fa fa-user"></i> Profile
                  </button>
                </form>


                </div>
                <br>
                @if($seek->called===0)
                  <form  action="{{url('/callforodd',$seek->o_a_id)}}" method="GET">
                  {!! csrf_field() !!}
                  <button type="submit" class="btn btn-default btn-sm ">
                    <i class="fa fa-phone"></i> Call for interview
                  </button>
                  <small><em>Pressing call for interview will notify the candidate and send them your number</em></small>
                </form>
                @else
                  Already Notified
                @endif

            </div>
          @endif

    @endforeach
          </div>



      </div>
    </div>
@endsection
