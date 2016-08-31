@extends('layouts.app')

@section('content')
  <div class="container padtop">
    <div class="row">
      <div class="card card-raised">

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
            Profile
          </th>
          <th>
            verify
          </th>
          <th>
            Undo
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
              <form  action="{{url('/aprofile',$verify->id)}}" method="GET">
                {!! csrf_field() !!}
                <button type="submit" class="btn btn-primary">
                  <i class="fa fa-user"></i> View profile
                </button>
              </form>
            </td>
            @if($verify->verified===1)
              <td>
                <button type="button" class="btn-success">
                  Already Verified
                </button>
              </td>

              <td>
                <form class="form-group" action="{{url('/undo/verify',$verify->id)}}" method="POST">
                  {!! csrf_field() !!}
                  <button type="submit" class="btn btn-sm raised btn-warning">
                    <i class="fa fa-check"></i> undo
                  </button>
                </form>
              </td>
            @else
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
            @endif

          @endforeach
      </table>
    </div>
    </div>

  </div>




@endsection
