<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    {!! Html::style('css/css/demo.css') !!}
    {!! Html::style('css/css/material-kit.css') !!}
    {!! Html::style('css/css/bootstrap.min.css') !!}
    {!! Html::script('css/js/material-kit.js') !!}
    {!! Html::script('css/js/material.min.js') !!}
    {!! Html::script('css/js/bootstrap-datepicker.js') !!}
    {!! Html::script('css/js/bootstrap.min.js') !!}

    <style media="screen">
      .top{
        padding-top: 160px;
      }
    </style>

  </head>
  <body>
    

    <div class="container padtop top">
      <div class="row">
        <div class="col-md-10 card-raised">


        <h3>Welcome <strong class="primary">{{ Auth::user()->name }}
        </strong> Super admin</h3>
        @if(count($errors)>0)
          <div class="alert alert-danger">
            @foreach($errors->all() as $error)
              <p>{{ $error }}</p>
            @endforeach
          </div>
        @endif

      <div class="col-sm-4 panel col-sm-offset-1">

          <ul class="list-group">
          <li class="list-group-item"><a href="{{url('verification')}}">Show Verification Request</a</li>
           <li class="list-group-item"><a href="{{url('area')}}">Add area</a></li>
           <li class="list-group-item"><a href="{{url('managejobs')}}">Cron Jobs</a></li>
           <li class="list-group-item"><a href="{{url('manage/odd/jobs')}}">Eccentric Cron Jobs</a></li>
           <li class="list-group-item"><a href="{{url('call/for/in')}}">Call For interview Request</a></li>
           <li class="list-group-item"><a href="{{url('admin')}}">User board</a> <span class="badge"> {{$allusers}}</span></li>
           <li class="list-group-item"><a href="{{url('admin/job/board')}}">Job board</a></li>
           <li class="list-group-item"><a href="{{url('admin/blog/board')}}">Blogs</a></li>
           <li class="list-group-item">Total Eccentric Jobs : {{count($allOddJobs)}}</li>
           <li class="list-group-item">Total Jobs : {{count($allJobs)}}</li>
          <li class="list-group-item"><a href="{{url('addvdo')}}">Add video</a</li>
          <li class="list-group-item"><a href="{{url('add/competition')}}">Add Competition</a</li>
          <li class="list-group-item"><a href="{{url('add/training')}}">Add Training</a</li>
           <li class="list-group-item"><a href="{{url('employerlist')}}">Employer board</a><span class="badge"> {{$allemployer}} </span></li>

           <li class="list-group-item">
             <div class="form-group label-floating">


             {!! Form::open(['method'=>'GET','url'=>'search','class'=>'form-inline'])  !!}
             <label class="control-label">Seach</label>
               <input type="text" class="form-control " name="search">
               <button class="btn btn-default-sm" type="submit">
                 <i class="fa fa-search"></i>
                 </button>
             {!! Form::close() !!}
             </div>
           </li>
           <li class="list-group-item"><a href="{{url('adduniversity')}}">Add University</a> <span class="badge">{{$uni}}</span></li>
           <li class="list-group-item"><a href="{{url('Admin/Email')}}">Email</a></li>
          </ul>


      </div>
      <div class="col-md-4 card-raised col-md-offset-1 whiteproper">
        <a href="{{url('admin/create/user')}}" class="btn btn-link"><i class="fa fa-plus"></i> Create <i class="fa fa-user"></i></a>

      </div>

        @if (notify()->ready())
          <script>
          swal({
            title: "{!! notify()->message() !!}",
            text: "{!! notify()->option('text') !!}",
            type: "{{ notify()->type() }}",
            @if (notify()->option('timer'))
            timer: {{ notify()->option('timer') }},
            showConfirmButton: false
            @endif
          });
          </script>
        @endif


    </div>
    </div>
    </div>


  </body>
</html>
