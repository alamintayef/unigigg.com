

<div class="padsmall">
  @if(count($vdo)>0)
  @foreach($vdo as $video)

  <iframe class="embed-responsive-item" width="350" height="250" src="https://www.youtube.com/embed/{{$video->vdourl}}" frameborder="0" allowfullscreen></iframe>
  @endforeach
  @endif

</div>