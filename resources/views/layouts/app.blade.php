<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <meta property="og:image" content="https://s31.postimg.org/6hs3bs7m3/13413676_828901833906356_2952480689422237510_n.png"/>
  <meta name="name" content="First Online Youth Employment Platform in Bangladesh">
  <meta name="jobs" content="Find Jobs, Tuitions , Internships">
  <meta http-equiv="Page-Enter" content="revealTrans(Duration=2.0,Transition=12)">
  <title>Internships & Jobs for Young Talents</title>
  <!-- Fonts--->

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway" />
  <link href='https://fonts.googleapis.com/css?family=Coming+Soon' rel='stylesheet' type='text/css'>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css" media="screen" title="no title" charset="utf-8">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css" media="screen" title="no title" charset="utf-8">
  <!-- jqurey -->
   <!--js -->
  <script src="https://cdn.jsdelivr.net/jquery.smoothstate/0.7.2/jquery.smoothState.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.1/typed.min.js" type="text/javascript"></script>

  <script src="//cdn.jsdelivr.net/webshim/1.14.5/polyfiller.js"></script>
  <script>
      webshims.setOptions('forms-ext', {types: 'date'});
  webshims.polyfill('forms forms-ext');
  </script>


  {!! Html::script('js/sweetalert.min.js') !!}
  {!! Html::script('js/prism.js') !!}
  {!! Html::script('js/index.js') !!}
  {!! Html::script('js/awesomplete.js') !!}


  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="//cdn.ckeditor.com/4.5.8/standard/ckeditor.js"></script>
  <!--- Css -->
  {!! Html::style('css/rotating-card.css') !!}
  {!! Html::style('css/paper.css') !!}
  {!! Html::style('css/style.css') !!}
  {!! Html::style('css/sweetalert.css') !!}
  {!! Html::style('css/prism.css') !!}
  {!! Html::style('css/awesomplete.css') !!}

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.1/animate.min.css" media="screen" title="no title" charset="utf-8">
  <script src="https://cdn.jsdelivr.net/scrollreveal.js/3.1.4/scrollreveal.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.6/paper/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
  {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
  <script type="text/javascript">
  $(function () {
    $('a[href="#search"]').on('click', function(event) {
        event.preventDefault();
        $('#search').addClass('open');
        $('#search > form > input[type="search"]').focus();
    });

    $('#search, #search button.close').on('click keyup', function(event) {
        if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
            $(this).removeClass('open');
        }
    });

});

  </script>

  <style>
  body {
    font-family: 'Raleway', sans-serif;
    background-color: 	#f7f7f7;
    font-size: 13px;
    margin-top: 50px;
}
.padtop{
  padding-top: 30px;
}

  .font-cor{
    font-family: 'Raleway', cursive;
    font-size: 16px;
  }
  .font-corb{
    font-family: 'Coming Soon', cursive;
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
  .transparentbg
  {
    background-color: rgba(0, 0, 0, 0.7);;
  }


  </style>

  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script src="//load.sumome.com/" data-sumo-site-id="79713ef64a547e6957b04c95a8e49c51d903a0a06c631de8bebd3aaa78b44098" async="async"></script>

</head>
<body id="app-layout">

  @if(Auth::guest())

    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
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
              <li><a href="#" class="hvr-underline-from-center">Jobs</a></li>
              <li class="btn-change hvr-underline-from-center"><a href="{{ url('/recruiter') }}">Recruiter Site</a></li>

              <li class="show-on-hover">
                <a  href="#" class="dropdown-toggle text-primary hvr-underline-from-center" data-toggle="dropdown" role="button" aria-expanded="false"  aria-haspopup="true">
                  <i class="fa fa-btn fa-lightbulb-o"></i> Resources <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu" >
                  <li><a href="{{ url('blogs') }}"><i class="fa fa-btn fa-paperclip hvr-shutter-out-horizontal"></i>Blog</a></li>
                  <li><a href="{{ url('competitions') }}"><i class="fa fa-btn fa-rocket hvr-shutter-out-horizontal"></i>Competitions</a></li>
                  <li><a href="{{ url('faqs') }}"><i class="fa fa-btn fa-question-circle hvr-shutter-out-horizontal"></i>FAQs</a></li>
                  <li><a href="{{ url('events') }}"><i class="fa fa-btn fa-sitemap hvr-shutter-out-horizontal"></i>Tutorials</a></li>
                  <li><a href="{{ url('trainings') }}"><i class="fa fa-btn fa-tablet hvr-shutter-out-horizontal"></i>Training</a></li>
                </ul>
              </li>
              <li class="show-on-hover">
                <a  href="#" class="dropdown-toggle  hvr-underline-from-center" data-toggle="dropdown" role="button" aria-expanded="false">
                  <i class="fa fa-btn fa-sign-up"></i> Sign Up <span class="caret"></span>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="{{ url('/register') }}" class="hvr-shutter-out-horizontal"><i class="fa fa-btn fa-user"></i>Talent</a></li>
                  <li><a href="{{ url('employer/register') }}" class="hvr-shutter-out-horizontal"><i class="fa fa-btn fa-users"></i>Employer</a></li>
                </ul>
              </li>
            </ul>

            <li><a href="{{ url('/login') }}" class="hvr-underline-from-center"><i class="fa fa-sign-in"></i> Sign in</a></li>

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
            <i class="fa fa-graduation-cap text-primary"></i>unigigg<sub><small>alpha</small></sub>
          </a>

        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
          <!-- Left Side Of Navbar -->
          <ul class="nav navbar-nav">
            <li>
            <a class=" text-primary" href="{{ url('/home') }}" >
              <i class="fa fa-home "></i> Dashboard
            </a>
            </li>
          </ul>





          <!-- Right Side Of Navbar -->
          <ul class="nav navbar-nav navbar-right">
            <!-- Authentication Links -->


            <ul class="nav navbar-nav">
              @if(Auth::user()->type===1)

                <li>
                  <a  href="#" class="dropdown-toggle  text-primary" data-toggle="dropdown" role="button" aria-expanded="false">
                    <i class="fa fa-btn fa-lightbulb-o"></i> Resources <span class="caret"></span>
                  </a>
                  <ul class="dropdown-menu " role="menu">

                    <li><a href="{{ url('blogs') }}"><i class="fa fa-btn fa-paperclip animsition-link"></i>Blog</a></li>
                    <li><a href="{{ url('coming/soon') }}"><i class="fa fa-btn fa-rocket animsition-link"></i>Competitions</a></li>
                    <li><a href="{{ url('faqs') }}"><i class="fa fa-btn fa-question-circle animsition-link"></i>FAQs</a></li>
                    <li><a href="{{ url('coming/soon') }}"><i class="fa fa-btn fa-sitemap animsition-link"></i>Tutorials</a></li>
                    <li><a href="{{ url('coming/soon') }}"><i class="fa fa-btn fa-tablet animsition-link"></i>Training</a></li>
                  </ul>
                </li>
              @endif


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

    <div id="search">
        <button type="button" class="close textw">×</button>
        <form role="form" method="GET" action="{{ url('/search/people') }}">
              {!! csrf_field() !!}
            <input type="search" name="search" value="" placeholder="type skill(s) here" />
            <button type="submit" class="btn btn-primary" >Find Me Jobs</button>

            <p>
              Search People
            </p>
        </form>
    </div>
    <script>
function myFunction() {
     swal("We are working on It!", "Thank you for trying out :D")
}
</script>

    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
  </body>
  </html>
