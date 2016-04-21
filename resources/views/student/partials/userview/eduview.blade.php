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



          <button type="submit" class="btn btn-raised btn-sm btn-primary" data-toggle="modal" data-target="#myModal">
            <i class="fa fa-edit"></i>  Edit
          </button>
          <form class="pull-right" action="{{url('edudel',$edu->id)}}" method="POST">
            {!! csrf_field() !!}
            <button type="submit" class="btn btn-raised btn-danger btn-sm">
              <i class="fa fa-trash"></i> Delete
            </button>
          </form>

        </div>







  </div>



    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Update Information</h4>
          </div>
          <div class="modal-body">
            @include('student.partials.update.eduview')
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

          </div>
        </div>
      </div>
    </div>
    <!-- Modal ends -->
  @endforeach
</div>
