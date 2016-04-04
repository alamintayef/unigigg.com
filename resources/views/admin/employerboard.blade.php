@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <table class="table table-striped">
        <thead>
          <th>
            Name
          </th>
          <th>
            email
          </th>
          <th>
            View Profile
          </th>
          <th>
            Verify
          </th>
        </thead>
        <tbody>



          @foreach($allemployer as $users)
            <tr>
              <td>
                {{$users->name}}
              </td>
              <td>
                {{$users->email}}
              </td>
              <td>
                <form  action="{{url('/aprofile',$users->id)}}" method="GET">
                  {!! csrf_field() !!}
                  <button type="submit" class="btn btn-primary">
                    <i class="fa fa-user"></i> view profile
                  </button>
                </form>
              </td>
              <td>
                <form  action="{{url('/aprofile',$users->id)}}" method="GET">
                  {!! csrf_field() !!}
                  <button type="submit" class="btn btn-primary">
                    <i class="fa fa-check-circle"></i> Verify
                  </button>
                </form>
              </td>



            </tr>
          @endforeach

        </tbody>
      </table>
    </div>
  </div>

@endsection
