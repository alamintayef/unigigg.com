@extends('layouts.app')

@section('content')
<div class="container">
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
              <form action="{{url('removeapplication',$apply->applied_id)}}" method="POST">
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
