<hr>
<div class="padsmall">

  <h5>Your CV Link</h5>

  @foreach ($interest as $interests)
    <div class="col-md-12 col-md-8-offset-1 well-sm ">
      <strong>  CV : </strong>{{$interests->interest_name}}
        <form action="{{url('interest',$interests->interest_id)}}" method="POST">
          {!! csrf_field() !!}
          <button type="submit" class="btn btn-danger pull-right">
            <i class="fa fa-trash"></i> Delete
          </button>
        </form>
    </div>

  @endforeach
  

</div>
<hr>
