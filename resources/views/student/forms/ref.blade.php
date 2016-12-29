<div class="panel panel-default">
  <div class="panel-heading"><a class="btn btn-primary  btn-lg" data-toggle="collapse" href="#collapseref">Add Reference</a></div>
    <div id="collapseref" class="panel-collapse collapse">
  <div class="panel-body">

{!! Form::open(array('url' => 'refstore', 'method'=>'post')) !!}


<div class="form-group">
  {!! Form::label('referred_by', 'Referee Name:', ['class' => 'control-label']) !!}
  {!! Form::text('referred_by', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('reference_description', 'Description:', ['class' => 'control-label']) !!}
  {!! Form::textarea('reference_description', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('referee_number', 'Referee Contact:', ['class' => 'control-label']) !!}
  {!! Form::text('referee_number', null, ['class' => 'form-control']) !!}
</div>
<i id='loading' class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
<span class="sr-only">Loading...</span>
{!! Form::submit('Add', ['class' => 'btn btn-primary','id'=>'ref_submit']) !!}

{!! Form::close() !!}

</div>
</div>
</div>
<script type="text/javascript">
  $("#loading").hide();
  var form = $('#formRef');
  var submit = $('#submit');
  var alert = $('.alert');// contact form

 $("#ref_submit").click(function (e) {
          $("#loading").show();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })

        e.preventDefault();

$.ajax({
              url: '/refstore',

              data: {
                'referred_by':$('input[name=referred_by]').val(),
               '_token': $('input[name=_token]').val(),
                'reference_description':$('textarea[name=reference_description]').val(),
                'referee_number':$('input[name=referee_number]').val(),


              },

              type: 'POST',
              datatype: 'JSON',
              success: function () {
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
