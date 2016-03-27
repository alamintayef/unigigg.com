@extends('layouts.app')

@section('content')
  <div class="container ">
    <div class="row">
      @include('layouts.menu')
      <div class="col-md-8">

      @include('layouts.profilemenu')


          <div class="well">

            @if(count($errors)>0)
              <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                  <p>{{ $error }}</p>
                @endforeach
              </div>
            @endif
            @if (notify()->ready())
              <div class="alert alert-{{notify()->type()}}">
                {{notify()->message()}}
              </div>
            @endif





      </div>
    </div>
  </div>
</div>


@endsection
