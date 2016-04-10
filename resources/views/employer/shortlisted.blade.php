@extends('layouts.app')

@section('content')
  <div class="container ">
    <div class="row ">
      @include('layouts.emmenu')
      <div class="col-md-10 whiteproper  panel">
        <div >
          @if(count($shortlisted)>0)

          <h4 class="textb">Shortlisted Candidates </h4>
          <a href="{{url('/postedjobs')}}"><h5> <i class="fa fa-arrow-left"></i> Go Back</h5></a>


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
                      {{$shortlist->fname}} {{$shortlist->lname}}
                    </td>

                    <td>
                      <form action="{{url('shortlist',$shortlist->em_shortlist_id)}}" method="POST">
                        {!! csrf_field() !!}
                        <button type="submit" class="btn btn-info btn-sm ">
                          <i class="fa fa-user"></i> Remove
                        </button>
                      </form>
                    </td>
                    <td>

                      @if($shortlist->finalized===1)
                        <p>
                          Finalized
                        </p>
                        <td>
                          <form class="" action="{{url('callthem',$shortlist->shortlisted_for_job_id)}}" method="post">
                            {!! csrf_field() !!}
                          <button type="submit" name="button" class="btn btn-default"><i class="fa fa-phone-square"></i> Call for Interview</button>
                          </form>
                        </td>
                      @else

                        <form action="{{url('finalize',$shortlist->em_shortlist_id)}}" method="POST">
                          {!! csrf_field() !!}
                          <button type="submit" class="btn btn-success btn-sm btn-block-sm">
                            <i class="fa fa-check"></i>Finalize
                          </button>
                        </form>
                        </td>


                      @endif



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
