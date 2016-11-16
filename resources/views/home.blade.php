@extends('layouts.app')

@section('content')
  @if(Auth::user()->type === 0)
  @include('student.partials.dashboard');
@elseif(Auth::user()->type === 1)
  @include('employer.emdashboard');
@elseif(Auth::user()->type === 2)
  @include('admin.adboard');
@else
  @include('admin.subadmin.index')
@endif
@endsection
