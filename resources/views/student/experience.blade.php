@extends('layouts.app')

@section('content')
  <div class="container ">
    <div class="row">
      @include('layouts.menu')
      <div class="col-md-7">

        <ul class="nav nav-pills panel whiteproper">
          <li ><a href="{{url('userinfo')}}">Basic Information</a></li>
          <li ><a href="{{url('image')}}">Profile Pic</a></li>
          <li ><a href="{{url('edu')}}">Degree</a></li>
          <li ><a href="{{url('skill')}}">Skills</a></li>
          <li class="active"><a href="{{url('experience')}}">Experience</a></li>
          <li ><a href="{{url('refs')}}">Reference</a></li>
          <li><a href="{{url('excc')}}">Extra-Curricular</a></li>
          <li><a href="{{url('interest')}}">Interests</a></li>
          <li><a href="{{url('hobby')}}">Hobbies</a></li>
          <li ><a href="{{url('fun')}}">About You</a></li>
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
            @if (notify()->ready())
              <script>
              swal({
                title: "{!! notify()->message() !!}",
                text: "{!! notify()->option('text') !!}",
                type: "{{ notify()->type() }}",
                @if (notify()->option('timer'))
                timer: {{ notify()->option('timer') }},
                showConfirmButton: false
                @endif
              });
              </script>
            @endif


            @include('student.forms.experience')


      </div>
    </div>
    <div class="col-md-2 panel whiteproper">
      <h5 class="textb">Experiences you added</h5>
      @foreach($var as $exp)
        <ul class="list-group">
          <li class="list-group-item">{{$exp->exp_name}}</li>
        </ul>
      @endforeach

    </div>
  </div>
</div>


@endsection
