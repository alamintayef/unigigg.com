
@if(count($images)>0)

    <img class="card-raised " src="{!!('files/images/'.$images->filePath) !!}" alt="propic" height="150px" width="150px" />

@else
    <p>No Image Uploaded yet</p>
@endif
