@extends('layouts.app')

@section('content')
  <div class="container padtop">
    <div class="row">
      <div class="card card-raised">

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
              Points
            </th>
          </thead>
          <tbody>


              <tr>
            @foreach($alluser as $users)

                <td>
                  {{$users->name}}
                </td>
                <td>
                  {{$users->email}}
                </td>

                <td>
                  <form  action="{{url('/aprofile',$users->name)}}" method="GET">
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



            @endforeach
            <td>
              
            </td>
            </tr>



          </tbody>
        </table>
      </div>
    </div>
  </div>
  @include('errors.notify')
@endsection
