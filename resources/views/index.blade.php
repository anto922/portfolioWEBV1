@extends('layouts.master') 
@section('title',"PortFolioWeb") 
@section('content')


<div class="container">

	<div class="row mt-5">
		<div class="col-md-12">
			<section id="sobre-mi" class="sobre-mi text-white text-justify my-5  py-5 mt-5" data-aos="fade-down" data-aos-offset="370">

				<h2 class="display-4 text-center justify ">Sobre mi</h2>
				<p class="lead py-5 mt-5">{{$user->about_me}}</p>

			</section>
		</div>
	</div>
</div>


<div class="row">
	<div class="col-md-12 bg-darkV2">
		<section id="formacion" class="formacion text-white mb-5 py-5 " data-aos="fade-left">
			<h2 class="display-4 text-center">Formación</h2>

			<div class="row">
				<div class="col-md-6 offset-md-3">

					<ul class="timeline">

						@foreach($studies as $stu)

						<li><span>{{$stu->school}}</span> <span class="float-right">{{date('M-Y',
								strtotime($stu->date_start))}} , {{date('M-Y',
								strtotime($stu->date_end))}}</span>
							<p class="alert alert-secondary">{{$stu->course}}</p>
						</li>


						@endforeach
					</ul>
				</div>
			</div>

		</section>
	</div>
</div>



<div class="row">
	<div class="col-md-12">
		<section id="experiencia" class="experiencia text-white my-5 py-5" data-aos="fade-right">
			<h2 class="display-4 text-center">Experiencia</h2>
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<ul class="timeline">
						@foreach($exp as $ex)

						<li><span>{{$ex->company}}</span> <span class="float-right">{{date('M-Y',
								strtotime($ex->date_start))}} , {{date('M-Y',
								strtotime($ex->date_end))}}</span>
							<p class="alert alert-secondary">{{$ex->description}}</p>
						</li>
						@endforeach

					</ul>
				</div>
			</div>

		</section>
	</div>

</div>

<div class="row">
	<div class="col-md-12  bg-darkV2">
		<section id="habilidades" class="habilidades  my-5 py-5" data-aos="fade-up-left">
			<h2 class="display-4 text-center text-white">Habilidades</h2>




			<div class="row mt-5">
				<div class="col-md-6 offset-3 mt-4">
					@foreach ($skills as $skill)



					<span class="text-white">{{$skill->description}} <span class="float-right">{{$skill->level}}%</span></span>

					<div class="progress" style="height:5px">

						<div class="progress-bar" role="progressbar" style="width: {{$skill->level}}%;" aria-valuenow="{{$skill->level}}" aria-valuemin="0"
						 aria-valuemax="100"></div>
					</div>




					@endforeach
				</div>
			</div>


		</section>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<section id="trabajos" class="trabajos  my-5 py-5" data-aos="fade-up-right">
			<h2 class="display-4 text-center text-white">Trabajos</h2>
			<div class="row">
				@foreach ($works as $work)

				<div class="col-md-6 offset-3 mt-5">

					<div class="card border-dark" style="width: 18rem;">
						<img class="card-img-top" src="{{ asset('storage/app/'.$work->icon_work) }}" alt="Card image cap" width="286" height="180">
						<div class="card-body text-center">
							<h5 class="card-title">{{$work->description}}</h5>
							<p><span class="badge badge-success">{{$work->skill_description}}</span></p>
							<a target="_blank" href="{{$work->link}}" class="btn btn-primary">Ir a web</a>
						</div>
					</div>
				</div>

				@endforeach

			</div>
		</section>
	</div>

</div>

<div class="row">
	<div class="col-md-12  bg-darkV2">
		<section id="contacto" class="contacto  my-5 py-5" data-aos="fade-up-left">
			<h2 class="display-4 text-center text-white">Contacto</h2>




			<div class="row mt-5">
				<div class="col-md-6 offset-3 mt-4">
					<form id="mail-form">
						{!! csrf_field() !!}
						<div class="form-group">
							<label class="text-white" for="name">Nombre</label>
							<input type="text" class="form-control" id="name">

						</div>
						<div class="form-group">
							<label class="text-white" for="emailContact">Email</label>
							<input type="emailContact" class="form-control" id="emailContact">

						</div>
						<div class="form-group">
							<label class="text-white" for="subject">Asunto</label>
							<input type="text" class="form-control" id="subject">
						</div>
						<div class="form-group">
							<label class="text-white" for="mensaje">Mensaje</label>
							<textarea id="msg" class="form-control" cols="30" rows="10"></textarea>
						</div>

						<button id="sendEmail" type="button" class="btn btn-primary">Enviar</button>
					</form>

					<div id="notifMail"></div>
				</div>

			</div>


		</section>
	</div>
</div>
@endsection

	@include('admin.login.login')