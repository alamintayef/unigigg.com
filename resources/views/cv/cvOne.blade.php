<!DOCTYPE html>
<html>
  @if(count($info)>0)
<head>

<title>{{$info->fname}} {{$info->lname}}</title>

<meta name="viewport" content="width=device-width"/>
<meta name="description" content="Resume from unigigg.com."/>
<meta charset="UTF-8">
  <script src="//fast.eager.io/V77aiwbirP.js"></script>

  {!! Html::style('css/cvOne.css') !!}


<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>

<link href='http://fonts.googleapis.com/css?family=Rokkitt:400,700|Lato:400,300' rel='stylesheet' type='text/css'>

<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
</head>
<body id="top">
  <a href="https://www.facebook.com/sharer/sharer.php?u=www.unigigg.com/profile/{{$user->name}}" target="_blank">
  <button type="button" class="btn btn-link" name="button"><i class="fa fa-facebook"></i>Share <i class="fa fa-share"></i></button>
</a>
<div id="cv" class="instaFade">
	<div class="mainDetails">
    @if(count($image)>0)
      <div id="headshot" class="quickFade">
  		<img class="card-raised " src="{!!('/files/images/'.$image->filePath) !!}" alt="propic" height="150px" width="150px" />
  		</div>
    @endif


		<div id="name">
			<h2 class="quickFade delayTwo">{{$info->fname}} {{$info->lname}}</h2>


		</div>

		<div id="contactDetails" class="quickFade delayFour">
			<ul>
				<li><i class="fa fa-envelope"></i>: {{$user->email}}</li>
        	<li><i class="fa fa-map-marker"></i>: {{$info->area}}</li>
				<li><i class="fa fa-phone"></i>: Confidential</li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>

	<div id="mainArea" class="quickFade delayFive">
		<section>
			<article>
				<div class="sectionTitle">
					<h1>About Me</h1>
				</div>

				<div class="sectionContent">
          @if(count($about)!=0)
              {!! $about->fun_facts !!}
          @else
            <p>
              I haven't added anything Yet
            </p>
          @endif

				  </div>
			</article>
			<div class="clear"></div>
		</section>

		<section>
			<div class="sectionTitle">
				<h1>Education</h1>
			</div>
      @if(count($edu)>0)


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
        @else
          Under Construction
        @endif

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
      @if (count($skills)>0)

			<div class="sectionContent">
				<ul class="keySkills">
          @foreach($skills as $skill)
            <li><a href="{{$skill->skill_proof}}"> {{$skill->skill_name}}</a></li>
          @endforeach


				</ul>

      @else
        Under Construction
      @endif
			</div>
			<div class="clear"></div>
		</section>
    <section>
      <div class="sectionTitle">
        <h1>Extra Curricular Activities</h1>
      </div>

      <div class="sectionContent">
        <article>
          @foreach($extra as $xtra)
            <h2>{{$xtra->excc_name}}</h2>
            <p class="subDetails">{{$xtra->excc_start_date}} - {{$xtra->excc_end_date}}</p>
            <p>{{$xtra->excc_description}}</p>
          @endforeach

        </article>

      </div>
      <div class="clear"></div>
    </section>
    <section>
      <div class="sectionTitle">
        <h1>References</h1>
      </div>

      <div class="sectionContent">
        <article>
          @foreach($ref as $reference)
            <h2>{{$reference->referred_by}}</h2>
            <p class="subDetails">{{$reference->reference_description}}</p>
            <p>{{$reference->referee_number}}</p>
          @endforeach

        </article>

      </div>
      <div class="clear"></div>
    </section>




	</div>
</div>

</body>
  @else
    <p>
      Nothing Added Yet
    </p>
  @endif
</html>
