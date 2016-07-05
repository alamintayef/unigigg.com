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
    Status
  </th>
  <th>
    View Profile
  </th>
  </thead>
  <tbody>
    @foreach($skill as $skills)
      <tr>

        <td>{{ $skills->name }}</td>
        <td>
        @if($skills->verified===1)
          <h5>verified</h5>
        @else
          not verified

        @endif
        </td>
        <td>

        <form class="form-control" action="{{url('/aprofile',$skills->id)}}" method="GET">

          <button type="submit" class="btn btn-default btn-mini pull-right">view</button>

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
