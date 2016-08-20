@extends('layouts.app')
<title>Employer Board</title>
@section('content')
  <div class="container padtop panel">
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
          <th>
            Status
          </th>
          <th>
            Delete
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
                <form  action="{{url('/employer/profile',$users->id)}}" method="GET">
                  {!! csrf_field() !!}
                  <button type="submit" class="btn btn-primary">
                    <i class="fa fa-user"></i> view profile
                  </button>
                </form>
              </td>
              <td>
                <form  action="{{url('verify/employer',$users->id)}}" method="POST">
                  {!! csrf_field() !!}
                  <button type="submit" class="btn btn-primary">
                    <i class="fa fa-check-circle"></i> Verify
                  </button>
                </form>
              </td>
              @if($users->verified===0)
                <td>
                  <p class="text-danger">
                    Not verified
                  </p>
                </td>
              @else
                <td>
                  <p class="text-success">
                   verified
                  </p>
                </td>
              @endif
              <td>
                <form  action="{{url('admin/delete/user',$users->id)}}" method="POST">
                  {!! csrf_field() !!}
                  <button type="submit" class="btn btn-danger">
                    <i class="fa fa-trash"></i> Delete
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
