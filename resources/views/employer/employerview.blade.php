@extends('layouts.app')
@section('content')

  <div class="container padtop pad">
    <div class="row">
      <div class="col-md-10 panel padsmall">
        <div class="col-md-4">
          @if(count($employer)>0)


          {{$employer->company_name}} <br>
          {{$employer->company_phone}}<br>
          {{$employer->company_description}}<br>
          {{$employer->company_address}}<br>
          {{$employer->company_type}}<br>
          {{$employer->company_size}}<br>
          @if($employer->subs_type===0)
            <h6>Pay As you go</h6>

          @elseif($employer->subs_type===1)
            <h6 class="textb">Subscribed to 10 jobs a year</h6>
          @else
            <h6>Corporate Bundle</h6>
          @endif
            {{$employer->expireson}}<br>
          @if($employer->verified===0)
            <button class="btn-danger">Not verified</button>
          @else
            <button class="btn-success">verified</button>
          @endif
        </div>

        <div class="col-md-6">
          <h4>Jobs Posted By {{$employer->company_name}}</h4>
          <table class="table">
            <thead>
              <th>Postion</th>
              <th>Type</th>
              <th>Paid</th>
            </thead>

        @foreach($jobsposted as $posted)
            <tbody>

            <td>
              <em>{{$posted->job_name}}</em>
            </td>
            <td>
          <em> {{$posted->job_type}}</em>
            </td>
            <td>
              @if($posted->paid===1)
                paid
            </td>
              <td>
              @else
                Not Yet
              </td>
            @endif

              </tbody>
                @endforeach
          </table>



        </div>



      </div>
    @else
      <div class="card card-raised">
        Nothing added
      <a href="{{url('employerlist')}}"></a>
      </div>

    @endif

    </div>

  </div>
@stop
