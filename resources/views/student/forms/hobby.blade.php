

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
@if(Session::has('message'))

<div class="alert alert-{{ Session::get('message-type') }} alert-dismissable">

<button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>

<i class="glyphicon glyphicon-{{ Session::get('message-type') == 'success' ? 'ok' : 'remove'}}"></i> {{ Session::get('message') }}

</div>

@endif
{!! Form::open(array('url'=>'/hobby','method'=>'post', 'id'=>'form')) !!}


    <div class="form-group">
      <h4>Upload you Cover Letter in GoogleDrive/Dropbox and share the link here.</h4>
      {!! Form::label('hobbies_name', 'Cover Letter URL:', ['class' => 'control-label']) !!}
      {!! Form::text('hobbies_name', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit('add', array('class'=>'send-btn')) !!}

 {!! Form::close() !!}




</div>
</div>
