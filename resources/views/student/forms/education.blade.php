

  <div class="card card-raised pad">

    {!! Form::open(array('url' => '/edustore')) !!}

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
        {!! Form::label('cgpa', 'Minimum CGPA:', ['class' => 'control-label']) !!}
        <input name="cgpa" id='cgpa' class="awesomplete form-control" />

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
    <!---
    <div class="form-group">
      {!! Form::label('Degree_start_date', 'Start Date:', ['class' => 'control-label']) !!}
      {{ Form::selectYear('year', 2013, 2015, ['class' => 'form-control']) }}
    </div>
    --->
    <div class="form-group">
      {!! Form::label('Degree_start_date', 'Start Date:', ['class' => 'control-label']) !!}
      {!! Form::date('Degree_start_date', null, ['class' => 'form-control']) !!}
      <small>You do not need to put the exact date. A probable date is good enough</small>
      <small>SSC starts from class 9</small>
    </div>
    <div class="form-group">
      {!! Form::label('Degree_end_date', 'Expected / Passing Date:', ['class' => 'control-label']) !!}
      {!! Form::date('Degree_end_date', null, ['class' => 'form-control','id'=>'date']) !!}

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



    {!! Form::submit('Add', ['class' => 'btn btn-primary']) !!}

 {!! Form::close() !!}

</div>
<script type="text/javascript">

$(function() {

  $(document).ready(function(){

      $(".monthPicker").datepicker({
          dateFormat: 'mm-yy',
          changeMonth: true,
          changeYear: true,
          showButtonPanel: true,

          onClose: function(dateText, inst) {
              var month = $("#ui-datepicker-div .ui-datepicker-month :selected").val();
              var year = $("#ui-datepicker-div .ui-datepicker-year :selected").val();
              $(this).val($.datepicker.formatDate('yy-mm', new Date(year, month, 1)));
          }
      });

      $(".monthPicker").focus(function () {
          $(".ui-datepicker-calendar").hide();
          $("#ui-datepicker-div").position({
              my: "center top",
              at: "center bottom",
              of: $(this)
          });
      });

  });

</script>
