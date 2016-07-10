@extends('layouts.app')

@section('content')
<style media="screen">
body
    {
      background: url(http://s32.postimg.org/ejzpwglet/work.jpg) no-repeat center center fixed;
      -webkit-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="padding:50px;">
            <div class="card card-raised panel">
                <div class="panel-heading center"><h3>Hello, Recruiter !</h3></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} ">
                            <label class="col-md-4 control-label">Name</label>
                            <i class="fa fa-user"></i>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="{{ old('name') }}" >

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail Address</label>
                            <i class="fa fa-envelope"></i>

                            <div class="col-md-6">
                                <input type="email" id='email' class=" form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Contact No.</label>
                            <i class="fa fa-phone"></i>

                            <div class="col-md-6">
                                <input type="phone" id='phone' class=" form-control " name="phone" value="{{ old('phone') }}">

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Password</label>
                            <i class="fa fa-key"></i>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password" placeholder="Min 8 characters">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Confirm Password</label>
                            <i class="fa fa-key"></i>

                            <div class="col-md-6">
                                <input type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                          <input type="hidden" name="type" value="2">
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary btn-raised">
                                    <i class="fa fa-btn fa-user"></i>SIGNUP
                                </button>
                            </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-8 col-md-offset-3">
                          <p>
                          <strong>*</strong><small>By registering up you agree to our Terms and Conditions and Privacy Policy</small>
                          </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@include('layouts.footer')
@endsection
