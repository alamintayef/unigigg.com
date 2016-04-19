@extends('layouts.app')
@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="col-md-2 panel center">
        <ul class="list-group">
          <li class="list-group-item"><a href="#">Inspiration</a></li>
          <li class="list-group-item">Tutorial</li>
          <li class="list-group-item">Life Hacks</li>
        </ul>

      </div>
      <div class="panel pad col-md-8 col-md-offset-1">
        <iframe width="660" height="315" src="https://www.youtube.com/embed/dOHcZWGEURc" frameborder="0" allowfullscreen></iframe>
        <hr>
        <iframe width="660" height="315" src="https://www.youtube.com/embed/guXkoXga0Qs" frameborder="0" allowfullscreen></iframe>
        <em>A. P. J. Abdul Kalam</em>
        <small>Former President of India</small>
        <hr>
        <iframe width="660" height="315" src="https://www.youtube.com/embed/9q__aQFmhig" frameborder="0" allowfullscreen></iframe>
        <em>Will Smith</em>
        <small>American actor</small>
        <hr>
        <iframe width="660" height="315" src="https://www.youtube.com/embed/oAHSu1REvaU" frameborder="0" allowfullscreen></iframe>
        <em>Ed Helms</em>
        <small>American actor and comedian</small>
        <hr>
        <iframe width="660" height="315" src="https://www.youtube.com/embed/Nq8loZlpa_8" frameborder="0" allowfullscreen></iframe>
        <em>Master Oogway</em>
        <small>Kung Fu Panda</small>
        <hr>
        <iframe width="660" height="315" src="https://www.youtube.com/embed/hYAQtEs2Img" frameborder="0" allowfullscreen></iframe>
        <em>Master Oogway</em>
        <small>Kung Fu Panda</small>
        <hr>
      </div>

    </div>

  </div>
</div>

@include('layouts.footer')
@endsection
