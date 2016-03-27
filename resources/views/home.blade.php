@extends('layouts.app')

@section('content')
  @if(Auth::user()->type === 1)
  @include('student.partials.dashboard');
@elseif(Auth::user()->type === 2)
  @include('employer.emdashboard');
@else
  @include('admin.adboard');
@endif
@endsection
