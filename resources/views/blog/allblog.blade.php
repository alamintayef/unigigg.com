@extends('layouts.app')

@section('content')
  <style media="screen">
  #font{
    font-family: 'Courier';


  }

  </style>

<div class="container center padtop" id="font">
  <div class="row">
    <div class="col-lg-12 padsmall">
        @foreach($blog as $blogs)
      <div class="panel col-md-10 col-md-offset-1">


        <h4><a href="{{url('/blog/article',$blogs->slug)}}">{{$blogs->title}}</a></h4>
        <h5>{{ $blogs->subtitle}}</h5>



      </div>

      @endforeach
    </div>

  </div>

</div>
@include('layouts.footer')
@endsection
