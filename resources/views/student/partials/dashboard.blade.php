<style media="screen">
  #font{
    font-family: 'Courier';


  }
</style>
<div class="container">
  <div class="row">
    @include('layouts.menu')

    <div class="col-md-10 " id="font">
      <div class="card card-raised padsmall">
        <div class="panel-heading"><h4 class="textb">Dashboard</h4></div>

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
          <div class="col-md-12">
            <div class="col-md-8 pull-left">
                <h4>Welcome onboard <strong>{{Auth::user()->name}}</strong></h4>
            </div>
            <div class="col-md-4 pull-right">
              @if(Auth::user()->verified===0)
                <h5 class="text-danger">Not Verified</h5>
              @else
                <h5 class="text-success">Verified</h5>
              @endif
              Free Subscription Expires on : <strong> {{Auth::user()->expireson}}</strong>
              <br>
              <a class="btn btn-success raised btn-sm " href="{{ url('/payment') }}"><i class="fa fa-btn fa-check-square-o"></i>Verify Profile</a> <br>
              @if(Auth::user()->subs_type===0)


              @else
                <button type="button" name="button" class="btn-default btn-lg">Subscribed for 6 months</button>
              @endif

            </div>
          </div>

          <div class="col-md-12">
            <div class="col-md-4 pull-left">
                @include('student.partials.userview.imageview')
            </div>
            <div class="col-md-6 pull-right">
              @include('student.partials.userview.vview')
            </div>

          </div>

          @include('student.partials.userview.infoview')
          <br>

          <div class="col-md-12 panel whiteproper">
        <h3 class="padsmall textb">Your Details</h3>
          @if(count($education)>0)
            @include('student.partials.userview.eduview')
          @endif

      @include('student.partials.userview.skillview')

      @include('student.partials.userview.expview')
      @include('student.partials.userview.interestview')

      @include('student.partials.userview.exccview')

      @include('student.partials.userview.hobbyview')
      @include('student.partials.userview.funview')
        </div>




</div>
</div>





</div>
</div>
