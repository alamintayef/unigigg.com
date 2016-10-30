@extends('layouts.app')
<title>Verify Me</title>
@section('content')
  <div class="container padtop">
    <div class="row">
      <div class="col-md-5 col-md-offset-1 panel pad">
        <h2 class="textb">
          Congratulations on filling your profile.
        </h2>
          <p class="lead">
          Did you filled your profile properly ? <br>
          Did you add the followings ? <br>
          <li>Basic Information</li>
          <li>Information About you</li>
          <li>CV and Cover letter Link ?</li>
          <li>Skills</li>
          <li>Academic information  (School, College, University)</li>
          <li>Profile Picture </li>
          </p>
          <h5>Yes i have added all of these</h5>
          <h5>And i am confident that i won't need your help to polish my profile because its already polished </h5>
          <form class="" action="{{url('payment/store/bkash')}}" method="post">
            {!! csrf_field() !!}
            <input type="hidden" name="bkash_number" value="0">
            <input type="hidden" name="transaction_id" value="0">
            <button type="submit" name="button" class="button">Verify My profile</button>
          </form>

      </div>
      <div class="col-md-offset-1 col-md-5 panel pad">
        <h2 class="textb">Do you need help to build your profile ?</h2>
        <h4>Give us a call on whatsapp/viber at <span class="text-primary">01987847548</span> or <span class="text-primary">01717581939</span> or better knock us at facebook</h4>

        <h4>We do charge for the service, and the amount is Tk.250.(Refundable)</h4>
        <h5><i class="fa fa-check-circle"></i> We will polish your profile</h5>
        <h5><i class="fa fa-check-circle"></i> We will help you to develop a customized CV</h5>
        <h5><i class="fa fa-check-circle"></i> We will help you to indentify and develop your skill that you don(t) see</h5>
        <h4>I am Okay with it! Verify my profile </h4>
        <a class="button" href="{{ url('payment') }}"><i class="fa fa-btn fa-check-square-o"></i>Verify Profile</a>
       </h1>
      </div>

    </div>
  </div>
@endsection
