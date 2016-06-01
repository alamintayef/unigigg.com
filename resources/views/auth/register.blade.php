@extends('layouts.app')

@section('content')
<style media="screen">
body
    {
      background: url(http://s33.postimg.org/5r3u2r8nz/background1.jpg) no-repeat center center fixed;
      -webkit-background-size: cover;
      -o-background-size: cover;
      background-size: cover;
    }
    .excel{
      background-color: rgba(0, 0, 0, 0.7);
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2" style="padding:50px;">
            <div class="card card-raised excel textw">
                <div class="panel-heading center"><h3 class="textw">Hi ! Talent </h3></div>
                <div class="card-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} ">
                            <label class="col-md-4 control-label">Name</label>
                            <i class="fa fa-user"></i>

                            <div class="col-md-6">
                                <input type="text" class="form-control textw" name="name" value="{{ old('name') }}" >

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
                                <input type="email" id='email' class=" form-control textw" name="email" value="{{ old('email') }}">

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
                                <input type="password" class="form-control textw" name="password" placeholder="Min 8 characters">

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
                                <input type="password" class="form-control textw" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                          <input type="hidden" name="type" value="1">

                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary btn-raised">
                                    <i class="fa fa-user"></i> SignUp
                                </button>
                            </div>
                        </div>
                        <div class="form-group">
                          <div class="col-md-8 col-md-offset-3">
                          <p>
                          <strong>*</strong><small>By signing up you agree to our Terms and Conditions and Privacy Policy</small>
                          </p>
                          <p class="">
                            Already signed up ? <a href="{{url('login')}}"> </i> Sign In</a><br>
                            Not A Talent ? Signup as  <a href="{{url('employer/register')}}">Recruiter</a>
                          </p>
                          </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
var email = document.getElementById("email");
var emailplete = new Awesomplete(email, {
  minChars:1,
  autoFirst:true,
  list: ["facebook.com", "gmail.com","hotmail.com", "live.com","yahoo.com"],
  data: function (text, input) {
    return input.slice(0, input.indexOf("@")) + "@" + text;
  },
  filter: Awesomplete.FILTER_STARTSWITH
});
</script>


@include('layouts.footer')
@endsection
