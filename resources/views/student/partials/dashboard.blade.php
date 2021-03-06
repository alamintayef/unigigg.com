
<div class="container padtop">
  <div class="row">
    @include('layouts.menu')

    <div class="col-md-10" id="font">
      <div class="card card-raised padsmall">
        <div class="panel-heading"><h4 class="textb">Dashboard</h4></div>

    @include('errors.notify')

          <div class="col-md-12">
            <div class="col-md-8 pull-left">
                <h4>Welcome onboard <strong>{{Auth::user()->name}}</strong></h4>
            </div>
          </div>

          <div class="col-md-12">
            <div class="col-md-4 pull-right">
                @include('student.partials.userview.imageview')
            </div>
            <div class="col-md-4 pull-left">
              @if(Auth::user()->verified===0)
                <h5 class="text-danger">Not Verified</h5>
              @else
                <h5 class="text-success">Verified</h5>
              @endif

              <br>
              <h3>
              @if(count($infos)>0)
                @if(count($skill)>0)
                  @if(count($education)>0)
                  <a class="btn btn-success raised btn-sm " href="{{ url('verify/me') }}"><i class="fa fa-btn fa-check-square-o"></i>Verify Profile</a></h3>
                  @endif
                @endif
              @endif
              @if(Auth::user()->subs_type===0)
              @else
                <button type="button" name="button" class="btn-default btn-lg">Subscribed for 6 months</button>
              @endif

            </div>
            <br>


          </div>
          <div class="col-md-12 pad">
            @include('student.partials.userview.vview')
          </div>



          <br>

          <div class="col-md-12 panel whiteproper">
        <h3 class="padsmall textb">Your Details</h3>
          @include('student.partials.userview.infoview')
          @if(count($education)>0)
            @include('student.partials.userview.eduview')
          @endif

      @include('student.partials.userview.skillview')

      @include('student.partials.userview.expview')
      @include('student.partials.userview.interestview')

      @include('student.partials.userview.exccview')
      @include('student.partials.userview.referenceview')

      @include('student.partials.userview.funview')
        </div>




</div>
</div>





</div>
</div>
