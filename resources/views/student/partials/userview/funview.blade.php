<div>


  <!--about your self -->
  @if(count($funs)>0)


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
@else
  <h4>Nothing Added</h4>
@endif
</div>
