@extends('layouts.app')

@section('content')
  <div class="container" id="dash">
    <div class="row">
      @include('layouts.emmenu')
      <div class="col-md-10 ">
        <div class="panel panel-primary">
          <div class="panel-heading">Employer Dashboard</div>

          <div class="panel-body">
            <div>
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

              <div style="text-align:center;">


              @if(count($images)>0)
                @foreach($images as $image)
                  <img src="{!!'files/images/'.$image->filePath !!}" alt="propic" height="200px" width="200px" style="border-radius:30%;" />

                @endforeach

              @endif
            </div>
            @if(Auth::user()->subs_type===0)
              <button type="button" name="button" class="btn-default">Pay As You Go</button>
            @elseif(Auth::user()->subs_type===1)
              <button type="button" name="button" class="btn-default">Limited Pack</button>
            @else
              <button type="button" name="button" class="btn-default">Unlimited Pack Subscribed</button>
            @endif
            <h3>Welcome <strong class="primary">{{ Auth::user()->name }}
              </strong> The Recruiter</h3>
            </div>
            @if(Auth::user()->verified===0)
             <p class="  pull-right">
               <button type="button" class=" btn-danger" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="" title="" aria-describedby="popover936988">Not Verified</button>

             </p>
            @else
              <p class=" pull-right">
                <button type="button" class=" btn-success">Verified</button>

              </p>
            @endif

            <div >
              @if(count($eminfos)>0)
                <div class="pad">


                  <h4>Company Details</h4><a href="{{url('employerinfo')}}" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>

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

                  <h5>You have posted <em> {{$jobcount}} </em>jobs</h5>

                </div>
              @endif




            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
  (function ($) {
    $('#dash').smoothState();
})(jQuery);

  </script>


@endsection
