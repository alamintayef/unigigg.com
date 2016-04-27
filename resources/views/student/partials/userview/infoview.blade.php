<div class="padsmall" >


  <p>
    @if(count($infos)>0)

      @foreach ($infos as $users)
        <p>

            You Have Applied to :  {{count($joblimit)}} jobs <br>
            You Have Applied to :  {{count($oddjoblimit)}} Eccentric jobs
          <hr>
          <h6>Phone : {{$users->mobile}}</h6>
          <h6>Institute: {{$users->institute}}</h6>
          <h6>NID : {{$users->NId}}</h6>
        </p>
        <p>
        <h5>University ID :{{$users->universityId}}</h5>
        Facebook: Id:
        <a href="{{$users->facebookId}}" target="_blank">{{$users->fname}}</a><br>
      <a class="btn btn-default raised  " href="{{url('userinfo')}}"> <i class="fa fa-edit"></i>Edit Info</a></div>

          <hr>
          <form class="form-inline" action="{{url('pdf')}}" method="get">
            {!! csrf_field() !!}
            <button type="submit" class="btn btn-info raised ">
              <i class="fa fa-tasks"></i> Generate CV
            </button>

          </form>
          <hr>

      @endforeach


  @endif
        <a href="{{url('/profile',$user->name)}}"> CV</a>



  </p>

</div>
