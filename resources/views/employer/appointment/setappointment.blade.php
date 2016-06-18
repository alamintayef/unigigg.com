@extends('layouts.app')

@section('content')
  <div class="container padtop">
    <div class="row">
      <div class="panel">


      <table class="table table-striped table-responsive">
        <thead>
          <th>
          Name
          </th>
          <th>
          Number
          </th>

          <th>
            Finalized for
          </th>
          <th>
            Notify
          </th>
        </thead>
        @foreach($call as $calls)
          <tbody>
          <tr>
            <td>
              {{$calls->fname}} {{$calls->lname}}
            </td>
            <td>
              {{$calls->mobile}}
            </td>

            <td>
              {{$calls->job_name}}
            </td>
            <td>
              <a href="#" class="btn btn-success">Notify</a>
            </td>
          @endforeach

    </div>
  </div>

  </div>
