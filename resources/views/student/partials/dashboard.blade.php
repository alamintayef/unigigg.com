<div class="container">
  <div class="row">
    @include('layouts.menu')

    <div class="col-md-10 ">
      <div class="panel panel-primary">
        <div class="panel-heading">Dashboard</div>

        <div class="panel-body">
          <h4 class="well">Welcome onboard <strong>{{Auth::user()->name}}</strong>   </h4>
          <div class="col-md-5">

            @include('student.partials.userview.imageview')

          </div>

          <br>

          @include('student.partials.userview.infoview')
          <br>
          <br>

          @if(count($education)>0)
          @include('student.partials.userview.eduview')
        @endif
        <br>
          <br>
            <br>



          <h3>Show Data</h3>

          <ul class="nav nav-tabs">
            <li class="active"><a href="#skill" data-toggle="tab" aria-expanded="true">Skill</a></li>

            <li class=""><a href="#experience" data-toggle="tab" aria-expanded="false">Experience</a></li>
            <li class=""><a href="#interest" data-toggle="tab" aria-expanded="false">Interest</a></li>
            <li class=""><a href="#extra" data-toggle="tab" aria-expanded="false">Extra Curricular</a></li>
            <li class=""><a href="#hobby" data-toggle="tab" aria-expanded="false">Hobbies</a></li>
            <li class=""><a href="#funview" data-toggle="tab" aria-expanded="false">About</a></li>
          </ul>
          <div style="height:1000px;" id="myTabContent" class="tab-content" >
            <div class="tab-pane fade active in" id="skill">

              @include('student.partials.userview.skillview')

            </div>

            <div class="tab-pane fade" id="experience">

                @include('student.partials.userview.expview')
              
            </div>
            <div class="tab-pane fade" id="interest">
                  @include('student.partials.userview.interestview')
            </div>
            <div class="tab-pane fade" id="extra">
                  @include('student.partials.userview.exccview')
            </div>
            <div class="tab-pane fade" id="hobby">
                  @include('student.partials.userview.hobbyview')
            </div>
            <div class="tab-pane fade" id="funview">
                  @include('student.partials.userview.funview')
            </div>
          </div>

        </div>

      </div>
    </div>





  </div>
</div>
