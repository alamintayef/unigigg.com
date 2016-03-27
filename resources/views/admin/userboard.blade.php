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
          Type
        </th>
        <th>
          Profile
        </th>
        <th>
          Delete
        </th>
      </thead>
      <tbody>



        @foreach($alluser as $users)
            <tr>
          <td>
            {{$users->name}}
          </td>
          @if($users->type===1)
            <td>
              Talent
            </td>

          @elseif($users->type===2)
            <td>
              Employer
            </td>
            @else
            <td>
              its you the Super Admin
            </td>
              @endif
            <td>
              <button type="button" name="button">View Profile</button>
            </td>
            <td>
              
            </td>


  </tr>
        @endforeach

      </tbody>
    </table>
  </div>
</div>

@endsection
