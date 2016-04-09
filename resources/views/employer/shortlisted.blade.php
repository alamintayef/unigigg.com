@extends('layouts.app')

@section('content')
  <div class="container ">
    <div class="row ">
      @include('layouts.emmenu')
      <div class="col-md-10 whiteproper  panel">
        <div >
          @if(count($shortlisted)>0)

          <h4 class="textb">Shortlisted Candidates </h4>
          <form class="" action="" method="post">
              <a type="button" name="button" class="pull-right btn btn-default" href="{{url('call')}}"> Call for Interview</a>
          </form>

          @foreach( $shortlisted as $shortlist )




              <table class="table  ">
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
                      @else

                        <form action="{{url('finalize',$shortlist->em_shortlist_id)}}" method="POST">
                          {!! csrf_field() !!}
                          <button type="submit" class="btn btn-success btn-sm btn-block-sm">
                            <i class="fa fa-check"></i>Finalize
                          </button>
                        </form>


                      @endif
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
