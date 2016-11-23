<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
      {!! Html::style('css/login.css') !!}
      {!! HTML::script('js/login.js') !!}
  </head>
<body>


<hgroup>
  <h1>Unigigg</h1>
  <h3><i class="fa fa-graduation-cap"></i>Let's Help You to Get Hired</h3>
</hgroup>
<form  method="POST" action="{{ url('/login') }}">
  {{csrf_field()}}
  <div class="group {{$errors->has('email') ? ' has-error' : '' }}">
    <input type="email" name="email" value="{{ old('email') }}"><span class="highlight"></span><span class="bar"></span>
    <label>Email</label>
    @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
  </div>
  <div class="group{{$errors->has('password') ? ' has-error' : '' }}">
    <input type="password" name="password" ><span class="highlight"></span><span class="bar"></span>
    <label>Password</label>
    @if ($errors->has('password'))
        <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif
  </div>
  <button type="submit" class="button buttonBlue">Login
    <div class="ripples buttonRipples"><span class="ripplesCircle"></span></div>
  </button>
  <lgroup>
  <h4>Not Registered ?<a href="register"> Signup</a></h4>
</lgroup>
</form>


</body>
</html>
