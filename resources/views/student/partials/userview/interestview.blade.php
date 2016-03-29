<hr>
<div class="padsmall">

  <h5>Your interest</h5>
  @if(count($interest)>0)

  @foreach ($interest as $interests)
    <div class="col-md-12 col-md-8-offset-1 well-sm ">
      <strong>  Interest : </strong>{{$interests->interest_name}}
        <form action="{{url('interest',$interests->interest_id)}}" method="POST">
          {!! csrf_field() !!}
          <button type="submit" class="btn btn-danger pull-right">
            <i class="fa fa-trash"></i> Delete
          </button>
        </form>
    </div>

  @endforeach
  @else
    <h4>Nothing added</h4>
  @endif

</div>
<hr>
