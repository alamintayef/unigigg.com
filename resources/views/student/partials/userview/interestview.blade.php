<hr>
<div class="padsmall">

  <h5>Your CV Link</h5>

    <div class="col-md-12 col-md-8-offset-1 well-sm ">
      <strong>  CV : </strong><a href="{{$interest->interest_name}}">{{$interest->interest_name}}</a>
        <form action="{{url('interest',$interest->interest_id)}}" method="POST">
          {!! csrf_field() !!}
          <button type="submit" class="btn btn-danger pull-right">
            <i class="fa fa-edit"></i>
          </button>
        </form>
    </div>

</div>
<hr>
