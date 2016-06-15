@extends('layouts.app')

@section('content')
<div class="container padtop">
  <div class="row">




@if(count($skill)>0)

<table class="table  table-hover" >
  <thead>
    <th>
      Job Name
    </th>
    <th>
      Skills Required
    </th>

  </thead>
  <tbody>
    @foreach($skill as $skills)
      <tr>
        <td>{{ $skills->job_name }}</td>
        <td>
          {{$skills->job_skill_reqs}}
        </td>
        <td>
          <form class="form-control" action="{{url('/view/jobs',$skills->job_name)}}" method="GET">

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
@stop
