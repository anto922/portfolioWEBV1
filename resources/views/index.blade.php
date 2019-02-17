@extends('layouts.master') 
@section('title',"PortFolioWeb") 
@section('content')


<div class="container">

	<div class="row mt-4 pt-4">
		<div class="col-md-12">

			<div class="card" name="experiencia">
				<div class="card-body">
					<h2 class="card-title text-center">Experiencia</h2>
					<p class="card-text">
						<ul class="timeline">
							@foreach($exp as $ex)

							<li><span class="text-info"><b>{{$ex->company}}</b></span> <span class="font-weight-light text-secondary float-right">{{date('Y',
														strtotime($ex->date_start))}} - {{$ex->date_end !=null ?
																	date('Y',strtotime($ex->date_end)) : "Actualmente"}}</span>
								<p class="alert alert-secondary">{{$ex->description}}</p>
							</li>
							@endforeach

						</ul>
					</p>

				</div>

			</div>
		</div>
	</div>


	<div class="row mt-4">
		<div class="col-md-12">

			<div class="card">
				<div class="card-body">
					<h2 class="card-title text-center">Formación</h2>
					<p class="card-text">
						<ul class="timeline">

							@foreach($studies as $stu)

							<li><span class="text-info"><b>{{$stu->school}}</b></span> <span class="font-weight-light text-secondary float-right">{{date('Y',
														strtotime($stu->date_start))}} - {{date('Y',
														strtotime($stu->date_end))}}</span>
								<p class="alert alert-secondary">{{$stu->course}}</p>
							</li>


							@endforeach
						</ul>
					</p>

				</div>


			</div>
		</div>

	</div>

	<div class="row mt-5">
		<div class="col-md-12">

			<div class="card">
				<div class="card-body">
					<h2 class="card-title text-center">Habilidades</h2>
					<p class="card-text mt-3">

						@foreach ($skills as $skill)
						<div class="col-md-6 mx-auto">
							<span>{{$skill->description}} <span class="float-right">{{$skill->level}}%</span></span>

							<div class="progress" style="height:5px">

								<div class="progress-bar bg-info" role="progressbar" style="width: {{$skill->level}}%;" aria-valuenow="{{$skill->level}}"
								 aria-valuemin="0" aria-valuemax="100"></div>
							</div>

						</div>

						@endforeach
					</p>

				</div>

			</div>
		</div>

	</div>

	<div class="row mt-4">
		<div class="col-md-12">
			@foreach ($works as $work)



			<div class="card">
				<div class="card-body">
					<h2 class="card-title text-center">Portfolio</h2>
					<p class="card-text">
						<div class="card" style="width: 15rem;">
							<img class="card-img-top" src="{{ asset('storage/app/'.$work->icon_work) }}" alt="Card image cap" width="286" height="180">
							<div class="card-body text-center">
								<h5 class="card-title">{{$work->description}}</h5>
								<p><span class="badge badge-success">{{$work->skill_description}}</span></p>
								<a target="_blank" href="{{$work->link}}" class="btn btn-primary">Ir a web</a>
							</div>
						</div>
					</p>

				</div>




				@endforeach
			</div>
		</div>
	</div>

	<div class="row mt-5">
		<div class="col-md-12">

			<div class="card">
				<div class="card-body">
					<h2 class="card-title text-center">Contacto</h2>
					<p class="card-text">
						<form id="mail-form">
							{!! csrf_field() !!}
							<div class="form-row">
								<div class="form-group col-md-6 offset-3">
									<label for="name">Nombre</label>
									<input type="text" class="form-control" id="name">

								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6 offset-3">
									<label for="emailContact">Email</label>
									<input type="emailContact" class="form-control" id="emailContact">

								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6 offset-3">
									<label for="subject">Asunto</label>
									<input type="text" class="form-control" id="subject">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6 offset-3">
									<label for="mensaje">Mensaje</label>
									<textarea id="msg" class="form-control" cols="30" rows="10"></textarea>
									<br>
									<button id="sendEmail" type="button" class="btn btn-primary">Enviar</button>
								</div>
							</div>


						</form>

						<div id="notifMail"></div>
					</p>

				</div>
			</div>

		</div>

	</div>

</div>
@endsection

	@include('admin.login.login')