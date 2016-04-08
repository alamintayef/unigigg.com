


          {!! Form::open(array('url' => '/userstore')) !!}
          <div class="md-col-8 panel whiteproper pad">
            @foreach($userinfo as $info)


          <div class="form-group">
            {!! Form::label('fname', 'First Name', ['class' => 'control-label']) !!}
            {!! Form::text('fname', "$info->fname", ['class' => 'form-control', 'placeholder'=>'First Name']) !!}
              <small class="text-danger">Required</small>
          </div>

          <div class="form-group">
            {!! Form::label('lname', 'Last Name', ['class' => 'control-label']) !!}
            {!! Form::text('lname', "$info->lname", ['class' => 'form-control']) !!}
            <small class="text-danger">Required</small>
          </div>
          <div class="form-group">
            {!! Form::label('area', 'Address', ['class' => 'control-label']) !!}
            {!! Form::text('area', "$info->area", ['class' => 'form-control']) !!}
            <span><small>Provide your living area in Dhaka</small></span>
              <small class="text-danger">Required</small>
          </div>
          <div class="form-group">
            {!! Form::label('post_code', 'Post Code', ['class' => 'control-label']) !!}
            {!! Form::text('post_code', "$info->post_code", ['class' => 'form-control']) !!}
              <small class="text-danger">Required</small>
          </div>
          <div class="form-group">
            {!! Form::label('other', 'Other Details (if any)', ['class' => 'control-label']) !!}
            {!! Form::text('other', "$info->other", ['class' => 'form-control']) !!}
            <small class="text-danger">Optional</small>
          </div>
          <div class="form-group">
            <label for="institute" class="control-label">Institute</label>
            <select class="form-control" name="institute" id="select">
              @foreach($uni as $unis)

                <option value="{{$unis->university}}">{{$unis->university}}</option>

                @endforeach
            </select>
              <small class="text-danger">Required</small>
          </div>
          <div class="form-group">
            {!! Form::label('passing_date', 'Passing Year :', ['class' => 'control-label']) !!}
            {!! Form::date('passing_date', "$info->passing_date", ['class' => 'form-control']) !!}
              <small class="text-danger">Required</small>
          </div>
          <div class="form-group">
            {!! Form::label('mobile', 'Contact No :', ['class' => 'control-label']) !!}
            {!! Form::text('mobile', "$info->mobile", ['class' => 'form-control']) !!}
              <small class="text-danger">Required</small>
          </div>
          <div class="form-group">
            {!! Form::label('universityId', 'University ID:', ['class' => 'control-label']) !!}
            {!! Form::text('universityId', "$info->universityId", ['class' => 'form-control']) !!}
              <small class="text-danger">Required</small>
          </div>
          <div class="form-group">
            {!! Form::label('NId', 'NID:', ['class' => 'control-label']) !!}
            {!! Form::text('NId', "$info->NId", ['class' => 'form-control', 'placeholder'=>'17 digits']) !!}
              <small class="text-danger">Optional</small>
          </div>
          <div class="form-group">
            {!! Form::label('facebookId', 'Facebook ID:', ['class' => 'control-label']) !!}
            {!! Form::text('facebookId', "$info->facebookId", ['class' => 'form-control']) !!}
              <small class="text-danger">Required</small>
            <small>Please use the full link like http://ww.facebook.com/yourid</small>
          </div>
          <div class="form-group">
            {!! Form::label('LinkedInId', 'LinkedIn ID:', ['class' => 'control-label']) !!}
            {!! Form::text('LinkedInId',"$info->LinkedInId", ['class' => 'form-control']) !!}
            <small class="text-danger">Optional</small>
          </div>

          @endforeach


          {!! Form::submit('Add', ['class' => 'btn btn-primary']) !!}

          {!! Form::close() !!}

        </div>
