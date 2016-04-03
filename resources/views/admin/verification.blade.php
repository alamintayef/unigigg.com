@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">

      <table class="table">
        <thead>
          <th>
          Verification Request From
          </th>
          <th>
            Number
          </th>
          <th>
          Transaction ID
          </th>
          <th>
            verify
          </th>
        </thead>
        @foreach($varreqs as $verify)
          <tbody>
          <tr>
            <td>
              {{$verify->name}}
            </td>
            <td>
              {{$verify->bkash_number}}
            </td>
            <td>
              {{$verify->transaction_id}}
            </td>
            <td>
              <form class="form-group" action="{{url('/verify',$verify->id)}}" method="POST">
                {!! csrf_field() !!}
                <button type="submit" class="btn btn-success">
                  <i class="fa fa-check"></i> Verify
                </button>
              </form>
            </td>
          </tr>
        </tbody>
          @endforeach
      </table>

    </div>

  </div>




@endsection