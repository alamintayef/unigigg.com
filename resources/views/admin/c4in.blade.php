@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="panel padsmall">


      <table class="table table-responsive table-striped">
        <thead>
          <th>
          Request By
          </th>
          <th>
          Requested for
          </th>
          <th>
          Number
          </th>
          <th>
            Appointment Date and Time
          </th>
          <th>
            Bkash Number
          </th>
          <th>
            Transaction Number
          </th>
          <th>
            Call
          </th>
        </thead>
        @foreach($interviewcall as $calls)
          <tbody>
          <tr>
            <td>
              {{$calls->company_name}}
            </td>
            <td>
              {{$calls->job_name}}

            </td>
            <td>
              {{$calls->company_phone}}
            </td>
            <td>
              {{$calls->appointment}} and {{ $calls->appoint_time}}
            </td>
            <td>
              {{$calls->identifier}}
            </td>
            <td>
              {{$calls->transaction_id}}
            </td>
            <td>
              <form  action="{{url('call/for/interview',$calls->job_id)}}" method="POST">
              {!! csrf_field() !!}
              <button type="submit" class="btn btn-default btn-sm">
                <i class="fa fa-phone"></i> Notify
              </button>
            </form>
            </td>
          @endforeach
        </table>
    </div>
    </div>

  </div>
