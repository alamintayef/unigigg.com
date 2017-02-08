@extends('layouts.app')

@section('content')

  <div class="container padtop" id="excc">
    <div class="row">
      @include('layouts.menu')
      <div class="col-md-7">

        <ul class="nav nav-pills panel whiteproper">
          <li ><a href="{{url('userinfo')}}">Basic Information</a></li>
          <li ><a href="{{url('image')}}">Profile Pic</a></li>
          <li ><a href="{{url('edu')}}">Education</a></li>
          <li ><a href="{{url('skill')}}">Skills</a></li>
          <li ><a href="{{url('experience')}}">Experience</a></li>
          <li ><a href="{{url('refs')}}">Reference</a></li>
          <li class="active"><a href="{{url('excc')}}">Extra-Curricular</a></li>
          <li ><a href="{{url('interest')}}">Upload CV</a></li>
          <li ><a href="{{url('hobby')}}">Cover Letter</a></li>
          <li><a href="{{url('fun')}}">About You</a></li>
          <li><a href="{{url('vdoprofile')}}">Video Profile</a></li>

        </ul>


          <div class="well">

            @if(count($errors)>0)
              <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                  <p>{{ $error }}</p>
                @endforeach
              </div>
            @endif



            @include('student.forms.excc')


      </div>
    </div>
    <div class="col-md-2 panel whiteproper">
      <h5 class="textb">Experiences you added</h5>
        <ul class="list-group">

      @foreach($var as $excc)
        <li  class="list-group-item" id="excclist">{{$excc->excc_name}}</li>
      @endforeach
      </ul>

    </div>
  </div>
</div>


@endsection
