@extends('layouts.app')
<title>Employer Board</title>
@section('content')

      <div class="padtop">
        <h2>Employer Board</h2>
        <div class="panel">


      <div class="table-responsive">

      <table class="table table-bordered">
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
          <th>Sub Type </th>
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
                    <i class="fa fa-user"></i>
                  </button>
                </form>
              </td>
              <td>
                <form  action="{{url('verify/employer',$users->id)}}" method="POST">
                  {!! csrf_field() !!}
                  <button type="submit" class="btn btn-success">
                    <i class="fa fa-check-circle"></i>
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
                <form  action="{{url('update/employer/subscripton',$users->id)}}" method="POST">
                  {!! csrf_field() !!}
                  <button type="submit" class="btn btn-info">
                    Change
                  </button>
                </form>
              </td>
              <td>
                <form  action="{{url('admin/delete/user',$users->id)}}" method="POST">
                  {!! csrf_field() !!}
                  <button type="submit" class="btn btn-danger">
                    <i class="fa fa-trash"></i>
                  </button>
                </form>
              </td>
            </tr>
          @endforeach
            {{ $allemployer->links() }}
        </tbody>
      </table>
      </div>
    </div>
</div>
@endsection
