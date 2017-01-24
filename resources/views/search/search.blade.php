

  {!! Form::open(['method'=>'GET','url'=>$url,'class'=>'form-inline'])  !!}
  <div class="form-group">
    <label for="search">Search</label>
      <input type="text" class="form-control textw"  name="search" placeholder="search . . . .">
  </div>

    <button type="button" class="btn btn-link" name="button"><i class="fa fa-search"></i></button>
  {!! Form::close() !!}
