<div class="container">
  <div class="row">
    @include('layouts.menu')

    <div class="col-md-10  ">
      <div class="panel padsmall">
        <div class="panel-heading"><h4 class="textb">Dashboard</h4></div>
        @if(Session::has('flash_message'))
          <div class="alert alert-success"><em> {!! session('flash_message') !!}</em></div>
        @endif

          <h4 class="well">Welcome onboard <strong>{{Auth::user()->name}}</strong></h4>

          @if(count($joblimit)>2)
            <div class="alert alert-danger">
              You have already applied to 3 jobs
            </div>
          @endif
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
        <h3 class="padsmall textb">Data Details</h3>
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
