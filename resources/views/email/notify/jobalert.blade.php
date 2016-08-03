<!DOCTYPE html>
<html lang="en">

  <body>
    Dear <h4>{{ ($data['name'])}}</h4>
    <p>

      A new job has been posted with the title {{ ($data['job_name'])}} <br>
      Job Type : {{($data['job_type'])}}<br>
      Salary : {{($data['job_salary'])}}<br>
      Application Deadline : {{($data['job_last_date_application'])}}


      Please click the link to see the job details <a href="http://unigigg.dev/view/jobs/{{($data['title'])}}"></a>
      Thank you for using unigigg <br>

      Best,<br>
      tayef,<br>
      CEO/Co-Founder, <em>unigigg</em>

    </p>

  </body>
</html>
