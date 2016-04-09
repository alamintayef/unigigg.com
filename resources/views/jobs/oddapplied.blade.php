@extends('layouts.app')

@section('content')
  <div class="container ">
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
                  <form  action="{{url('/eccentric/jobs/whoapplied/delete',$seek->id)}}" method="GET">
                  {!! csrf_field() !!}
                  <button type="submit" class="btn btn-danger btn-sm btn-block-sm">
                    <i class="fa fa-trash-o"></i> Remove
                  </button>
                </form>
                  <form  action="{{url('/profile',$seek->id)}}" method="GET">
                  {!! csrf_field() !!}
                  <button type="submit" class="btn btn-info btn-sm btn-block">
                    <i class="fa fa-user"></i> view profile
                  </button>
                </form>


                </div>
                <br>
                <button type="submit" class="btn btn-success btn-sm btn-block-sm">
                  <i class="fa fa-phone"></i> Call For Interview
                </button>




            </div>

          </div>
              @endif

        @endforeach


      </div>
    </div>
  </div>
