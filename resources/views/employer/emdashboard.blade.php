@extends('layouts.app')

@section('content')
  <div class="container padtop" id="dash">
    <div class="row">
      @include('layouts.emmenu')
      <div class="col-md-10">
        <div class="panel panel-default">
          <div class="panel-heading"><h3>Dashboard</h3>
            <!--
            @if(Auth::user()->verified===0)
             <p class="">
               <button  class="btn btn-link btn-danger">Not Verified</button>

             </p>
            @else
              <p class="">
                <button  class="btn btn-link btn-success">Verified</button>

              </p>
            @endif
          -->
          </div>

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



            <h2>Welcome <strong class="primary">{{ Auth::user()->name }}
            ,</strong></h2>

            @if(count($eminfos)==0)
              <p>
                The first thing you would like to do is build up your profile <a href="{{url('employerinfo')}}">Here</a>
              </p>
            @endif

            </div>
            <div class="">
            @if(count($images)>0)

                <img src="{!!'files/images/'.$images->filePath !!}" alt="propic" height="100px" width="100px" style="border-radius:20%;" />

            @endif
          </div>

            <hr>
            <div >
              @if(count($eminfos)>0)
                <div class="pad">

                  <a href="{{url('employerinfo')}}" class="btn btn-default btn-sm pull-right"><i class="fa fa-edit"></i> Edit</a>


                    <div class="">


                    <div class="pull-left">
                      <h4>Company Information:</h4>
                      <p>Company Name: {{$eminfos->company_name}}  </p>
                      <p>  Company Type: {{$eminfos->company_type}}  </p>
                      <p>  Company Size: {{$eminfos->company_size}}  </p>
                      <p>
                        <h5>You have posted <em> {{$jobcount}} </em>jobs</h5>
                      </p>
                    </div>
                    <div class="pull-right">
                      <p><h4>Company Description:</h4> {{$eminfos->company_description}}</p>
                      <p>Company Email: {{$eminfos->company_email}}</p>
                      <p>Company Contact: {{$eminfos->company_phone}}</p>
                        </div>

                  </div>




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
