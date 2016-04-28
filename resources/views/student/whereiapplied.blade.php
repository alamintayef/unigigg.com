@extends('layouts.app')

@section('content')
  <script type="text/javascript">
  (function ($) {
    $('#whereapplied').smoothState();
 }) (jQuery);

  </script>
<div class="container" id="whereapplied">
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
          <th>
            Last date of Application
          </th>
        </thead>

        @foreach($applied as $apply)
            @if($apply->user_id===Auth::user()->id)

        <tbody>
          <tr>
            <td>
              {{$apply->job_name}}

            </td>
            <td>
              {{$apply->company_name}}
            </td>
            <td>
                {{$apply->job_last_date_application}}
            </td>
            <td>
              <form action="{{url('remove/application',$apply->applied_id)}}" method="POST">
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
      @if (notify()->ready())
        <script>
        swal({
          title: "{!! notify()->message() !!}",
          text: "{!! notify()->option('text') !!}",
          type: "{{ notify()->type() }}",
          @if (notify()->option('timer'))
          timer: {{ notify()->option('timer') }},
          showConfirmButton: false
          @endif
        });
        </script>
      @endif


      </div>
    </div>
  </div>

@endsection
