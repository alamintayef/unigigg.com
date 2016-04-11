@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="md-col-6 center">

        <div class="panel panel-default">


      <table class="table  table-hover" >
          <thead>
              <th>Name</th>
              <th>
                Posted on
              </th>
              <th>Delete</th>
          </thead>
          <tbody>
              @foreach($jobs as $job)
              <tr>
                  <td>{{ $job->job_name }}</td>
                  <td>{{ $job->created_at }}</td>
                  <td>
                    <form class="form-inline" action="{{url('admindeletejobs',$job->job_id)}}" method="POST">
                      {!! csrf_field() !!}
                      <button type="submit" class="btn btn-danger btn-sm btn-block-sm">
                        <i class="fa fa-trash-o"></i> Remove
                      </button>
                    </form>
                  </td>
              </tr>
              @endforeach
          </tbody>
      </table>
  </div>

      </div>
    </div>
