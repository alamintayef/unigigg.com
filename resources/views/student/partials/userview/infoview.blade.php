<div class="padsmall" >


  <p>
    @if(count($infos)>0)

      @foreach ($infos as $users)
        <p>

            <iframe class="pull-right" width="400" height="250" src="https://www.youtube.com/embed/{{$users->youtube}}
            " frameborder="0" allowfullscreen></iframe>'
            <hr>
            You Have Applied to :  {{count($joblimit)}} jobs
          <hr>
          <h6>Phone : {{$users->mobile}}</h6>
          <h6>Institute: {{$users->institute}}</h6>
          <h6>NID : {{$users->NId}}</h6>
        </p>
        <p>
        <h5>University ID :{{$users->universityId}}</h5>
        Facebook: Id:
        <a href="{{$users->facebookId}}" target="_blank">{{$users->fname}}</a><br>
      <a class="btn btn-primary " href="{{url('userinfo')}}"> <i class="fa fa-edit"></i>Edit Info</a></div>

          <hr>
          <form action="{{url('pdf',$users->user_id)}}" method="POST">
            {!! csrf_field() !!}
            <button type="submit" class="btn btn-info">
              <i class="fa fa-tasks"></i> Generate CV
            </button>
            <small class="textb">Pressing this button will take to print your cv. You can save it as pdf</small>
          </form>
          <hr>
      @endforeach

  @endif



  </p>

</div>
