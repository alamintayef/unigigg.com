@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      @foreach($call as $calls)
        <div class="jumbotron">
          {{$calls->fname}} {{$calls->lname}}<br>
          {{$calls->mobile}}


        </div>

      @endforeach

    </div>
  </div>
@endsection
