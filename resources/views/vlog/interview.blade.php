@extends('layouts.app')
@section('content')
<div class="container" id="vlog">
  <div class="row">
    <div class="col-md-12">
      <div class="col-md-2 panel center ">
        <ul class="list-group">
          <li class="list-group-item"><a href="{{url('vlog')}}">Inspiration</a></li>
          <li class="list-group-item"><a href="{{url('interview')}}">Interview Hacks</li>
          <li class="list-group-item">Life Hacks</li>
          <li class="list-group-item">Tutorial</li>
        </ul>

      </div>
      <div class="card card-raised pad col-md-8 col-md-offset-1 pb">
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" width="560" height="285" src="https://www.youtube.com/embed/videoseries?list=PL3kwbCtbsEXx3a4nKg6tzg4132qs0fARU" frameborder="0" allowfullscreen></iframe>
        </div>
        <hr>
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" width="560" height="285" src="https://www.youtube.com/embed/UXwW6I3-bUA?rel=0" frameborder="0" allowfullscreen></iframe>
        </div>
        <hr>
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" width="560" height="285" src="https://www.youtube-nocookie.com/embed/u_VdMHGQnZU?rel=0" frameborder="0" allowfullscreen></iframe>
        </div>
        <hr>
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" width="560" height="285" src="https://www.youtube-nocookie.com/embed/TXEtYvup7mc?rel=0" frameborder="0" allowfullscreen></iframe>
        </div>
        <hr>
        <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" width="560" height="285" src="https://www.youtube-nocookie.com/embed/wLu_R4mXOvc?rel=0" frameborder="0" allowfullscreen></iframe>
        </div>


    </div>

  </div>
</div>
</div>

<script type="text/javascript">

      (function ($) {
        $('#vlog').smoothState();
      })(jQuery);

</script>
<div class="pb">

</div>

@include('layouts.footer')
@endsection
