<!DOCTYPE html>
<html>
<head>
<title>{{$info->fname}} {{$info->lname}}</title>

<meta name="viewport" content="width=device-width"/>
<meta name="description" content="The Curriculum Vitae from unigigg.com."/>
<meta charset="UTF-8">
  <script src="//fast.eager.io/V77aiwbirP.js"></script>

  {!! Html::style('css/cvOne.css') !!}
	{!! Html::style('css/style.css') !!}
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>

<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body id="top">
  <a href="https://www.facebook.com/sharer/sharer.php?u=www.unigigg.com/profile/{{$user->name}}" target="_blank">
  <button type="button" name="button">Share</button>
</a>
<div id="cv" class="instaFade">
	<div class="mainDetails">
		<div id="headshot" class="quickFade">
		<img class="card-raised " src="{!!('/files/images/'.$image->filePath) !!}" alt="propic" height="150px" width="150px" />
		</div>

		<div id="name">
			<h2 class="quickFade delayTwo">{{$info->fname}} {{$info->lname}}</h2>


		</div>

		<div id="contactDetails" class="quickFade delayFour">
			<ul>
				<li><i class="fa fa-envelope"></i>: {{$user->email}}</li>
        	<li><i class="fa fa-map-marker"></i>: {{$info->area}}</li>
				<li><i class="fa fa-phone"></i>: {{$info->mobile}}</li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>

	<div id="mainArea" class="quickFade delayFive">
		<section>
			<article>
				<div class="sectionTitle">
					<h1>Personal Profile</h1>
				</div>

				<div class="sectionContent">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dolor metus, interdum at scelerisque in, porta at lacus. Maecenas dapibus luctus cursus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultricies massa et erat luctus hendrerit. Curabitur non consequat enim. Vestibulum bibendum mattis dignissim. Proin id sapien quis libero interdum porttitor.</p>
				</div>
			</article>
			<div class="clear"></div>
		</section>

		<section>
			<div class="sectionTitle">
				<h1>Education</h1>
			</div>

			<div class="sectionContent">
				@foreach($edu as $education)


				<article>
					<h2>{{$education->Degree_type}} in {{$education->Degree_name}}</h2>
					<p class="subDetails">{{$education->Degree_institute}}</p>
					<p>Start : {{$education->Degree_start_date}}  Passing : {{$education->Degree_end_date}}
						Result:{{$education->Degree_result}}
					</p>
				</article>
					@endforeach


			</div>
			<div class="clear"></div>
		</section>


		<section>
			<div class="sectionTitle">
				<h1>Work Experience</h1>
			</div>

			<div class="sectionContent">
				<article>
          @foreach($exp as $x)
            <h2>{{$x->exp_name}}</h2>
            <p class="subDetails">{{$x->exp_start_date}} - {{$x->exp_end_date}}</p>
            <p>{{$x->exp_description}}</p>
          @endforeach

				</article>

			</div>
			<div class="clear"></div>
		</section>


		<section>
			<div class="sectionTitle">
				<h1>Key Skills</h1>
			</div>

			<div class="sectionContent">
				<ul class="keySkills">
          @foreach($skills as $skill)
            <li>{{$skill->skill_name}}</li>
          @endforeach


				</ul>
			</div>
			<div class="clear"></div>
		</section>




	</div>
</div>

</body>
</html>
