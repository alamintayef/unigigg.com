@extends('layouts.app')

@section('content')

  <div class="container padtop" id="about">
    <div class="row">
      @include('layouts.menu')
      <div class="col-md-7">

        <ul class="nav nav-pills panel whiteproper">
          <li ><a href="{{url('userinfo')}}">Basic Information</a></li>
          <li ><a href="{{url('image')}}">Profile Pic</a></li>
          <li ><a href="{{url('edu')}}">Education</a></li>
          <li ><a href="{{url('skill')}}">Skills</a></li>
          <li><a href="{{url('experience')}}">Experience</a></li>
          <li><a href="{{url('refs')}}">Reference</a></li>
          <li><a href="{{url('excc')}}">Extra-Curricular</a></li>
          <li><a href="{{url('interest')}}">Upload CV</a></li>
          <li ><a href="{{url('hobby')}}">Cover Letter</a></li>
          <li class="active"><a href="{{url('fun')}}">About You</a></li>
          <li><a href="{{url('vdoprofile')}}">Video Profile</a></li>

        </ul>



          @if(count($errors)>0)
            <div class="alert alert-danger">
              @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
              @endforeach
            </div>
          @endif
          @if (notify()->ready())
            <script>
            swal({
              title: "{!! notify()->message() !!}",
              text: "{!! notify()->option('text') !!}",
              type: "{{ notify()->type() }}",
              @if (notify()->option('timer'))
              timer: {{ notify()->option('timer') }},
              showConfirmButton: false
              @endif
            });
            </script>
          @endif


          @include('student.forms.funfacts')



      </div>
    </div>
  </div>
  <script type="text/javascript">
  var form = $('#aboutForm');

  var alert = $('.alert');// contact form

  $("#about_submit").click(function (e) {
    $("#loading").show();
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
      }
    })

    e.preventDefault();

    $.ajax({
      url: '/funstore',

      data: {
        'fun_facts':$('textarea[name=fun_facts]').val(),
        '_token': $('input[name=_token]').val(),
        'inspiration_qot':$('textarea[name=inspiration_qot]').val(),
        'Why_you':$('textarea[name=Why_you]').val(),
        'Why_not_you':$('textarea[name=Why_not_you]').val(),
        'expected_salary':$('input[name=expected_salary]').val(),
      },

      type: 'POST',
      datatype: 'JSON',
      success: function (response) {
        $("#loading").hide();
        alertify.success("Added Successfully");
        //  toastr.success(data);
        /*  toastr.options = {
        "closeButton": true,
        "debug": false,
        "newestOnTop": false,
        "progressBar": true,
        "positionClass": "toast-bottom-right",

      }*/
      //  $('#list').append('<li><strong>' +  skill_name  +'</strong></li>')
      form.trigger('reset');

    },
    error: function (data) {
      console.log('Error:', data);
    }
  });
  });
  </script>



@endsection
