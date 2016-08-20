@extends('layouts.app')

@section('content')
<div class="container padtop">
  <div class="row">

@if(count($skill)>0)
<div class="panel whiteproper pad">


<table class="table  table-hover" >
  <thead>

  <th>
    Name
  </th>
  <th>
    Email
  </th>
  <th>
    Status
  </th>
  <th>
    View Profile
  </th>
  <th>
    Delete
  </th>
  </thead>
  <tbody>
    @foreach($skill as $skills)
      <tr>

        <td>{{ $skills->name }}</td>
        <td>{{ $skills->email }}</td>
        <td>
        @if($skills->verified===1)
          <h5>verified</h5>
        @else
          not verified
        @endif
        </td>
        <td>

        <form  action="{{url('/aprofile',$skills->id)}}" method="GET">

          <button type="submit" class="btn btn-default ">view</button>

        </form>

      </td>
      <td>
        <form  action="{{url('admin/delete/user',$skills->id)}}" method="POST">
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

@else
  <p>
    Nothing found . . .
  </p>

@endif
</div>
</div>
</div>
</div>
</div>
@stop
