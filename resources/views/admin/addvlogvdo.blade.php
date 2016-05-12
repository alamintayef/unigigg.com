@extends('layouts.app')
@section('content')
  <div class="col-md-2">

  </div>
<div class="col-md-8 padsmall panel">

{!! Form::open(array('url' => 'add/vdo')) !!}


<div class="form-group">
  {!! Form::label('vlogurl', 'Video link:', ['class' => 'control-label']) !!}
  {!! Form::text('vlogurl', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
  {!! Form::label('catagory', 'Catagory:', ['class' => 'control-label']) !!}
  <select class="form-control" name="catagory" id="select">
    <option value="Motivational">Motivational</option>
    <option value="Interview">Interview Skills</option>
    <option value="Business">Business</option>
    <option value="Programming">Programming</option>
    <option value="Graphics Design">Graphic Design</option>
    <option value="Softskills">Masters</option>
  </select>

</div>


{!! Form::submit('Add', ['class' => 'btn btn-sm btn-raised']) !!}

{!! Form::close() !!}

</div>


</div>
@endsection
