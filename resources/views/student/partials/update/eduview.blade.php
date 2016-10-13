@extends('layouts.app')

@section('content')

<div class="container padtop">
<div class="card card-raised padtop pad">

    <form class="form-horizontal" action="{{url('edupdate',$edu->id)}}" method="POST">
      <div class="card-header">
        <span class="text-danger">Every Field is required</span>
      </div>


        {!! csrf_field() !!}


            <div class="form-group">
              {!! Form::label('Degree_name', 'Major:', ['class' => 'control-label']) !!}
              {!! Form::text('Degree_name', $edu->Degree_name, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('Degree_type', 'Degree Level:', ['class' => 'control-label']) !!}
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
              {!! Form::label('Degree_start_date', 'Start Date:', ['class' => 'control-label']) !!} <b>{{$edu->Degree_start_date}}</b>

              <select name="Degree_start_date" class="form-control dropdown" value="$edu->Degree_start_date">
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
            </select>
            </div>
            <div class="form-group">
              {!! Form::label('Degree_end_date', 'Expected / Passing Date:', ['class' => 'control-label']) !!} <b>{{$edu->Degree_end_date}}</b>
              <select name="Degree_end_date" class="form-control dropdown" >
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
            </select>
            </div>
            <div class="form-group">
              {!! Form::label('Degree_institute', 'Institute:', ['class' => 'control-label']) !!}
              {!! Form::text('Degree_institute', $edu->Degree_institute, ['class' => 'form-control']) !!}
              <small class="text-danger">Please insert the full Institute name</small>
            </div>
            <div class="form-group">
              {!! Form::label('Degree_result', 'Result:', ['class' => 'control-label']) !!}
              {!! Form::text('Degree_result', $edu->Degree_result, ['class' => 'form-control']) !!}
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
  </div>

</div>
@endsection
