

    <div class="panel panel-default">


      <div class="panel-body">
        <!--
        <form name="userForm" ng-submit="submitForm()">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="hobbies_name" class="form-control" ng-model="user.hobbies_name">

        </div>
      <button type="submit" class="btn btn-primary">Submit</button>
        </form>
-->

{!! Form::open(array('url'=>'/hobby','method'=>'post', 'id'=>'form')) !!}


    <div class="form-group">
      <h4>Upload you Cover Letter in GoogleDrive/Dropbox and share the link here.</h4>
      {!! Form::label('hobbies_name', 'Cover Letter URL:', ['class' => 'control-label']) !!}
      {!! Form::text('hobbies_name', null, ['class' => 'form-control']) !!}
    </div>
    <i id='loading' class="fa fa-spinner fa-pulse fa-3x fa-fw"></i>
    <span class="sr-only">Loading...</span>
    {!! Form::submit('Add', array('class'=>'send-btn')) !!}

 {!! Form::close() !!}


 <script type="text/javascript">
   $("#loading").hide();
 </script>

</div>
</div>
