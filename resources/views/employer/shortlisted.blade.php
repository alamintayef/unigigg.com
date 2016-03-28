@extends('layouts.app')

@section('content')
  <div class="container ">
    <div class="row ">
      @include('layouts.emmenu')
      <div class="col-md-8 whiteproper col-md-offset-1 panel">
        <div >
          <h4 class="text-info">Shortlisted Candidates</h4>

        </div>


        @foreach( $shortlisted as $shortlist )
        @if($shortlist->user_id===Auth::user()->id)
          @if($shortlist->job_name===$shortlist->job_name)

        <table class="table  ">
          <thead>
            <th>
              Candidate Name
            </th>
            <th>
              Shortlisted For
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
                {{$shortlist->job_name}}
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

        @endif
        @endif
        @endforeach

        </table>


      </div>
    </div>
  </div>
