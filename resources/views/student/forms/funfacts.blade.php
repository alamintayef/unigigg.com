

    <div class="panel panel-default">

      <div class="panel-body">

    {!! Form::open(array('url' => '/funstore', 'id'=>'aboutForm')) !!}

    <small class="text-danger">Every field is required</small>
    <div class="form-group">
      {!! Form::label('fun_facts', 'Tell Us Something About Yourself:', ['class' => 'control-label']) !!}
      {!! Form::textarea('fun_facts', null, ['class' => 'form-control' ,'rows'=>'1','id'=>'yourself']) !!}

    </div>
    <div class="form-group">
      {!! Form::label('inspiration_qot', 'What is you fav inspirational qoute:', ['class' => 'control-label']) !!}
      {!! Form::textarea('inspiration_qot', null, ['class' => 'form-control','rows'=>'1','id'=>'inspiration_qot']) !!}
    </div>
    <div class="form-group">
      {!! Form::label('Why_you', 'Why Should People Hire You ?', ['class' => 'control-label']) !!}
      {!! Form::textarea('Why_you', null, ['class' => 'form-control', 'rows'=>2]) !!}
    </div>
    <div class="form-group">
      {!! Form::label('Why_not_you', 'Why should not People Hire You ?', ['class' => 'control-label']) !!}
      {!! Form::textarea('Why_not_you', null, ['class' => 'form-control', 'rows'=>2]) !!}
    </div>
    <div class="form-group">
      {!! Form::label('expected_salary', 'Expected salary ?', ['class' => 'control-label']) !!}
      {!! Form::text('expected_salary', null, ['class' => 'form-control']) !!}
    </div>

    <i id='loading' class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
    <span class="sr-only">Loading...</span>
    {!! Form::submit('Add', ['class' => 'btn btn-primary','id'=>'about_submit']) !!}

 {!! Form::close() !!}

</div>
</div>
</div>
<script type="text/javascript">
  $("#loading").hide();
</script>


<script type="text/javascript">
 CKEDITOR.replace( 'yourself' );
 CKEDITOR.replace( 'inspiration_qot' );


</script>
