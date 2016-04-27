<div class="padsmall col-md-12" style="font-size:13px;">


  <h5>Education</h5>
  @foreach ($education as $edu)
    <div class="panel panel-default">

      <div class='panel-heading'>
        <h4 class="panel-title"> Degree:    {{$edu->Degree_name}}</h4>
        <strong>Type:</strong>  {{$edu->Degree_type}}
        </div>
        <div class="panel-body">
        <strong>Institute</strong> {{$edu->Degree_institute}} <br>
        <strong>Results</strong>  {{$edu->Degree_result}}<br>
        <strong> Start Date: </strong> {{$edu->Degree_start_date}}<br>
        <strong> Passing Date: </strong>  {{$edu->Degree_end_date}}
        </div>

        <div class="panel-footer">


          <form class="pull-left" action="{{url('edupdate',$edu->id)}}" method="GET">
            {!! csrf_field() !!}
          <button type="submit" class="btn btn-raised btn-sm btn-primary" >
            <i class="fa fa-edit"></i>  Edit
          </button>
        </form>
          <form class="pull-right" action="{{url('edudel',$edu->id)}}" method="POST">
            {!! csrf_field() !!}
            <button type="submit" class="btn btn-raised btn-danger btn-sm">
              <i class="fa fa-trash"></i> Delete
            </button>
          </form>

        </div>


  </div>



    <!-- Modal ends -->
  @endforeach
</div>
