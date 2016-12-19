@extends('layouts.app')

@section('content')

  <div class="container padtop" id="experience">
    <div class="row">
      @include('layouts.menu')
      <div class="col-md-7">

        <ul class="nav nav-pills panel whiteproper">
          <li ><a href="{{url('userinfo')}}">Basic Information</a></li>
          <li ><a href="{{url('image')}}">Profile Pic</a></li>
          <li ><a href="{{url('edu')}}">Education</a></li>
          <li ><a href="{{url('skill')}}">Skills</a></li>
          <li class="active"><a href="{{url('experience')}}">Experience</a></li>
          <li ><a href="{{url('refs')}}">Reference</a></li>
          <li><a href="{{url('excc')}}">Extra-Curricular</a></li>
          <li><a href="{{url('interest')}}">Upload CV</a></li>
          <li ><a href="{{url('fun')}}">About You</a></li>
            <li><a href="{{url('vdoprofile')}}">Video Profile</a></li>

        </ul>


          <div class="well">


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


            @include('student.forms.experience')


      </div>
    </div>
    <div class="col-md-2 panel whiteproper">
      <h5 class="textb">Experiences you added</h5>

    <ul class="list-group">
      @foreach($data as $exp )
        <li class="list-group-item" id=explist>{{$exp->exp_name}}</li>
      @endforeach

    </ul>
    </div>
  </div>
</div>
<script type="text/javascript">

//$.ajaxSetup({ headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') } });
// handlers


$(document).ready(function() {
     $.ajax({    //create an ajax request to load_page.php
       type: "GET",
       url: '/experience/view',
       dataType: 'html',   //expect html to be returned
       success: function(data){
          var x = JSON.parse(data);
          for (var i = 0; i < x.length; i++) {
            $('#explist').append('<li>' +  x +'</li>')
          }


        }


      //  }
           //alert(response);


    });

});

</script>

<script type="text/javascript">
  var form = $('#expform');
  var submit = $('#submit');
  var alert = $('.alert');// contact form
 $("#send-btn").click(function (e) {
        $("#loading").show();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        e.preventDefault();

    $.ajax({
              url: '/experiencestore',
              data: {
                    'exp_name':$('input[name=exp_name').val(),
                    '_token': $('input[name=_token]').val(),
                    'exp_start_date':$('input[name=exp_start_date').val(),
                    'exp_end_date':$('input[name=exp_end_date').val(),
                    'exp_description':$('textarea[name=exp_description').val(),
                    'exp_validation':$('input[name=exp_validation').val()
                  },
              type: 'POST',
              datatype: 'JSON',
              success: function (data) {
                $("#loading").hide();
                //var data = JSON.parse(data);
                alertify.success("Added Successfully");

                form.trigger('reset');
                  $('#explist').append('<li>' +  data  +'</li>');


              },
              error: function (data) {
                console.log('Error:', data);
            }
          });
        });
</script>


@endsection
