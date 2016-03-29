@extends('layouts.app')

@section('content')

  <div class="container ">
    <div class="row">
      @include('layouts.menu')
      <div class="col-md-8">

        <ul class="nav nav-pills whiteproper">
          <li ><a href="{{url('userinfo')}}">Basic Information</a></li>
          <li ><a href="{{url('Image')}}">Profile Pic</a></li>
          <li ><a href="{{url('edu')}}">Degree</a></li>
          <li ><a href="{{url('skill')}}">Skills</a></li>
          <li><a href="{{url('experience')}}">Experience</a></li>
          <li><a href="{{url('refs')}}">Reference</a></li>
          <li><a href="{{url('excc')}}">Extra-Curricular</a></li>
          <li><a href="{{url('interest')}}">Interests</a></li>
          <li class="active"><a href="{{url('hobby')}}">Hobbies</a></li>
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
            @if(Session::has('flash_message'))
    <div class="alert alert-success"><em> {!! session('flash_message') !!}</em></div>
@endif


            @include('student.forms.hobby')


      </div>
    </div>
  </div>
</div>


@endsection
