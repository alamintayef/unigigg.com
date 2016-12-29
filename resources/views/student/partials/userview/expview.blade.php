<div class="padsmall col-md-12" >
  <h4>Experience</h4>

  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>
          Title
        </th>

        <th>
          Starting Date
        </th>
        <th>
          End Date
        </th>
        <th>
          Description
        </th>

        <tr>
        </thead>
        <tbody>
          @foreach ($experiences as $experience)
            <tr>
              <td>
                {{$experience->exp_name}}
              </td>

              <td>
                {{$experience->exp_start_date}}
              </td>
              <td>
                {{$experience->exp_end_date}}
              </td>
              <td>
                {{$experience->exp_description}}
              </td>
              <td>
                <form action="{{url('experience',$experience->id)}}" method="POST">
                  {!! csrf_field() !!}
                  <button type="submit" class="btn btn-danger ">
                    <i class="fa fa-trash"></i>
                  </button>
                </form>
              </td>
            @endforeach

          </tbody>
        </table>


      </div>
