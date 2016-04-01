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
          <li class="active" ><a href="{{url('skill')}}">Skills</a></li>
          <li ><a href="{{url('experience')}}">Experience</a></li>
          <li ><a href="{{url('refs')}}">Reference</a></li>
          <li ><a href="{{url('excc')}}">Extra-Curricular</a></li>
          <li><a href="{{url('interest')}}">Interests</a></li>
          <li><a href="{{url('hobby')}}">Hobbies</a></li>
          <li><a href="{{url('fun')}}">About You</a></li>
          <li><a href="{{url('vdoprofile')}}">Video Profile</a></li>
        </ul>


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


            @include('student.forms.vprofile')
            <div class="col-md-3 panel whiteproper padsmall pull-right">

                <h4 class="textb">Instructions</h4>
                <p>
                  Upload a video introduction yours on youtube and paste in link here.
                </p>
                <p>
                  how to get video id <br>
                  <small>https://www.youtube.com/watch?v=<span class="text-success">rz66fpmIZCQ</span></small>
                  <br>The highlighted green part is your video id.Copy it and paste it here
                </p>
                <p>
                  Upload a video of yours on youtube containing your introduction
                  in 30 seconds. A simple video reveals a lot about you then a CV, thats why we ask for video intro.
                </p>
                <p>
                  Exclude your contact details. Focus only on your self on the video
                </p>

              </div>


    </div>

  </div>
</div>



@endsection
