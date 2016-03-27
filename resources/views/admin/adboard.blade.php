
<div class="container">
  <div class="row">
    <h3>Welcome <strong class="primary">{{ Auth::user()->name }}
    </strong> Super admin</h3>
  </div>
  <div class="col-sm-4 pull-letf">
    <div class="panel">
      <div class="panel-heading">
        Users
      </div>
      <div class="panel-body">
        <h4><a href="admin">User board</a> <br>Total Users :  {{count($allusers)}}</h4>
      </div>

    </div>
  </div>
  <div class="col-sm-4 center">
    <div class="panel">
      <div class="panel-heading">
        Jobs
      </div>
      <div class="panel-body">
        <h4><br>Total Jobs : {{count($allJobs)}}</h4>
      </div>

    </div>
    </div>

    <div class="col-sm-4 pull-right">
      <div class="panel">
        <div class="panel-heading">
           Eccnetric Jobs
        </div>
        <div class="panel-body">
          <h4><br>Total Eccentric Jobs : {{count($allOddJobs)}}</h4>
        </div>

      </div>
  </div>



</div>
</div>
