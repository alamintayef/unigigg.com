

    <div class="panel panel-default">
      <div class="panel-heading">Add Extra Curricular Acitivities</div>

          <div class="panel-body">

    {!! Form::open(array('url' => '','method'=>'post','id'=> 'excForm')) !!}

    <small class="text-danger">Every field is required</small>
    <div class="form-group">
      {!! Form::label('excc_name', 'Title:', ['class' => 'control-label']) !!}
      {!! Form::text('excc_name', null, ['class' => 'form-control','placeholder'=>'Designation, Organization']) !!}
      <small class="textb">i,e Volunteer, X Foundation</small>
    </div>

    <div class="form-group">
      {!! Form::label('excc_start_date', 'Start Date:', ['class' => 'control-label']) !!}
      {!! Form::date('excc_start_date', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('excc_end_date', 'End Date:', ['class' => 'control-label']) !!}
      {!! Form::date('excc_end_date', \Carbon\Carbon::now(), ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('excc_description', 'Tell Us Something About it:', ['class' => 'control-label']) !!}
      {!! Form::textarea('excc_description', null, ['class' => 'form-control' ,'rows'=>'2',]) !!}
    </div>
    @if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
  @endif


    <i id='loading' class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
    {!! Form::submit('Add', ['class' => 'btn btn-primary', 'id'=>'exc-submit']) !!}

 {!! Form::close() !!}

</div>
</div>
<script type="text/javascript">
  $("#loading").hide();
</script>
<script type="text/javascript">
  var form = $('#excForm');
  var submit = $('#submit');
  var alert = $('.alert');// contact form
 $("#exc-submit").click(function (e) {
        $("#loading").show();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        e.preventDefault();

    $.ajax({
              url: '/exccstore',
              data: {
                    'excc_name':$('input[name=excc_name').val(),
                    '_token': $('input[name=_token]').val(),
                    'excc_start_date':$('input[name=excc_start_date').val(),
                    'excc_end_date':$('input[name=excc_end_date').val(),
                    'excc_description':$('textarea[name=excc_description').val(),

                  },
              type: 'POST',
              datatype: 'JSON',
              success: function (data) {
                $("#loading").hide();
                //var data = JSON.parse(data);
                alertify.success("Added Successfully");

                form.trigger('reset');
                  $('#excclist').append('<li class="list-group-item">' +  data  +'</li>');


              },
              error: function (data) {
                console.log('Error:', data);
            }
          });
        });
</script>
