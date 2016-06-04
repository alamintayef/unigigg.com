@extends('layouts.app')

@section('content')
  <script type="text/javascript">
  (function ($) {
    $('#iapplied').smoothState();
 }) (jQuery);

  </script>
<div class="container padtop " id="iapplied">
  <div class="row">
    @include('layouts.menu')

    <div class="col-md-10 ">
      <table class="table table-striped">
        <thead>
          <th>
            Jobs
          </th>
          <th>
            Job Posted By
          </th>



        </thead>

        @foreach($applied as $apply)
            @if($apply->user_id===Auth::user()->id)



        <tbody>
          <tr>
            <td>
              {{$apply->title}}

            </td>
            <td>
              {{$apply->name}}
            </td>


            <td>
              <form action="{{url('removeapplication',$apply->o_a_id)}}" method="POST">
                {!! csrf_field() !!}
                <button type="submit" class="btn btn-danger">
                  <i class="fa fa-user"></i> Remove
                </button>
              </form>
            </td>

          </tr>
        </tbody>
@endif
        @endforeach

      </table>



      </div>
    </div>
  </div>

@endsection
