@extends('layouts.app')

@section('content')


<div class="container padtop">
		<div class="row">
			<div class="[ col-xs-12 col-sm-offset-2 col-sm-8 ]">

				@foreach($training as $trainings)
				<div class="panel panel-primary ">

					<div class="panel-heading">
						<div class="panel-title textw">
								<h3 class="textw">{{$trainings->title}}</h3>
						</div>
					</div>
						<div class="panel-body">

							{{$trainings->description}}
							<hr>

								Competition starts on :	{{$trainings->training_start_date}}<span class="pull-right"> Application Deadline : {{$trainings->application_dead_line}}</span>


						</div>

			</div>

		@endforeach
			</div>
		</div>
@endsection
