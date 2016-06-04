@extends('layouts.app')
@section('content')
  <style media="screen">
  body{
      background: url(https://s33.postimg.org/6sjcztpbz/Shelf_Help_Best_Business_Books_Media_Mosaic.jpg) no-repeat center center fixed ;

  }
  .box{
    background-color: rgba(0, 0, 0, 0.5);
  }



  </style>
<div class="container padtop " style="height:600px;">
  <div class="row">
    <div class="col-md-3 box pad">
      <h2 class="textw foo">We are working on it</h2>
      <h3 class="foo textw">Coming Soon</h3>

      <h4 class="foo textw">Thank you </h4>
    </div>

  </div>
</div>
</script>
<script type="text/javascript">
window.sr = ScrollReveal({ duration: 1500 });
sr.reveal('.foo');

</script>

@include('layouts.footer')
@endsection
