



    <form class="" action="{{url('edupdate',$edu->id)}}" method="POST">
      <div class="well">
        <span class="text-danger">Every Field is required</span>
      </div>


        {!! csrf_field() !!}
    
            <div class="form-group">
              {!! Form::label('Degree_name', 'Major:', ['class' => 'control-label']) !!}
              {!! Form::text('Degree_name', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('Degree_type', 'Degree Level:', ['class' => 'control-label']) !!}
              <select class="form-control" name="Degree_type" id="select">
                <option value="SSC">SSC</option>
                <option value="HSC">HSC</option>
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
              {!! Form::date('Degree_end_date', null, ['class' => 'form-control']) !!}
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


      @if($errors->any())
        <div class="alert alert-danger">
          @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
          @endforeach
        </div>
      @endif



      {!! Form::submit('update', ['class' => 'btn btn-primary']) !!}

    </form>
