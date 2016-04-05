@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">

      <table class="table">
        <thead>
          <th>
          Call Request
          </th>
          <th>
            Number
          </th>
          <th>
          Request By
          </th>
          <th>
            Call
          </th>
        </thead>
        @foreach($call as $calls)
          <tbody>
          <tr>
            <td>
              {{$calls->fname}}
            </td>
            <td>
              {{$calls->mobile}}
            </td>
            <td>
              {{$calls->company_name}}
            </td>
            <td>
              call and sms
            </td>
          @endforeach

    </div>

  </div>
