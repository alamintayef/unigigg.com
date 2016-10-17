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
body{
  padding: 10px;
}
.supersmall{
  text-align: right;
  font-size: 8px;
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
  </style>


</head>
<body onload="window.print()" >

  <main  class="pad">
    <div id="details">
      <div id="invoice" class="right">
        @foreach($data as $user)
          <h2>{{$user->fname}} {{$user->lname}}</h2>
          <small>  {{$user->mobile}}<br>
            {{$user->area}}<br>
          @endforeach
          {{Auth::user()->email}}</small>
          <hr>

        </div>
      </div>
    </main>





    <h3>Education</h3>
    <div >
      @foreach($education as $edu )
        <strong >Degree :</strong><span class="smallpad"> {{$edu->Degree_name}}</span><strong> Institute :</strong> <span class="smallpad">{{$edu->Degree_institute}}</span><br>
        <strong >Passing Year: </strong> <span class="smallpad">{{$edu->Degree_end_date}} </span><strong> Result:</strong><span class="smallpad">{{$edu->Degree_result}}</span><br>

      @endforeach


    </div>
    <hr>

    <h3>Skills</h3>
    <div >
      @foreach($skill as $skills )
        {{$skills->skill_name}},

      @endforeach
    </div>
    <hr>
    @if(count($exps)>0)
      <h3>Experiences</h3>
      <div >
        @foreach($exps as $exp )
          <p>
            <strong>Title:</strong> {{$exp->exp_name}}<br>
            <strong>Description</strong>:<br>
            {{$exp->exp_description}}<br>
            <small><strong>start date :</strong></small> {{$exp->exp_start_date}} <small><strong>end date :</strong></small> {{$exp->exp_end_date}}
          </p>
        @endforeach

      </div>
    @endif
    <hr>
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
