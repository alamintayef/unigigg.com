

  <div class="card card-raised pad">

    {!! Form::open(array('url' => '', 'method'=> 'post' ,'id'=>'eduForm')) !!}

    <div class="form-group">
      {!! Form::label('Degree_name', 'Major:', ['class' => 'control-label']) !!}
      <input name="Degree_name" id='major' class="awesomplete form-control" />

      <script type="text/javascript">
      var major = document.getElementById("major");
      var autocompletemajor=new Awesomplete(major, {
      minChars: 1,
      autoFirst: true
      });
        autocompletemajor.list =['Computer Science and Engineering', 'Science','Commerce','Arts','Business Administration', 'Economics','Mathemtics','Mechanical Engineering','Pharmacy','Electrical and Electronic Engineering','Physics','Chemistry']
      </script>
      <small class="text-danger">Required</small>
      </div>

    <div class="form-group">
      {!! Form::label('Degree_type', 'Level:', ['class' => 'control-label']) !!}
      <select class="form-control" name="Degree_type" id="select">
        <option value="SSC">SSC</option>
        <option value="HSC">HSC</option>
        <option value="O Level">O level</option>
        <option value="A Level">A Level</option>
        <option value="Bachelors">Bachelors</option>
        <option value="Masters">Masters</option>
      </select>

    </div>

    <div class="form-group">
      {!! Form::label('Degree_start_date', 'Start Date:', ['class' => 'control-label']) !!}
      <select name="Degree_start_date" class="form-control">
        <option value="2001">2001</option>
        <option value="2002">2002</option>
        <option value="2003">2003</option>
        <option value="2004">2004</option>
        <option value="2005">2005</option>
        <option value="2006">2006</option>
        <option value="2007">2007</option>
        <option value="2008">2008</option>
        <option value="2009">2009</option>
        <option value="2010">2010</option>
        <option value="2011">2011</option>
        <option value="2012">2012</option>
        <option value="2013">2013</option>
        <option value="2014">2014</option>
        <option value="2015">2015</option>
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
        <option value="2019">2019</option>
        <option value="2020">2020</option>
    </select>
    </div>
  <div class="form-group">
      {!! Form::label('Degree_end_date', 'Expected / Passing Date:', ['class' => 'control-label']) !!}
      <select name="Degree_end_date" class="form-control">
        <option value="2001">2001</option>
        <option value="2002">2002</option>
        <option value="2003">2003</option>
        <option value="2004">2004</option>
        <option value="2005">2005</option>
        <option value="2006">2006</option>
        <option value="2007">2007</option>
        <option value="2008">2008</option>
        <option value="2009">2009</option>
        <option value="2010">2010</option>
        <option value="2011">2011</option>
        <option value="2012">2012</option>
        <option value="2013">2013</option>
        <option value="2014">2014</option>
        <option value="2015">2015</option>
        <option value="2016">2016</option>
        <option value="2017">2017</option>
        <option value="2018">2018</option>
        <option value="2019">2019</option>
        <option value="2020">2020</option>
    </select>

    </div>
    <div class="form-group">
      {!! Form::label('Degree_institute', 'Institute:', ['class' => 'control-label']) !!}
      {!! Form::text('Degree_institute', null, ['class' => 'form-control']) !!}
      <small class="text-danger">Please insert the full Institute name</small>
    </div>
    <div class="form-group">
      {!! Form::label('Degree_result', 'Result:', ['class' => 'control-label']) !!}
      {!! Form::text('Degree_result', null, ['class' => 'form-control']) !!}
    </div>


    <i id='loading' class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
    {!! Form::submit('Add', ['class' => 'btn btn-primary','id'=>'edu-submit']) !!}

 {!! Form::close() !!}

</div>
<script type="text/javascript">
  $("#loading").hide();
</script>
<script type="text/javascript">
  var form = $('#eduForm');
  var submit = $('#submit');
  var alert = $('.alert');// contact form
 $("#edu-submit").click(function (e) {
        $("#loading").show();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        })
        e.preventDefault();

    $.ajax({
              url: '/edustore',
              data: {
                    'Degree_name':$('input[name=Degree_name').val(),
                    '_token': $('input[name=_token]').val(),
                    'Degree_type':$('select[name=Degree_type').val(),
                    'Degree_start_date':$('select[name=Degree_start_date').val(),
                    'Degree_end_date':$('select[name=Degree_end_date').val(),
                    'Degree_institute':$('input[name=Degree_institute').val(),
                    'Degree_result':$('input[name=Degree_result').val()
                  },
              type: 'POST',
              datatype: 'JSON',
              success: function (data) {
                $("#loading").hide();
                //var data = JSON.parse(data);
                alertify.success("Added Successfully");

                form.trigger('reset');
                //  $('#explist').append('<li>' +  data  +'</li>');


              },
              error: function (data) {
                console.log('Error:', data);
            }
          });
        });
</script>
