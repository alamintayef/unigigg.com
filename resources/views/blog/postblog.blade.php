@extends('layouts.app')

@section('content')
  <script type="text/javascript">
  (function ($) {
    $('#hobby').smoothState();
 }) (jQuery);

  </script>
  <div class="container" id="hobby">
    <div class="row">
      @include('layouts.menu')
      <div class="col-md-7">



          <div class="well">

            @if(count($errors)>0)
              <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                  <p>{{ $error }}</p>
                @endforeach
              </div>
            @endif
        @include('errors.notify')


            @include('student.forms.blog')


      </div>
    </div>
  
  </div>
</div>



@endsection
