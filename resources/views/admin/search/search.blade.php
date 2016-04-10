@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">




@if(count($skill)>0)

<table class="table  table-hover" >
  <thead>
  <th>skills</th>
  <th>
    Experience
  </th>
  <th>
    User Name
  </th>
  </thead>
  <tbody>
    @foreach($skill as $skills)
      <tr>
        <td>{{ $skills->skill_name }}</td>
        <td>{{ $skills->skill_experience }}</td>
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
