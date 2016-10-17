

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
    {!! Form::open(array('url' => '/hobbystore')) !!}


    <div class="form-group">
      <h4>Upload you Cover Letter in GoogleDriver/Dropbox and share the link here.</h4>
      {!! Form::label('hobbies_name', 'Cover Letter URL:', ['class' => 'control-label']) !!}
      {!! Form::text('hobbies_name', null, ['class' => 'form-control']) !!}
    </div>



    {!! Form::submit('Add', ['class' => 'btn btn-primary']) !!}

 {!! Form::close() !!}

</div>
</div>
<script>
    // Defining angularjs application.
    var postApp = angular.module('postApp', [],function($interpolateProvider) {
     $interpolateProvider.startSymbol('<%');
     $interpolateProvider.endSymbol('%>'););

    // Controller function and passing $http service and $scope var.
    postApp.controller('postController', function($scope, $http) {
      // create a blank object to handle form data.
        $scope.user = {};
      // calling our submit function.
        $scope.submitForm = function() {
        // Posting data to php file
        $http({
          method  : 'POST',
          url     : '/hobbystore',
          data    : $scope.user, //forms user object
          headers : {'Content-Type': 'application/x-www-form-urlencode'}
         })
          .success(function(data) {
            if (data.errors) {
              // Showing errors.
              $scope.errorName = data.errors.hobbies_name;

            } else {
              $scope.message = data.message;
            }
          });
        };
    });
</script>
