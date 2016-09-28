@extends('layouts.app')

@section('content')

  <div class="pad padtop container">
    <div class="row">
      <div class="col-md-10 card">


        <table class="table pad">
          <thead>

              <th>
                Title
              </th>

              <th>
                Status
              </th>


          </thead>
          @foreach($blogs as $blog)
          <tbody>
            <tr>
              <td>
                {{$blog->title}}
              </td>

              <td>
                @if($blog->status===0)
                  Inactive
                  <form class="form-group" action="{{url('/admin/blog/status/activate',$blog->id)}}" method="POST">
                    {!! csrf_field() !!}
                    <button type="submit" class="btn btn-sm raised btn-primary">
                      <i class="fa fa-check"></i> Change
                    </button>
                  </form>
                @else
                  Active
                  <form class="form-group" action="{{url('/admin/status/inactivate',$blog->id)}}" method="POST">
                    {!! csrf_field() !!}
                    <button type="submit" class="btn btn-sm raised btn-warning">
                      <i class="fa fa-check"></i> Change
                    </button>
                  </form>
                @endif

              </td>
              <td>
                <form class="form-group" action="{{url('blog/edit',$blog->id)}}" method="GET">

                  <button type="submit" class="btn btn-sm raised btn-warning">
                    <i class="fa fa-check"></i> Update
                  </button>
                </form>
              </td>
            </tr>
          </tbody>
          @endforeach
        </table>


      </div>

    </div>

  </div>

@endsection
