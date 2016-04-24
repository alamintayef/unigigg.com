@extends('layouts.app')
@section('content')
<div class="container" id="vlog">
  <div class="row">
    <div class="col-md-12">
      <div class="col-md-2 panel center">
        <ul class="list-group">
          <li class="list-group-item"><a href="{{url('vlog')}}">Inspiration</a></li>
          <li class="list-group-item"><a href="{{url('interview')}}">Interview Hacks</li>
          <li class="list-group-item">Life Hacks</li>
            <li class="list-group-item">Tutorial</li>
        </ul>

      </div>
      <div class="panel pad col-md-8 col-md-offset-1">
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" width="660" height="315" src="https://www.youtube.com/embed/dOHcZWGEURc" frameborder="0" allowfullscreen></iframe>
        </div>
        <hr>
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" width="660" height="315" src="https://www.youtube.com/embed/guXkoXga0Qs" frameborder="0" allowfullscreen></iframe>
        </div>
        <em>A. P. J. Abdul Kalam</em>
        <small>Former President of India</small>
        <hr>
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" width="660" height="315" src="https://www.youtube.com/embed/9q__aQFmhig" frameborder="0" allowfullscreen></iframe>
        </div>
        <em>Will Smith</em>
        <small>American actor</small>
        <hr>
        <div  class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" width="660" height="315" src="https://www.youtube.com/embed/oAHSu1REvaU" frameborder="0" allowfullscreen></iframe>
        </div>
        <em>Ed Helms</em>
        <small>American actor and comedian</small>
        <hr>
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" width="660" height="315" src="https://www.youtube.com/embed/Nq8loZlpa_8" frameborder="0" allowfullscreen></iframe>
        </div>
        <em>Master Oogway</em>
        <small>Kung Fu Panda</small>
        <hr>
       <div  class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" width="660" height="315" src="https://www.youtube.com/embed/hYAQtEs2Img" frameborder="0" allowfullscreen></iframe>
        </div>
        <em>Master Oogway</em>
        <small>Kung Fu Panda</small>
        <hr>
      </div>

    </div>

  </div>
</div>
<script type="text/javascript">

      (function ($) {
        $('#vlog').smoothState();
      })(jQuery);

</script>

@include('layouts.footer')
@endsection
