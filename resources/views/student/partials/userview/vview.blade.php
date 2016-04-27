

<div class="padsmall">
  @if(count($vdo)>0)
  @foreach($vdo as $video)
  <div class="embed-responsive embed-responsive-16by9 raised">
  <iframe class="embed-responsive-item" width="350" height="250" src="https://www.youtube.com/embed/{{$video->vdourl}}" frameborder="0" allowfullscreen></iframe>
  </div>
  @endforeach
@else
    <p>Nothing added</p>
  @endif

</div>
