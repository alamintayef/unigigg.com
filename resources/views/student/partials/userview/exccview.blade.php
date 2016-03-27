<div >

  @foreach ($extracs as $excc)
  <h5>Extra Curricular Activities</h5>
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
              <table>
                <form action="{{url('excc',$excc->excc_id)}}" method="POST">
                  {!! csrf_field() !!}
                  <button type="submit" class="btn btn-danger ">
                    <i class="fa fa-cross"></i> Delete
                  </button>
                </form>
              </table>
            @endforeach
          </tbody>
        </table>
      </div>
