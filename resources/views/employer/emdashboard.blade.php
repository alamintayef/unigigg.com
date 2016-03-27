@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      @include('layouts.emmenu')
      <div class="col-md-10 ">
        <div class="panel panel-primary">
          <div class="panel-heading">Employer Dashboard</div>

          <div class="panel-body">
            <div>

              <div style="text-align:center;">


              @if(count($images)>0)
                @foreach($images as $image)
                  <img src="{!!'/images/'.$image->filePath !!}" alt="propic" height="200px" width="200px" style="border-radius:30%;" />

                @endforeach
              @else
                <img src="https://minions-funmobility.netdna-ssl.com/wp-content/uploads/2015/05/signup-after-img1.jpg" alt="Pro Pic" height="200px" width="200px" />

              @endif
            </div>

            <h3>Welcome <strong class="primary">{{ Auth::user()->name }}
              </strong> The Recruiter</h3>
            </div>

            <div class="Jumbotron">
              @if(count($eminfos)>0)
                <div class="jumbotron">


                  <h4>Company Details</h4><button type="button" name="button" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</button>

                  @foreach ($eminfos as $eminfo)
                    <p>

                      <p>Company Name: {{$eminfo->company_name}}</p>
                      <p>Company Type: {{$eminfo->company_type}}</p>
                      <p>Company Size: {{$eminfo->company_size}}</p>
                      <p><h4>Company Description:</h4> {{$eminfo->company_description}}</p>
                      <p>Company Email: {{$eminfo->company_email}}</p>
                      <p>Company Contact: {{$eminfo->company_phone}}</p>


                    </p>

                  @endforeach

                </div>
              @endif




            </div>

          </div>
        </div>
      </div>
    </div>
  </div>


@endsection
