<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta name="name" content="First Online Youth Employment Platform in Bangladesh">
  <meta http-equiv="Page-Enter" content="revealTrans(Duration=2.0,Transition=12)">
  <title>unigigg | Get Empowered | Get Hired | Get Recognized</title>

  <!-- Fonts--->

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway" />

  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Courier">
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css" media="screen" title="no title" charset="utf-8">

  <!-- jqurey -->
  <script src="https://cdn.jsdelivr.net/jquery.smoothstate/0.7.2/jquery.smoothState.min.js"></script>




  <!--js -->

  {!! Html::script('js/sweetalert.min.js') !!}
  {!! Html::script('js/prism.js') !!}
  {!! Html::script('js/index.js') !!}
  {!! Html::script('js/parsley.min.js') !!}
  {!! Html::script('js/awesomplete.js') !!}
  {!! Html::script('js/jquery.parallaxer.js') !!}
  {!! Html::script('js/mat/bootstrap-datepicker.js') !!}
  <!--- Css -->
  {!! Html::style('css/rotating-card.css') !!}
  {!! Html::style('css/paper.css') !!}
  {!! Html::style('css/style.css') !!}

  {!! Html::style('css/sweetalert.css') !!}
  {!! Html::style('css/prism.css') !!}
  {!! Html::style('css/awesomplete.css') !!}
  {!! Html::style('css/jquery.parallaxer.css') !!}

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.6/paper/bootstrap.min.css" media="screen" title="no title" charset="utf-8">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
  {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}

  <style>
  body {
    font-family: 'Raleway', sans-serif;
    background-color: 	#f7f7f7;
    font-size: 13px;
    padding-top: 100px;

  }
  .nav
  {
    font-size: 15px;
  }
  .ssmal{
    font-size: 10px;
  }
  .center{
    text-align:center;;
  }
  .blue
  {
    background-color: #3b5998;
  }
  .white{
    background-color: #f7f7f7;
  }
  .whiteproper{
    background-color: #fff;
  }
  .textw
  {
    color:white;
  }
  .pad{
    padding:50px;
  }
  .padsmall{
    padding:20px;
  }
  .pb{
    padding-bottom: 100px;
  }

  .fa-btn {
    margin-right: 6px;
  }
  .ft{
    font-size: 14px;
  }
  .textb{
    color:#3b5998;
  }
  .student{
    background-image: url(http://cdn1.theodysseyonline.com/files/2016/01/23/635891727862807756463608822_inspiration.jpg);
  }

  </style>

  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

</head>
<body id="app-layout">
  @if(Auth::guest())
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">

          <!-- Collapsed Hamburger -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- Branding Image -->


          <a class="navbar-brand text-primary" href="{{ url('/') }}" >
            <i class="fa fa-graduation-cap text-primary "></i>  unigigg<sub>alpha</sub>
          </a>




        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
          <!-- Left Side Of Navbar -->



          <!-- Right Side Of Navbar -->
          <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->


            <ul class="nav navbar-nav">
              <li ><a  class="btn btn-link"  data-toggle="modal" data-target="#myModal"><i class="fa fa-phone-square"></i> Post A Job <sub><small>with a call</small></sub></a></li>
              <li ><a href="{{ url('/recruiter') }}">Recruiter</a></li>
              <li>
                <a  href="#" class="dropdown-toggle  text-primary" data-toggle="dropdown" role="button" aria-expanded="false">
                  <i class="fa fa-btn fa-sign-up"></i> Sign Up <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="{{ url('/register') }}"><i class="fa fa-btn fa-user"></i>Talent</a></li>
                  <li><a href="{{ url('employer/register') }}"><i class="fa fa-btn fa-users"></i>Employer</a></li>
                </ul>
              </li>
            </ul>
            <li class="divider"></li>
            <li><a href="{{ url('/login') }}"> | <i class="fa fa-sign-in"></i> Sign in</a></li>

          </ul>
        </div>
      </div>
    </nav>
  @else
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">

          <!-- Collapsed Hamburger -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- Branding Image -->
          <a class="navbar-brand text-primary" href="{{ url('/') }}" >
            <i class="fa fa-graduation-cap text-primary"></i>  unigigg<sub><small>alpha</small></sub>
          </a>

        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
          <!-- Left Side Of Navbar -->

          <a class="navbar-brand text-primary" href="{{ url('/home') }}" >
            <i class="fa fa-home "></i>
          </a>




          <!-- Right Side Of Navbar -->
          <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->


            <ul class="nav navbar-nav">

              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                  <i class="fa fa-btn fa-user"></i>  {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                  <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Sign Out</a></li>


                </ul>
              </li>

            </ul>
          </div>
        </div>
      </nav>
    @endif

    @yield('content')

    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title" id="">Call Us To Post a Job</h4>
          </div>
          <div class="modal-body">
            <h5>Call us on : 01987847548</h5>
            <p>
              Just call us, tell job details and we'll let you know within 48 hours
              You can Also SMS us. We'll call you back.
            </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

          </div>
        </div>
      </div>
    </div>

    <!-- JavaScripts -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <script src="https://cdn.jsdelivr.net/jquery.stellar/0.6.2/jquery.stellar.min.js"></script>
    <script src="//fast.eager.io/V77aiwbirP.js"></script>



    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
  </body>
  </html>
