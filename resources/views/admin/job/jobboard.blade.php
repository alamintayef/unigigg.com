@extends('layouts.app')

@section('content')

  <div class="pad padtop container">
    <div class="row">
      <div class="col-md-10 card">


        <table class="table pad">
          <thead>

              <th>
                Title
              </th>
              <th>
                Expiration Date
              </th>
              <th>
                Status
              </th>


          </thead>
          @foreach($jobs as $job)
          <tbody>
            <tr>
              <td>
                {{$job->job_name}}
              </td>
              <td>
                {{$job->job_expires}}
              </td>
              <td>
                @if($job->status===0)
                  Inactive
                  <form class="form-group" action="{{url('/admin/status/activate',$job->job_id)}}" method="POST">
                    {!! csrf_field() !!}
                    <button type="submit" class="btn btn-sm raised btn-primary">
                      <i class="fa fa-check"></i> Change
                    </button>
                  </form>
                @else
                  Active
                  <form class="form-group" action="{{url('/admin/status/inactivate',$job->job_id)}}" method="POST">
                    {!! csrf_field() !!}
                    <button type="submit" class="btn btn-sm raised btn-warning">
                      <i class="fa fa-check"></i> Change
                    </button>
                  </form>
                @endif

              </td>
            </tr>
          </tbody>
          @endforeach
        </table>


      </div>

    </div>

  </div>

@endsection
