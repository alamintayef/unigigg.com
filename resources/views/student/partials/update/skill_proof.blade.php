
<form class="" action="{{url('skills',$skills->skill_id)}}" method="POST">
  <div class="well">
    <span class="text-danger">Every Field is required</span>
  </div>
  <div class="well">
    <p>
      Add a project
    </p>
    <small>upload the project to github/dropbox and share the link</small>
  </div>
  {!! csrf_field() !!}
  <div class="form-group">
    {!! Form::label('skill_proof', 'Add Project URl:', ['class' => 'control-label']) !!}
    {!! Form::text('skill_proof', null, ['class' => 'form-control']) !!}
  </div>
  {!! Form::submit('Add/Update', ['class' => 'btn btn-primary']) !!}

  @if($errors->any())
    <div class="alert alert-danger">
      @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
      @endforeach
    </div>
  @endif



  {!! Form::submit('Add/Update', ['class' => 'btn btn-primary']) !!}
