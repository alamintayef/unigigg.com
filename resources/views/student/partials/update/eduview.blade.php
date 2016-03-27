



    <form class="" action="{{url('edupdate',$edu->id)}}" method="POST">
      <div class="well">
        <span class="text-danger">Every Field is required</span>
      </div>


        {!! csrf_field() !!}
        <div class="form-group">
          {!! Form::label('Degree_name', 'Degree Name:', ['class' => 'control-label']) !!}
          {!! Form::text('Degree_name', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('Degree_type', 'Tell Us Someting About Your Degree:', ['class' => 'control-label']) !!}
          {!! Form::text('Degree_type', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('Degree_start_date', 'Start Date:', ['class' => 'control-label']) !!}
          {!! Form::date('Degree_start_date', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('Degree_end_date', 'Passing Date:', ['class' => 'control-label']) !!}
          {!! Form::date('Degree_end_date', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('Degree_institute', 'Degree Institute:', ['class' => 'control-label']) !!}
          {!! Form::text('Degree_institute', null, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
          {!! Form::label('Degree_result', 'Degree_result:', ['class' => 'control-label']) !!}
          {!! Form::number('Degree_result', null, ['class' => 'form-control']) !!}
        </div>

      @if($errors->any())
        <div class="alert alert-danger">
          @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
          @endforeach
        </div>
      @endif



      {!! Form::submit('update', ['class' => 'btn btn-primary']) !!}

    </form>
