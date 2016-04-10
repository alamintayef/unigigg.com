

  {!! Form::open(['method'=>'GET','url'=>$url,'class'=>'navbar-form'])  !!}
    <input type="text" class="form-control" name="search" placeholder="Search...">
    <button class="btn btn-default-sm" type="submit">
      <i class="fa fa-search"></i> 
      </button>
  {!! Form::close() !!}
