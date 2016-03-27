<div>


  <!--about your self -->

  <h3>About You</h3>
  @foreach($funs as $fun)
    <p>
      {{$fun->fun_facts}}
    </p>
    <p>
      {{$fun->inspiration_qot}}
    </p>
    <p>
      {{$fun->Why_you}}
    </p>
    <p>
      {{$fun->Why_not_you}}
    </p>

  @endforeach
</div>
