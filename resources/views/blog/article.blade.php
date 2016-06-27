@extends('layouts.app')
<title>{{$article->title}}</title>
@section('content')
  <style media="screen">
    p{
      font-size: 20px;
    }

  </style>

<div class="container center padtop" id="font">
  <div class="row">
    <div class="col-lg-12 padsmall">

      <div class="panel col-md-10 col-md-offset-1">


        <h3>{{$article->title}}</h3>
        <p>
          {!! $article->body !!}
        </p>
        <hr>
        Share it on :
        <a href="https://www.facebook.com/sharer/sharer.php?u=www.unigigg.div/blog/article/{{$article->slug}}" target="_blank">
         <i class="fa fa-facebook fa-2x"></i>
      </a>
      </div>


    </div>

  </div>

</div>
@include('layouts.footer')
@endsection
