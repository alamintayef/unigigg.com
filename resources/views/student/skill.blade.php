@extends('layouts.app')

@section('content')

  <div class="container padtop" id="skill">
    <div class="row">
      @include('layouts.menu')
      <div class="col-md-7">

        <ul class="nav nav-pills panel whiteproper">
          <li ><a href="{{url('userinfo')}}">Basic Information</a></li>
          <li ><a href="{{url('image')}}">Profile Pic</a></li>
          <li ><a href="{{url('edu')}}">Education</a></li>
          <li class="active" ><a href="{{url('skill')}}">Skills</a></li>
          <li ><a href="{{url('experience')}}">Experience</a></li>
          <li ><a href="{{url('refs')}}">Reference</a></li>
          <li ><a href="{{url('excc')}}">Extra-Curricular</a></li>
          <li ><a href="{{url('interest')}}">Upload CV</a></li>
          <li><a href="{{url('fun')}}">About You</a></li>
            <li ><a href="{{url('hobby')}}">Cover Letter</a></li>
          <li><a href="{{url('vdoprofile')}}">Video Profile</a></li>
        </ul>


          <div class="well">



            @include('student.forms.skills')


      </div>
    </div>
    <div class="col-md-2 panel whiteproper">
      <h5 class="textb">Skills You have Added</h5>


        <ul class="">

          @foreach($skill as $skills )

              <li id='list're>{{$skills->skill_name}}</li>

          @endforeach
        </ul>


    </div>

  </div>
</div>
<script type="text/javascript">

  var form = $('#form');
  var submit = $('#submit');
  var alert = $('.alert');// contact form

 $("#skill_submit").click(function (e) {
          $("#loading").show();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })

        e.preventDefault();

$.ajax({
              url: '/skillstore',

              data: {
                'skill_name':$('input[name=skill_name]').val(),
               '_token': $('input[name=_token]').val(),
                'skill_level':$('select[name=skill_level]').val(),
                'skill_experience':$('select[name=skill_experience]').val(),
                'skill_proof':$('input[name=skill_proof]').val()

              },

              type: 'POST',
              datatype: 'JSON',
              success: function (skill_name) {
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
                  $('#list').append('<li><strong>' +  skill_name  +'</strong></li>')
                  form.trigger('reset');

              },
              error: function (data) {
                console.log('Error:', data);
            }
          });
        });
</script>


@endsection
