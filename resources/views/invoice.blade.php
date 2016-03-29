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
    padding:5px;

  }

  #nav {
    h5ne-height:30px;
    background-color:#eeeeee;
    height:300px;
    width:100px;
    float:left;
    padding:5px;
  }
  body{
    padding: 50px;
  }
  #section {
    width:350px;
    float:left;
    padding:10px;
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
        <div id="invoice">
          @foreach($data as $user)
            <h2>{{$user->fname}} {{$user->lname}}</h2>
            {{$user->mobile}}<br>
            {{$user->area}}<br>
          @endforeach
          <hr>

        </div>
      </div>
    </main>





    <h3>Education</h3>
    <div   >
      @foreach($education as $edu )
        <table >
          <thead>
            <th>
              Degree
            </th>
            <th>
              Institute
            </th>
            <th>
              Passing Year
            </th>
            <th>
              Result
            </th>
          </thead>
          <tbody>


          <tr>

            <td class="center">
              {{$edu->Degree_name}}
            </td>


            <td class="center">
              {{$edu->Degree_institute}}
            </td>
            <td class="center">
              {{$edu->Degree_end_date}}
            </td>
            <td class="center">
              {{$edu->Degree_result}}
            </td>
          </tr>
          </tbody>
        </table>



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
            <strong>Description</strong>:<br>
            {{$ref->reference_description}}<br>
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
              <strong>Referred By</strong> {{$excc->excc_name}}<br>
              <strong>Description</strong>:<br>
              {{$excc->excc_description}}<br>
              <small><strong>start date :</strong></small> {{$excc->excc_start_date}} <small><strong>end date :</strong></small> {{$excc->exp_end_date}}
            @endforeach
          @endif

        </div>
  </body>




      </html>
