
@if(count($images)>0)
  @foreach($images as $image)

    <img src="{!!('files/images/'.$image->filePath) !!}" alt="propic" height="150px" width="150px" style="border-radius:50%;" />

  @endforeach

@endif
