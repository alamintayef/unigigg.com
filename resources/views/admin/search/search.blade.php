@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">




@if(count($skill)>0)

<table class="table  table-hover" >
  <thead>
  <th>Result</th>
  <th>
    Degree Name
  </th>
  <th>
    User Name
  </th>
  </thead>
  <tbody>
    @foreach($skill as $skills)
      <tr>
        <td>
          {{$skills->Degree_result}}
        </td>
        <td>
          {{$skills->Degree_name}}
        </td>
        <td>{{ $skills->name }}</td>
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
@stop
