

  <div class="card card-raised pad">

    {!! Form::open(array('url' => '/edustore')) !!}
    <div class="form-group">
      {!! Form::label('Degree_name', 'Major:', ['class' => 'control-label']) !!}
      <input name="Degree_name" list='major' class="awesomplete form-control" />
      <datalist id="major">
            <option>Computer Science And Engineering</option>
            <option>Business Administration</option>
            <option>Economics</option>
            <option>English</option>
            <option>Mechanical Engineering</option>
            <option>Textile Engineering</option>
            <option>Electrical Engineering</option>
            <option>Science</option>
            <option>Commerce</option>
            <option>Arts</option>
            <option>Fine Arts</option>

      </datalist>

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
      {!! Form::date('Degree_start_date', null, ['class' => 'form-control']) !!}
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
