

<div class="padsmall">
  <h3>Video Resume</h3>
  @if(count($vdo)>0)

  <div class="embed-responsive embed-responsive-16by9 raised">
  <iframe class="embed-responsive-item" width="350" height="250" src="https://www.youtube.com/embed/{{$vdo->vdourl}}" frameborder="0" allowfullscreen></iframe>
  </div>

@else
    <p>Nothing added</p>
  @endif

</div>
