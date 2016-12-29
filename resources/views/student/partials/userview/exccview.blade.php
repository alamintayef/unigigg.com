<div class="padsmall col-md-12" >
  <h4>Extra Curricular Activities</h4>



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
        <th>Delete</th>

        <tr>
        </thead>
        @foreach ($extracs as $excc)
        <tbody>

            <tr>
              <td>
                {{$excc->excc_name}}
              </td>

              <td>
                {{$excc->excc_start_date}}
              </td>
              <td>
                {{$excc->excc_end_date}}
              </td>
              <td>
                {{$excc->excc_description}}
              </td>
              <td>
                <form action="{{url('excc',$excc->id)}}" method="POST">
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
