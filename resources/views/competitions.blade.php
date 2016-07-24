@extends('layouts.app')

@section('content')


<div class="container padtop">
		<div class="row">
			<div class="[ col-xs-12 col-sm-offset-2 col-sm-8 ]">

				@foreach($competition as $competitions)
				<div class="panel panel-primary ">

					<div class="panel-heading">
						<div class="panel-title textw">
								<h3 class="textw">{{$competitions->title}}</h3>
						</div>
					</div>
						<div class="panel-body">

							{{$competitions->description}}
							<hr>

								Competition starts on :	{{$competitions->event_date}}<span class="pull-right"> Application Deadline : {{$competitions->last_date_of_application}}</span>


						</div>

			</div>

		@endforeach
			</div>
		</div>
@endsection
