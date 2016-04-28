@extends('layouts.app')

@section('content')
  <style media="screen">
  #font{
    font-family: 'Courier';


  }

  </style>

<div class="container center" id="font">
  <div class="row">
    <div class="col-lg-12 padsmall">
        @foreach($blog as $blogs)
      <div class="panel col-md-10 col-md-offset-1">

        <h4>{{$blogs->title}}</h4>
        <p>
          {!! $blogs->body !!}
        </p>
        by <em>{{$blogs->name}}</em>


      </div>

      @endforeach
    </div>

  </div>

</div>
@include('layouts.footer')
@endsection
