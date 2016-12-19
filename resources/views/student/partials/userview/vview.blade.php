

<div class="padsmall">

  @if(count($vdo)>0)
  <h3>Video Resume</h3>
  <div class="embed-responsive embed-responsive-16by9 raised">
  <iframe class="embed-responsive-item" width="350" height="250" src="https://www.youtube.com/embed/{{$vdo->vdourl}}" frameborder="0" allowfullscreen></iframe>
  </div>

@else
  <h4>Please take a look at the video to get started ! Thank you </h4>
  <div class="embed-responsive embed-responsive-16by9 raised">

   <iframe width="660" height="315" src="https://www.youtube.com/embed/DF3qUXJLC_s" frameborder="0" allowfullscreen></iframe>
   </div>
  @endif

</div>
