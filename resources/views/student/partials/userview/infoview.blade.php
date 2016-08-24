<div class="padsmall" >


  <p>
    @if(count($infos)>0)


        <p>

            You Have Applied to :  {{count($joblimit)}} jobs <br>
            You Have Applied to :  {{count($oddjoblimit)}} Eccentric jobs
          <hr>
          <h6>Phone : {{$infos->mobile}}</h6>
          <h6>Institute: {{$infos->institute}}</h6>
          <h6>NID : {{$infos->NId}}</h6>
        </p>
        <p>
        <h5>University ID :{{$infos->universityId}}</h5>
        Facebook: Id:
        <a href="{{$infos->facebookId}}" target="_blank">{{$infos->fname}}</a><br>
      <a class="btn btn-default raised  " href="{{url('userinfo')}}"> <i class="fa fa-edit"></i>Edit Info</a></div>

          <hr>
          <form class="form-inline" action="{{url('pdf')}}" method="get">
            {!! csrf_field() !!}
            <button type="submit" class="btn btn-info raised ">
              <i class="fa fa-tasks"></i> Generate CV
            </button>

          </form>
          <hr>

      
@else
    <p>Please add you profile information from <a href="{{url('userinfo')}}">Build profile</a> Tab</p>
  @endif
        <a href="{{url('/profile',$user->name)}}"> CV</a>
        <a href="{{url('profile/template',$user->name)}}">CV-2</a>



  </p>

</div>
