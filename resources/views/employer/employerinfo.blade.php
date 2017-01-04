@extends('layouts.app')

@section('content')
  <div class="container padtop">
    <div class="row">
      @include('layouts.emmenu')
      <div class="col-md-8 ">
        <div class="panel whiteproper pad">
          <h4 class="textb">Build Company Profile</h4>

          <h2 class="textb">Basic information</h2>
        </div>

        @if(count($eminfos)>0)


        <div class="panel whiteproper pad">
          {!! Form::open(array('url' => '/employerinfo')) !!}
          @if($errors->any())
            <div class="alert alert-danger">
              @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
              @endforeach
            </div>
          @endif

          <div class="form-group">
            {!! Form::label('company_name', 'Company Name:') !!}
            {!! Form::text('company_name', $eminfos->company_name, ['class'=>'form-control']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('company_phone', 'Company Contact Number:') !!}
            {!! Form::text('company_phone', $eminfos->company_phone, ['class'=>'form-control']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('company_email', 'Company Email:') !!}
            {!! Form::email('company_email', $eminfos->company_email, ['class'=>'form-control']) !!}
          </div>
          <div class="form-group">
            {!! Form::label('company_address', 'Company Address:') !!}
            {!! Form::textarea('company_address', $eminfos->company_address, ['class'=>'form-control', 'rows'=>2]) !!}
          </div>

          <div class="form-group">
            <label for="company_type">Company Type</label>
            <select class="form-control" id="select" name="company_type">
              <option value="StartUp">StartUp</option>
              <option value="SMB">SMB</option>
              <option value="MNC">MNC</option>
              <option value="NGO">NGO</option>
              <option value="Govt">Govt</option>
            </select>
          </div>
          <div class="form-group">
            {!! Form::label('company_size', 'Size:') !!}
            {!! Form::text('company_size', $eminfos->company_size, ['class'=>'form-control'] ) !!}
          </div>

          <div class="form-group">
            {!! Form::label('company_description', 'Description:') !!}
            {!! Form::textarea('company_description', $eminfos->company_description, ['class'=>'form-control', 'rows'=>2] ) !!}
          </div>


          <div class="form-group">
            {!! Form::submit('Update', array( 'class'=>'btn btn-default employer_post' )) !!}
            <i id='loading' class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
          </div>


          {!! Form::close() !!}
        </div>
        @else
          <div class="panel whiteproper pad">
            {!! Form::open(array('url' => '/employerinfo','method'=>'post', 'id'=>'eminfo')) !!}
            @if($errors->any())
              <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                  <p>{{ $error }}</p>
                @endforeach
              </div>
            @endif

            <div class="form-group">
              {!! Form::label('company_name', 'Company Name:') !!}
              {!! Form::text('company_name', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('company_phone', 'Company Contact Number:') !!}
              {!! Form::text('company_phone', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('company_email', 'Company Email:') !!}
              {!! Form::email('company_email', null, ['class'=>'form-control']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('company_address', 'Company Address:') !!}
              {!! Form::textarea('company_address', null, ['class'=>'form-control', 'rows'=>2]) !!}
            </div>

            <div class="form-group">
              <label for="company_type">Company Type</label>
              <select class="form-control" id="select" name="company_type">
                <option value="StartUp">StartUp</option>
                <option value="SMB">SMB</option>
                <option value="MNC">MNC</option>
                <option value="NGO">NGO</option>
                <option value="Govt">Govt</option>
              </select>
            </div>
            <div class="form-group">
              {!! Form::label('company_size', 'Size:') !!}
              {!! Form::text('company_size', null, ['class'=>'form-control'] ) !!}
            </div>

            <div class="form-group">
              {!! Form::label('company_description', 'Description:') !!}
              {!! Form::textarea('company_description', null, ['class'=>'form-control', 'rows'=>2] ) !!}
            </div>


            <div class="form-group">

              {!! Form::submit('Save', array( 'class'=>'btn btn-success  employer_post' )) !!}
              <i id='loading' class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
            </div>


            {!! Form::close() !!}
            </div>
          @endif

          @include('student.forms.image')

          <script type="text/javascript">
            $("#loading").hide();
          </script>
          <script type="text/javascript">

          $(".employer_post").click(function (e) {
            $("#loading").show();
          $.ajaxSetup({
              headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
              }
            })
            e.preventDefault();
          $.ajax({
              url: '/employerinfo',
              data: {
                '_token': $('input[name=_token]').val(),
                'company_name':$('input[name=company_name]').val(),
                'company_phone':$('input[name=company_phone]').val(),
                'company_email':$('input[name=company_email]').val(),
                'company_address':$('textarea[name=company_address]').val(),
                'company_type':$('select[name=company_type]').val(),
                'company_size':$('input[name=company_size]').val(),
                'company_description':$('textarea[name=company_description]').val(),

              },
              type: 'POST',
              datatype: 'JSON',
              success: function (name) {
                $("#loading").hide();
                alertify.success("Added Successfully");
                //$('#list').append('<li><strong>' +  name  +'</strong></li>')
                //document.getElementById('eminfo').reset();

            },
            error: function (data) {
              console.log('Error:', data);
            }
          });
          });
          </script>



      </div>
    </div>
  </div>


@endsection
