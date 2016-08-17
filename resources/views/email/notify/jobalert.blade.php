<!DOCTYPE html>
<html lang="en">
<head>
  <style media="screen">
    body{
      font-size: 15px;
    }
  </style>
</head>

  <body>

    <p>
      Dear {{$user->name}},<br>
      A new job has been posted! <br>
      <b>Job Name : </b>{{$jobname}}<br>
      <b>Job Type : </b>{{$jobType}}<br>
      <b>Application Deadline : </b>{{$deadline}}<br>
      Please visit the link to see the job details
      www.unigigg.com/view/jobs/{{$slug}} <br>

      Please verify your profile to apply to the jobs if not yet verified <br>

      Thank you.


      Best,<br>
      Md Al Amin Sarker,<br>
      CEO/Co-Founder,Unigigg

    </p>

  </body>
</html>
