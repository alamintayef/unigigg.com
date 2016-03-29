<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="name" content="First Online Youth Employment Platform in Bangladesh">
    <meta http-equiv="Page-Enter" content="revealTrans(Duration=2.0,Transition=12)">
    <title>unigigg | Get Empowered | Get Hired</title>

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Raleway" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Styles -->
    <link href="https://bootswatch.com/paper/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link href="{!! asset('css/sweetalert.css') !!}" media="all" rel="stylesheet" type="text/css" />
    <style>
        body {
            font-family: 'Raleway';
            background-color: 	#f7f7f7;
            font-size: 14px;
            padding-top: 100px;

        }
        .nav
        {
          font-size: 15px;
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
</head>
<body id="app-layout">
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
                @if(Auth::guest())

                  <a class="navbar-brand text-primary" href="{{ url('/') }}" >
                  <i class="fa fa-graduation-cap text-primary"></i>  unigigg <sub>alpha</sub>
                </a>

              @else

                <a class="navbar-brand text-primary" href="{{ url('/') }}" >
                  <i class="fa fa-graduation-cap text-primary"></i>  unigigg<sub><small>alpha</small></sub>
                </a>


              @endif


            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <a class="navbar-brand text-primary" href="{{ url('/home') }}" >
                  <i class="fa fa-home "></i>
                </a>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())

                      <ul class="nav navbar-nav">
                          <li ><a href="{{ url('/jobs') }}">Post A Job <sub><small>it's free</small></sub></a></li>
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


                        <!--
                        <li><a href="{{ url('/register') }}">Register</a></li>

                        <li><a href="{{ url('employer/register') }}">Employer Register</a></li>
                      -->
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              <i class="fa fa-btn fa-user"></i>  {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Sign Out</a></li>
                                @if(Auth::user()->type===1)
                                  <li><a href="{{ url('/payment') }}"><i class="fa fa-btn fa-money"></i>Payment</a></li>
                                @endif

                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')



    <!-- JavaScripts -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{!! asset('js/stellar.js') !!}"></script>

    </script>
    <script src="https://cdn.jsdelivr.net/jquery.stellar/0.6.2/jquery.stellar.min.js">

    </script>

    </script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
  </body>
</html>
