@extends('layouts.app')

@section('content')
<style media="screen">
body
    {
    background: url(http://s32.postimg.org/ei440a18l/blackboard.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="padding:100px;">

            <div class="card card-raised" >
                <div class="panel-heading text-primary"><h4>Sign in</h4></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail Address</label>
                            <i class="fa fa-envelope"></i>
                            <div class="col-md-6">

                                <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Password</label>
                              <i class="fa fa-key"></i>
                            <div class="col-md-6">

                                <input type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-success raised">
                                    <i class="fa fa-btn fa-sign-in"></i>Signin
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                                <br>
                                Not Signed up yet ?

                                <a class="link" href="{{ url('/register') }}">sign up</a>



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
