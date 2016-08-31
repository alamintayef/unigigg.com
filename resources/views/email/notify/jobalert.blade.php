<!DOCTYPE html>
<html lang="en">
<head>
  <style media="screen">
    body{
      font-size: 15px;
    }
  </style>
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>

  <body>
    <div class="container">


    <p>
      Dear {{$user->name}},<br>
      A job has been posted. <br>
      <b>Job Title : </b>{{$jobname}}<br>
      <b>Job Type : </b>{{$jobType}}<br>
      <b>Application Deadline : </b>{{$deadline}}<br>
      Please visit the link to see the job details <br>
      www.unigigg.com/view/jobs/{{$slug}} <br><br>

      Please verify your profile to apply to the jobs if not yet verified <br><br>

      <small>If you want to unsubscribe this notification service please sign into your account and press Unsubscribe from the menu</small><br>

      Thank you.<br>


      Best,<br>
      Md Al Amin Sarker,<br>
      CEO/Co-Founder,Unigigg

    </p>
    </div>

  </body>
</html>
