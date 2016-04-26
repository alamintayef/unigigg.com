@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row center ">
      <div class="col-md-3">

      </div>
      <div class="col-md-6 card-raised whiteproper pad">
        <h4 class="textb">Change password <i class="fa fa-key"></i></h4>

      <form class="form-horizontal" role="form" method="POST" action="{{ url('change/user/password') }}">
        {!! csrf_field() !!}

        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
          <label class="col-md-4 control-label">Password</label>

          <div class="col-md-6">
            <input type="password" class="form-control" name="password" required>

            @if ($errors->has('password'))
              <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
              </span>
            @endif
          </div>
        </div>

        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
          <label class="col-md-4 control-label">Confirm Password</label>
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
          <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-primary">
              <i class="fa fa-btn fa-refresh"></i>Reset Password
            </button>
          </div>
        </div>
      </form>

    </div>

  </div>
</div>
