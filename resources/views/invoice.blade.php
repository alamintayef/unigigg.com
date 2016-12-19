<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.2.61/jspdf.min.js"></script>






</script>
<title>CV</title>
<style>
#header {
  background-color:black;
  color:white;
  text-ah5gn:center;



}

#nav {
  h5ne-height:20px;
  background-color:#eeeeee;
  height:300px;
  width:100px;
  float:left;
  padding:5px;
}
.right{
  text-align: right;
}
html{
    background: #ededed;
}
body{
  padding: 3px;

}
.supersmall{
  text-align: right;
  font-size: 8px;
}
.small{
  text-align: right;
  font-size: 18px;
}
#section {
  width:350px;
  float:left;
  padding:10px;
}
.smallpad{
  padding: 3px;
}
#footer {
  background-color:black;
  color:white;
  clear:both;
  text-ah5gn:center;
  padding:5px;
}
td {
  width:180px;
  font:12pt arial;}

  td.leftAlign {text-align:left;}
  td.rightAlign {text-align:right;}
  td.center {text-align:center;}
  td.justify {text-align:justify;}

ul.skills {
  	margin:0;
  	padding:0;
  	float:right;
  	width:500px;
  	margin-left:40px;
  	margin-top:-6px;
  	list-style-type: none;

  }

ul.skills li {
  	margin:0;
  	padding:0;
  	float:left;
  	width:156px;

  	background-repeat: no-repeat;
  	padding-left:10px;
  	background-position: 0 .5em;
  	margin-top:6px;
  }
  div.content {
  	clear: both;
  	padding:0;
  	margin:0;
  	overflow: hidden;
  	display:block;
  	padding-top:32px;
  }
  section {
  	border-top: 1px solid #dedede;
  	padding: 10px 0 0;
  }

  section:first-child {
  	border-top: 0;
  }
  .clear {clear: both;}

  section:last-child {
  	padding: 20px 0 10px;
  }

  .sectionTitle {
  	float: left;
  	width: 25%;
  }

  .sectionContent {
  	float: right;
  	width: 72.5%;
  }

  .sectionTitle h1 {
  	font-family: 'Rokkitt', Helvetica, Arial, sans-serif;

  	font-size: 1.2em;
  	color: #cf8a05;
  }

  .sectionContent h2 {
  	font-family: 'Rokkitt', Helvetica, Arial, sans-serif;
  	font-size: 1.5em;
  	margin-bottom: -2px;
  }


.menu ul { padding:0; margin:0; list-style:none; border:0;}
.menu ul li {  margin-right:50px; padding-right:50px; padding-bottom: 20px; border:0;display: inline;float: left;}

  </style>


</head>
<body onload="window.print()" >

  <main class="pad">
    <div id="details">
      <div id="invoice" class="right">
        @foreach($data as $user)
          <h2>{{$user->fname}} {{$user->lname}}</h2>
          <small class="small">  {{$user->mobile}}<br>
            {{$user->area}}<br>
          @endforeach
          {{Auth::user()->email}}</small>
          <hr>

        </div>
      </div>
    </main>
    <section>
      <div class="sectionTitle">
        <h1>Key Skills</h1>
      </div>
      @if (count($skill)>0)

      <div class='menu'>
        <ul >
          @foreach($skill as $skills)
            <li>{{$skills->skill_name}}</li>
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
        <h1>Education</h1>
      </div>
    <div>
      @foreach($education as $edu )
        <strong >Degree :</strong><span class="smallpad"> {{$edu->Degree_name}}</span><strong> Institute :</strong> <span class="smallpad">{{$edu->Degree_institute}}</span><br>
        <strong >Passing Year: </strong> <span class="smallpad">{{$edu->Degree_end_date}} </span><strong> Result:</strong><span class="smallpad">{{$edu->Degree_result}}</span><br>

      @endforeach

    </div>
    <section>
    @if(count($exps)>0)
      <section>
        <div class="sectionTitle">
          <h1>Experience</h1>
        </div>
      <div >
        @foreach($exps as $exp )
          <p>
            {{$exp->exp_name}}<br>


            <small><strong>start date :</strong></small> {{$exp->exp_start_date}} <small><strong>end date :</strong></small> {{$exp->exp_end_date}}
          </p>
        @endforeach

      </div>
    </section>

    @endif

    @if(count($refs)>0)
      <h3>References</h3>
      <div >
        @foreach($refs as $ref )
          <p>
            <strong>Referred By</strong> {{$ref->referred_by}}<br>

            <small><strong>Contact : </strong>{{$ref->referee_number}}</small>  </p>
          @endforeach
        @endif
      </div>
      <hr>
      @if(count($extras)>0)
        <h3>Extra Curricular</h3>
        <div >
          @foreach($extras as $excc )
            <p>
              <strong> {{$excc->excc_name}}</strong><br>
              <strong>Description</strong>:<br>
              {{$excc->excc_description}}<br>
              <small><strong>start date :</strong></small> {{$excc->excc_start_date}} <small><strong>end date :</strong></small> {{$excc->exp_end_date}}
            @endforeach
          @endif
          <div class="supersmall">
            <small>Gerenated by unigigg.com</small>
          </div>

        </div>
</body>




</html>
