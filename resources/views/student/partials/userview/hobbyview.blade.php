<!-- Hobbies-->
<div >

  @if(count($hobbies)>0)
  <h4>Your Hobbies</h4>

  @foreach ($hobbies as $hobby)
    <p>
      <table class="table table-striped">
        <thead>
          <th>
            Hobby
          </th>
          <th>
            Things you have done regarding your hobby
          </th>
        </thead>
        <tbody>
          <tr>
            <td>
              {{$hobby->hobbies_name}}
            </td>
            <td>
              {{$hobby->hobbies_related_work}}
            </td>
            <td>
              <form action="{{url('hobby',$hobby->hobbies_id)}}" method="POST">
                {!! csrf_field() !!}
                <button type="submit" class="btn btn-danger ">
                  <i class="fa fa-cross"></i> Delete
                </button>
              </form>

            </td>
          </tr>
        </tbody>
      </table>
    </p>

  @endforeach
@else
  <h4>Nothing added</h4>
@endif

</div>
