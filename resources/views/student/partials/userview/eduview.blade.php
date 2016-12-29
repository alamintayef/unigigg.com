<div class=" col-md-12" style="font-size:13px;">


  <h4>Education</h4>
  @foreach ($education as $edu)
    <div class="panel panel-default">

      <div class='panel-heading'>
        <h4 class="panel-title"> Degree:    {{$edu->Degree_name}}</h4>
        <strong>Type:</strong>  {{$edu->Degree_type}}
      </div>
      <div class="panel-body">

        <strong>Institute</strong> {{$edu->Degree_institute}}
        <strong>Result:</strong>  {{$edu->Degree_result}}
        <strong> Starting Year : </strong> {{$edu->Degree_start_date}}
        <strong> Passing Year: </strong>  {{$edu->Degree_end_date}}
        <form class="pull-right" action="{{url('edupdate',$edu->id)}}" method="GET">
          {!! csrf_field() !!}
          <button type="submit" class="btn btn-sm btn-primary" >
            <i class="fa fa-edit"></i>
          </button>
        </form>
        <form class="pull-right" action="{{url('edudel',$edu->id)}}" method="POST">
          {!! csrf_field() !!}
          <button type="submit" class="btn btn-raised btn-danger btn-sm">
            <i class="fa fa-trash"></i>
          </button>
        </form>
      </div>

      <div class="panel-footer padsmall">




      </div>


    </div>



    <!-- Modal ends -->
  @endforeach
</div>
