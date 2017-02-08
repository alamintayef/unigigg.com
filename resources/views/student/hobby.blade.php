@extends('layouts.app')

@section('content')

  <div class="container padtop" id="hobby">
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
          <li class="active"><a href="{{url('hobby')}}">Cover Letter</a></li>
          <li><a href="{{url('fun')}}">About You</a></li>
          <li><a href="{{url('vdoprofile')}}">Video Profile</a></li>

        </ul>


          <div class="well">

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

            @include('student.forms.hobby')

      </div>
    </div>
    <div class="col-md-2 panel whiteproper">
      <h5 class="textb">Cover Letter Link</h5>
      <small class="textb">Add a cover letter, tweak it a little bit before applying to a job</small>

        <ul class="list-group">
          <li class="list-group-item" id=list></li>
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
       url: 'hobbyview',
       dataType: 'html',   //expect html to be returned
       success: function(data){
        var data = JSON.parse(data);
          $('#list').html('<li>' +  data  +'</li>')
           //alert(response);
       }

    });
    /*
    $('.send-btn').click(function(){
      $.ajax({
        url: '/hobby/store',
        type: 'POST',
        dataType: 'json',
        data: {'hobbies_name':$('input[name=hobbies_name').val(), '_token': $('input[name=_token]').val()},
        success: function(response){
          var data = JSON.parse(response);
          toastr.success(data.data);
        }
      });
    });
*/
});

</script>

<script type="text/javascript">
  var form = $('#form');
  var submit = $('#submit');
  var alert = $('.alert');// contact form
 $(".send-btn").click(function (e) {
   $("#loading").show();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })

        e.preventDefault();

$.ajax({
              url: '/hobby',
              data: {'hobbies_name':$('input[name=hobbies_name').val(), '_token': $('input[name=_token]').val()},
              type: 'POST',
              datatype: 'JSON',
              success: function (data) {
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
                  $('#list').html('<li>' +  data  +'</li>')
                  form.trigger('reset');

              },
              error: function (data) {
                console.log('Error:', data);
            }
          });
        });
</script>


@endsection
