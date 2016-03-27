<div >


  <p>
    @if(count($infos)>0)

      @foreach ($infos as $users)
        <p>

            <iframe width="400" height="250" src="https://www.youtube.com/embed/{{$users->youtube}}
            " frameborder="0" allowfullscreen></iframe>'
            <hr>

          <hr>
          <h6>Phone : {{$users->mobile}}</h6>
          <h6>Institute: {{$users->institute}}</h6>
          <h6>NID : {{$users->NId}}</h6>
        </p>
        <p>
        <h5>University ID :{{$users->universityId}}</h5>
        Facebook: Id:
        <a href="{{$users->facebookId}}" target="_blank">{{$users->fname}}</a><br>
        <div class="panel-heading"><a class="btn btn-primary " data-toggle="collapse" href="#collapseupdate"> <i class="fa fa-edit"></i>Edit Info</a></div>
        <div id="collapseupdate" class="panel-collapse collapse">
              <form  action="{{url('userupdate', $users->user_id)}}" method="POST">
                <div class="well">
                  <span class="text-danger">Every Field is required</span>
                </div>
                <div class="md-col-4">
                  @if(count($errors)>0)
                    <div class="alert alert-danger">
                      @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                      @endforeach
                    </div>
                  @endif
                  {!! csrf_field() !!}
                  <div class="form-group">
                    {!! Form::label('fname', 'First Name', ['class' => 'control-label']) !!}
                    {!! Form::text('fname', null, ['class' => 'form-control']) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('lname', 'Last Name', ['class' => 'control-label']) !!}
                    {!! Form::text('lname', null, ['class' => 'form-control']) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('area', 'Address', ['class' => 'control-label']) !!}
                    {!! Form::text('area', null, ['class' => 'form-control']) !!}
                    <span><small>Provide your living area in Dhaka</small></span>
                  </div>
                  <div class="form-group">
                    {!! Form::label('post_code', 'post_code', ['class' => 'control-label']) !!}
                    {!! Form::text('post_code', null, ['class' => 'form-control']) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('other', 'Other Details (if any)', ['class' => 'control-label']) !!}
                    {!! Form::text('other', null, ['class' => 'form-control']) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('institute', 'Institute :', ['class' => 'control-label']) !!}
                    {!! Form::text('institute', null, ['class' => 'form-control']) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('passing_date', 'Passing Year :', ['class' => 'control-label']) !!}
                    {!! Form::date('passing_date', null, ['class' => 'form-control']) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('mobile', 'Contact No :', ['class' => 'control-label']) !!}
                    {!! Form::text('mobile', null, ['class' => 'form-control']) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('universityId', 'University ID:', ['class' => 'control-label']) !!}
                    {!! Form::text('universityId', null, ['class' => 'form-control']) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('NId', 'NID:', ['class' => 'control-label']) !!}
                    {!! Form::text('NId', null, ['class' => 'form-control']) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('facebookId', 'Facebook ID:', ['class' => 'control-label']) !!}
                    {!! Form::text('facebookId', null, ['class' => 'form-control']) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('LinkedInId', 'LinkedIn ID:', ['class' => 'control-label']) !!}
                    {!! Form::text('LinkedInId', null, ['class' => 'form-control']) !!}
                  </div>
                  <div class="form-group">
                    {!! Form::label('youtube', 'Video Profile', ['class' => 'control-label']) !!}
                    {!! Form::text('youtube', null, ['class' => 'form-control']) !!}
                  </div>


                  {!! Form::submit('update', ['class' => 'btn btn-primary']) !!}
                </div>
            </form>

        </div>
          <hr>
          <form action="{{url('pdf',$users->user_id)}}" method="POST">
            {!! csrf_field() !!}
            <button type="submit" class="btn btn-info">
              <i class="fa fa-tasks"></i> Generate CV
            </button>
          </form>
          <hr>
      @endforeach

  @endif



  </p>

</div>
