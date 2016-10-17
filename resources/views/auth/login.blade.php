@extends('layouts.app')

@section('content')

<style media="screen">
/*
body
    {
    background: url(http://s32.postimg.org/ei440a18l/blackboard.jpg) no-repeat center center fixed;
    -webkit-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    }
*
body{
    background: url(http://s33.postimg.org/8jxddi0in/how_much_time_we_have_infographic.png) no-repeat center center fixed;

/*
    background: url(http://s33.postimg.org/vee5ynti7/how_much_time_we_have_infographic.png),url(http://s33.postimg.org/vee5ynti7/how_much_time_we_have_infographic.png),url(http://s33.postimg.org/vee5ynti7/how_much_time_we_have_infographic.png);

}
*/
.bp{
  background-color: rgba(0, 0, 0, 0.7);
}

</style>
<video autoplay loop muted poster="screenshot.jpg" id="background">
   <source src="http://techslides.com/demos/sample-videos/small.mp4" type="video/mp4">
</video>
<div class="container padtop" id="login">
    <div class="row">
        <div class="col-md-8 col-md-offset-2 pad" >
          <div class="card card-raised bp" >
                <div class="panel-heading"><h4 class="textw">Sign in</h4></div>
                <div class="panel-body textw">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {!! csrf_field() !!}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">E-Mail Address</label>
                            <i class="fa fa-envelope"></i>
                            <div class="col-md-6">

                                <input type="email" class="form-control " name="email" value="{{ old('email') }}">

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

                                <input type="password" class="form-control " name="password">

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
                                <button type="submit" class="btn btn-success raise">
                                    <i class="fa fa-btn fa-sign-in"></i>Signin
                                </button>

                                <a  href="{{ url('/password/reset') }}">Forgot Your Password?</a>
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
<br>
<br>
<br>
<br>
<br>
<br>
<script type="text/javascript">
$(document).ready(function(){
$(document).mousemove(function(e){
   TweenLite.to($('body'),
      .5,
      { css:
          {
              backgroundPosition: ""+ parseInt(event.pageX/8) + "px "+parseInt(event.pageY/'12')+"px, "+parseInt(event.pageX/'15')+"px "+parseInt(event.pageY/'15')+"px, "+parseInt(event.pageX/'30')+"px "+parseInt(event.pageY/'30')+"px"
          }
      });
});
});
</script>
@include('layouts.footer')
@endsection
