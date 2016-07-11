@extends('layouts.app')

@section('content')
  <div class="container padtop">
    <div class="row">
      <div class="card card-raised">
        <div class="pull-right padsmall">


        {!! Form::open(['method'=>'GET','url'=>'search/manush','class'=>'form-inline'])  !!}
          <input type="text" class="form-control" name="search" placeholder="Search...">
          <button class="btn btn-default-sm" type="submit">
            <i class="fa fa-search"></i>
            </button>
        {!! Form::close() !!}
        </div>
        <table class="table table-striped">
          <thead>
            <th>
              Name
            </th>
            <th>
              Email
            </th>
            <th>
              Profile
            </th>
            <th>
              Verification
            </th>
            <th>
              Delete
            </th>
            <th>
              Point
            </th>

          </thead>
          <tbody>



            @foreach($alluser as $users)
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
                  @if($users->verified===0)
                    <button type="button" name="button" class="btn-danger">Not Verified</button>
                  @else
                    <button type="button" name="button" class="btn-success">Verified</button>
                  @endif
                </td>
                <td>
                  <form  action="{{url('admin/delete/user',$users->id)}}" method="POST">
                    {!! csrf_field() !!}
                    <button type="submit" class="btn btn-danger">
                      <i class="fa fa-trash"></i> Delete
                    </button>
                  </form>
                </td>
                <td>
                  {{$users->profile_count}}
                </td>

              </tr>

            @endforeach

            {{ $alluser->links() }}



          </tbody>
        </table>
      </div>
    </div>
  </div>
  @include('errors.notify')
@endsection
