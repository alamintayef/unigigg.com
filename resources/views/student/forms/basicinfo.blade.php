
 @if(count($userinfo)>0)
          {!! Form::open(array('url' => '/userstore')) !!}
          <div class="md-col-12 panel whiteproper pad">
          <div class="row">

          <div class="col-md-6">

          <div class="form-group">


            {!! Form::label('fname', 'First Name', ['class' => 'control-label']) !!}
            {!! Form::text('fname',  $userinfo->fname , ['class' => 'form-control']) !!}
              <small class="text-danger">Required</small>
          </div>
          </div>
          <div class="col-md-6">
          <div class="form-group">
            {!! Form::label('lname', 'Last Name', ['class' => 'control-label']) !!}
            {!! Form::text('lname', $userinfo->lname, ['class' => 'form-control']) !!}
            <small class="text-danger">Required</small>
          </div>
        </div>
          <div class="col-md-6">
          <div class="form-group">
            {!! Form::label('area', 'Location:', ['class' => 'control-label']) !!}
            <input name="area" class="form-control" list="arealist" />
            <datalist id="arealist">
              @foreach($area as $areas)
                <option>{{$areas->area}}</option>
              @endforeach
            </datalist>

              <small class="text-danger">Required</small>
            </div>
          </div>
          <div class="col-md-6">
          <div class="form-group">
            {!! Form::label('post_code', 'Post Code', ['class' => 'control-label']) !!}
            {!! Form::text('post_code', $userinfo->post_code, ['class' => 'form-control']) !!}
              <small class="text-danger">Required</small>
          </div>
          </div>
          </div>
          <div class="form-group">
            {!! Form::label('other', 'Other Details (if any)', ['class' => 'control-label']) !!}
            {!! Form::text('other', $userinfo->other, ['class' => 'form-control']) !!}
            <small class="text-danger">Optional</small>
          </div>
          <div class="form-group">
            <label for="institute" class="control-label">Institute</label>
          <input name="institute" class="form-control" list="unilist" />
              <datalist id="unilist">
              @foreach($uni as $unis)

                <p value="{{$unis->university}}">{{$unis->university}}</p>

                @endforeach
              </datalist>
              <small class="text-danger">Required</small>
          </div>
          <div class="form-group">
            {!! Form::label('passing_date', 'Expected/Passing Year :', ['class' => 'control-label']) !!}

            {!! Form::date('passing_date', $userinfo->passing_date, ['class' => 'form-control','id'=>'passing_date']) !!}


              <small class="text-danger">Required</small>
          </div>
          <div class="form-group">
            {!! Form::label('mobile', 'Contact No :', ['class' => 'control-label']) !!}
            {!! Form::text('mobile', $userinfo->mobile, ['class' => 'form-control']) !!}
              <small class="text-danger">Required</small>
          </div>
          <div class="form-group">
            {!! Form::label('universityId', 'University ID:', ['class' => 'control-label']) !!}
            {!! Form::text('universityId', $userinfo->universityId, ['class' => 'form-control']) !!}
              <small class="text-danger">Required</small>
          </div>
          <div class="form-group">
            {!! Form::label('NId', 'NID:', ['class' => 'control-label']) !!}
            {!! Form::text('NId', $userinfo->NId, ['class' => 'form-control', 'placeholder'=>'17 digits']) !!}
              <small class="text-danger">Optional</small>
          </div>
          <div class="form-group">
            {!! Form::label('facebookId', 'Facebook ID:', ['class' => 'control-label']) !!}
            {!! Form::text('facebookId', $userinfo->facebookId, ['class' => 'form-control']) !!}
              <small class="text-danger">Required</small>
            <small>Please use the full link like http://www.facebook.com/yourid</small>
          </div>
          <div class="form-group">
            {!! Form::label('LinkedInId', 'LinkedIn ID:', ['class' => 'control-label']) !!}
            {!! Form::text('LinkedInId',$userinfo->LinkedInId, ['class' => 'form-control']) !!}
            <small class="text-danger">Optional</small>
          </div>




          {!! Form::submit('Add', ['class' => 'btn btn-primary btn-raised btn-sm']) !!}


          {!! Form::close() !!}


          @else

          {!! Form::open(array('url' => '/userstore')) !!}
          <div class="md-col-12 panel whiteproper pad">
          <div class="row">

          <div class="col-md-6">

          <div class="form-group">


            {!! Form::label('fname', 'First Name', ['class' => 'control-label']) !!}
            {!! Form::text('fname',  null , ['class' => 'form-control', 'required']) !!}
              <small class="text-danger">Required</small>
          </div>
          </div>
          <div class="col-md-6">
          <div class="form-group">
            {!! Form::label('lname', 'Last Name', ['class' => 'control-label']) !!}
            {!! Form::text('lname', null, ['class' => 'form-control', 'required']) !!}
            <small class="text-danger">Required</small>
          </div>
        </div>
          <div class="col-md-6">
          <div class="form-group">
            {!! Form::label('area', 'Location:', ['class' => 'control-label']) !!}
            <input name="area" class="form-control" list="arealist" />
            <datalist id="arealist">
              @foreach($area as $areas)
                <option>{{$areas->area}}</option>
              @endforeach
            </datalist>

              <small class="text-danger">Required</small>
            </div>
          </div>
          <div class="col-md-6">
          <div class="form-group">
            {!! Form::label('post_code', 'Post Code', ['class' => 'control-label']) !!}
            {!! Form::text('post_code', null, ['class' => 'form-control', 'required']) !!}
              <small class="text-danger">Required</small>
          </div>
          </div>
          </div>
          <div class="form-group">
            {!! Form::label('other', 'Other Details (if any)', ['class' => 'control-label']) !!}
            {!! Form::text('other', null, ['class' => 'form-control', ]) !!}
            <small class="text-danger">Optional</small>
          </div>
          <div class="form-group">
            <label for="institute" class="control-label">Institute</label>
          <input name="institute" class="form-control" list="unilist" />
              <datalist id="unilist">
              @foreach($uni as $unis)

                <p value="{{$unis->university}}">{{$unis->university}}</p>

                @endforeach
              </datalist>
              <small class="text-danger">Required</small>
          </div>
          <div class="form-group">
            {!! Form::label('passing_date', 'Expected/Passing Year :', ['class' => 'control-label']) !!}

            {!! Form::date('passing_date', null, ['class' => 'form-control','id'=>'passing_date', 'required']) !!}


              <small class="text-danger">Required</small>
          </div>
          <div class="form-group">
            {!! Form::label('mobile', 'Contact No :', ['class' => 'control-label', 'required']) !!}
            {!! Form::text('mobile', null, ['class' => 'form-control']) !!}
              <small class="text-danger">Required</small>
          </div>
          <div class="form-group">
            {!! Form::label('universityId', 'University ID:', ['class' => 'control-label', 'required']) !!}
            {!! Form::text('universityId', null, ['class' => 'form-control']) !!}
              <small class="text-danger">Required</small>
          </div>
          <div class="form-group">
            {!! Form::label('NId', 'NID:', ['class' => 'control-label']) !!}
            {!! Form::text('NId', null, ['class' => 'form-control', 'placeholder'=>'17 digits']) !!}
              <small class="text-danger">Optional</small>
          </div>
          <div class="form-group">
            {!! Form::label('facebookId', 'Facebook ID:', ['class' => 'control-label', 'required']) !!}
            {!! Form::text('facebookId', null, ['class' => 'form-control']) !!}
              <small class="text-danger">Required</small>
            <small>Please use the full link like http://www.facebook.com/yourid</small>
          </div>
          <div class="form-group">
            {!! Form::label('LinkedInId', 'LinkedIn ID:', ['class' => 'control-label']) !!}
            {!! Form::text('LinkedInId',null, ['class' => 'form-control']) !!}
            <small class="text-danger">Optional</small>
          </div>

          {!! Form::submit('Add', ['class' => 'btn btn-primary btn-raised btn-sm']) !!}


          {!! Form::close() !!}

  @endif
