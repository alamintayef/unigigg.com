<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Resume</title>
{!! Html::style('css/blue.css') !!}
<!--[if IE 7]>
<link href="css/ie7.css" rel="stylesheet" type="text/css" />
<![endif]-->
<!--[if IE 6]>
<link href="css/ie6.css" rel="stylesheet" type="text/css" />
<![endif]-->

{!! Html::script('js/jquery-1.4.2.min.js') !!}
{!! Html::script('js/jquery.tipsy.js') !!}
{!! Html::script('js/cufon.yui.js') !!}
{!! Html::script('js/scrollTo.js') !!}
{!! Html::script('js/myriad.js') !!}
{!! Html::script('js/jquery.colorbox.js') !!}
{!! Html::script('js/custom.js') !!}

<script type="text/javascript">
		Cufon.replace('h1,h2');
</script>
</head>
<body>
<!-- Begin Wrapper -->
<div id="wrapper">
  <div class="wrapper-top"></div>
  <div class="wrapper-mid">
    <!-- Begin Paper -->
    <div id="paper">
      <div class="paper-top"></div>
      <div id="paper-mid">
        <div class="entry">
          <!-- Begin Image -->
					@if(count($image)>0)
						<img class="portrait" src="{!! ('/files/images/'.$image->filePath) !!}" alt="John Smith" />
					@endif
          <!-- End Image -->
          <!-- Begin Personal Information -->
          <div class="self">
            <h1 class="name">{{$info->fname}} {{$info->lname}} <br/>
              <!--<span>Interactive Designer</span>--></h1>
            <ul>
              <li class="ad"> {{$info->area}}</li>
              <li class="mail"> {{$user->email}}</li>
              <li class="tel"> Confidential</li>

            </ul>
          </div>
          <!-- End Personal Information -->
          <!-- Begin Social --
          <div class="social">
            <ul>
              <li><a class='north' href="#" title="Download.pdf"><img src="../sysimg/icn-save.jpg" alt="Download the pdf version" /></a></li>
              <li><a class='north' href="javascript:window.print()" title="Print"><img src="sysimg/icn-print.jpg" alt="" /></a></li>
              <li><a class='north' id="contact" href="contact/index.html" title="Contact Me"><img src="sysimg/icn-contact.jpg" alt="" /></a></li>
              <li><a class='north' href="#" title="Follow me on Twitter"><img src="sysimg/icn-twitter.jpg" alt="" /></a></li>
              <li><a class='north' href="#" title="My Facebook Profile"><img src="sysimg/icn-facebook.jpg" alt="" /></a></li>
            </ul>
          </div>
          <!-- End Social -->
        </div>
        <!-- Begin 1st Row -->
        <div class="entry">
          <h2>OBJECTIVE</h2>
					@if(count($about)!=0)
							{!! $about->fun_facts !!}
					@else
						<p>
							I haven't added anything Yet
						</p>
					@endif
				</div>
        <!-- End 1st Row -->
        <!-- Begin 2nd Row -->
				@if(count($edu)>0)


        <div class="entry">
          <h2>EDUCATION</h2>
					@foreach($edu as $education)
          <div class="content">
            <h3>{{$education->Degree_start_date}} to {{$education->Degree_end_date}}</h3>
            <p>{{$education->Degree_institute}}<br />
              <em>{{$education->Degree_type}} in {{$education->Degree_name}}</em></p>
          </div>
				@endforeach

        </div>
					@endif
        <!-- End 2nd Row -->
        <!-- Begin 3rd Row -->
				@if(count($exp)>0)


        <div class="entry">
          <h2>EXPERIENCE</h2>
          <div class="content">
						@foreach($exp as $x)
							<h3>{{$x->exp_start_date}} - {{$x->exp_end_date}}</h3>
  					<p>
							{{$x->exp_name}}
              </p>

					@endforeach

          </div>

					<!--
          <div class="content">
            <h3>Jun 2007 - May 2009</h3>
            <p>Junior Web Designer <br />
              <em>Bachelor of Science in Graphic Design</em></p>
            <ul class="info">
              <li>Sed fermentum sollicitudin interdum. Etiam imperdiet sapien in dolor rhoncus a semper tortor posuere. </li>
              <li>Pellentesque at lectus in libero dapibus cursus. Sed arcu ipsum, varius at ultricies acuro, tincidunt iaculis diam.</li>
            </ul>
          </div>
				-->
        </div>
						@endif
        <!-- End 3rd Row -->
        <!-- Begin 4th Row -->
        <div class="entry">
          <h2>SKILLS</h2>
          <div class="content">
            <h3>Software Knowledge</h3>
            <ul class="skills">
							@foreach($skills as $skill)
		            <li><a href="{{$skill->skill_proof}}"> {{$skill->skill_name}}</a></li>
		          @endforeach
            </ul>
          </div>
					<!---
          <div class="content">
            <h3>Languages</h3>
            <ul class="skills">
              <li>CSS/XHTML</li>
              <li>PHP</li>
              <li>JavaScript</li>
              <li>Ruby on Rails</li>
              <li>ActionScript</li>
              <li>C++</li>
            </ul>
          </div>
				-->
        </div>
        <!-- End 4th Row -->
         <!-- Begin 5th Row --
        <div class="entry">
        <h2>WORKS</h2>
        	<ul class="works">
        		<li><a href="images/1.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="images/image.jpg" alt="" /></a></li>
        		<li><a href="images/2.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="images/image.jpg" alt="" /></a></li>
        		<li><a href="images/3.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="images/image.jpg" alt="" /></a></li>
        		<li><a href="images/1.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="images/image.jpg" alt="" /></a></li>
        		<li><a href="images/2.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="images/image.jpg" alt="" /></a></li>
        		<li><a href="images/3.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="images/image.jpg" alt="" /></a></li>
        		<li><a href="images/1.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="images/image.jpg" alt="" /></a></li>
        		<li><a href="images/1.jpg" rel="gallery" title="Lorem ipsum dolor sit amet."><img src="images/image.jpg" alt="" /></a></li>
        	</ul>
        </div>
        <!-- Begin 5th Row -->
      </div>
      <div class="clear"></div>
      <div class="paper-bottom"></div>
    </div>
    <!-- End Paper -->
  </div>
  <div class="wrapper-bottom"></div>
</div>
<div id="message"><a href="#top" id="top-link">Go to Top</a></div>
<!-- End Wrapper -->
</body>
</html>
