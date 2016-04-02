<div class="padsmall col-md-12" >
  <h5>Extra Curricular Activities</h5>
  @if(count($extracs)>0)
  @foreach ($extracs as $excc)

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
                <form action="{{url('excc',$excc->extra_id)}}" method="POST">
                  {!! csrf_field() !!}
                  <button type="submit" class="btn btn-danger ">
                    <i class="fa fa-cross"></i> Delete
                  </button>
                </form>
              </table>
            @endforeach
          @else
            <h4>Nothing added</h4>
          @endif
          </tbody>
        </table>
      </div>
