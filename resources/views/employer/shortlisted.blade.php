@extends('layouts.app')

@section('content')
  <div class="container padtop" id="shortlisted">
    <div class="row ">
      @include('layouts.emmenu')
      <div class="col-md-10 whiteproper  panel">
        <div >
          @if(count($shortlisted)>0)

          <h4 class="textb">Shortlisted Candidates </h4>
          <a href="{{url('view/applied')}}"><h5> <i class="fa fa-arrow-left"></i> Go Back</h5></a>


          @foreach( $shortlisted as $shortlist )

            <table class="table ">
                <thead>
                  <th>
                    Candidate Name
                  </th>
                  <th>
                    Remove
                  </th>
                  <th>
                    Finalize
                  </th>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      @if($shortlist->paid===0)
                            {{$shortlist->user_id}}
                      @else
                          {{$shortlist->fname}} {{$shortlist->lname}}
                      @endif

                    </td>

                    <td>
                      <form action="{{url('shortlist',$shortlist->em_shortlist_id)}}" method="POST">
                        {!! csrf_field() !!}

                        <button type="submit" class="btn btn-info btn-sm ">
                          <i class="fa fa-user"></i> Remove
                        </button>
                        <input type="hidden" name="user_id" value="{{$shortlist->user_id}}">
                        <input type="hidden" name="shortlisted_for_job_id" value="{{$shortlist->shortlisted_for_job_id}}">
                      </form>
                    </td>
                    <td>

                      @if($shortlist->finalized===1)
                        @if(Auth::user()->subs_type===0)
                        <p>
                          Finalized
                        </p>

                        @else
                          <p>
                            Finalized
                          </p>
                          @if($shortlist->called===0)
                          <form class="pull-right" action="{{url('callthem',$shortlist->em_shortlist_id)}}" method="POST">
                            {!! csrf_field() !!}
                            <button type="submit" class="btn btn-default btn-sm">
                              <i class="fa fa-phone"></i> call-for-interview
                            </button>
                          </form>
                        @else
                          <h4 class="textb">Already Notified</h4>
                        @endif
                      @endif
                      @else

                        <form action="{{url('finalize',$shortlist->shortlisted_for_job_id)}}" method="POST">
                          {!! csrf_field() !!}
                          <button type="submit" class="btn btn-success btn-sm btn-block-sm">
                            <i class="fa fa-check"></i>Finalize
                          </button>
                        </form>
                        </td>

                      @endif
                      @if($shortlist->paid === 0)
                        After Paying you can view full profile
                      @else
                        <form class="pull-right" action="{{url('talent/profile/paid',$shortlist->user_id)}}" method="GET">
                          {!! csrf_field() !!}
                          <button type="submit" class="btn btn-info">
                            <i class="fa fa-user"></i> view profile
                          </button>
                        </form>
                      @endif
                    <td>

                    </td>
                  </tr>

                </tbody>

            @endforeach


        </table>

                  @else
                    You did not shortlisted anyone
                  @endif

      </div>
    </div>
  </div>
  <script type="text/javascript">
      (function ($) {
      $('#shortlisted').smoothState();
    })(jQuery);

  </script>
@endsection
