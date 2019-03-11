@extends('layouts.master') 
@section('title',"antonioruizcv") 
@section('content')


<div class="container">

	<div class="row mt-4 pt-4" data-aos="fade-left">
		<div class="col-md-12">

			<div id="experiencia" class="card">
				<div class="card-body">

					<p class="card-text lead text-justify">
						{{$user->about_me}}
					</p>

				</div>
				<div class="card-footer text-muted text-center">
					<a href="" id="pdf_cv" data-toggle="modal" data-target="#cv_pdf" data-whatever="@mdo" class="btn btn-info"><span class="oi oi-document"></span> Descargar CV</a>
				</div>

			</div>
		</div>
	</div>



	<br>
	<br>
	<br>
	<br>


	<div class="row mt-4 pt-4" data-aos="fade-left">
		<div class="col-md-12">

			<div id="experiencia" class="card">
				<div class="card-body">
					<h2 class="card-title text-center"><span class="oi oi-briefcase"></span> Experiencia</h2>
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

	<br>
	<br>
	<br>
	<br>

	<div class="row mt-4" data-aos="fade-right">
		<div class="col-md-12">

			<div id="formacion" class="card">
				<div class="card-body">
					<h2 class="card-title text-center"><span class="oi oi-book"></span> Formación</h2>
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

	<br>
	<br>
	<br>
	<br>

	<div class="row mt-5" data-aos="fade-left">
		<div class="col-md-12">

			<div id="habilidades" class="card">
				<div class="card-body">
					<h2 class="card-title text-center"><span class="oi oi-cog"></span> Habilidades</h2>
					<br>
					<p class="card-text mt-3">

						@foreach ($skills as $skill)
						<div class="col-md-6 mx-auto mt-2" data-toggle="popover" data-placement="left" data-trigger="hover" data-content="{{$skill->description}}">


							<div class="progress" style="height:32px">
								<img src="{{ asset('storage/app/'.$skill->icon_skill) }}" width="32" height="32" />
								<div class="progress-bar bg-info" role="progressbar" style="width: {{$skill->level}}%;" aria-valuenow="{{$skill->level}}"
								 aria-valuemin="0" aria-valuemax="100">
									<b>{{$skill->level}} %</b>
								</div>
							</div>

						</div>

						@endforeach
					</p>

				</div>

			</div>
		</div>

	</div>

	<br>
	<br>
	<br>
	<br>

	<div class="row mt-5" data-aos="fade-right">
		<div class="col-md-12">
			<div id="portfolio" class="card">
				<div class="card-body">
					<h2 class="card-title text-center"><span class="oi oi-folder"></span> Portfolio</h2>
					<p class="card-text">

						<div class="row">

							<div class="col-md-6 mx-auto">
							<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
  @for ($i = 0; $i < count($works); $i++)
  @if ($i==0)
        <li data-target="#myCarousel" data-slide-to="{{$i}}" class="active"></li>
		@else
		<li data-target="#myCarousel" data-slide-to="{{$i}}"></li>
		@endif
@endfor
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
                          @foreach ($works as $key =>$work)
							
							@if ($key==0) 
							<div class="carousel-item active"> 
							@else
							<div class="carousel-item">
							@endif
								<img  style="width:1200px;height:400px" class="d-block w-100" src="{{ asset('storage/app/'.$work->icon_work) }}" alt="Third slide">
								<div class="carousel-caption d-none d-md-block">
								<h5><a class="card-link text-white" href="{{$work->link}}" target="_blank">{{$work->description}}</a></h5>
								<p><span class="badge badge-warning">{{$work->skill_description}}</span></p>
							   </div>
								</div>
							
							@endforeach 

							</div>
</div>
								
							</div>

						</div>
					</p>

				</div>





			</div>
		</div>
	</div>

	<br>
	<br>
	<br>
	<br>

	<div class="row mt-5" data-aos="fade-left">
		<div class="col-md-12">

			<div id="contacto" class="card">
				<div class="card-body">
					<h2 class="card-title text-center"><span class="oi oi-map-marker"></span> Contacto</h2>
					<p class="card-text">
						<form id="mail-form">
							{!! csrf_field() !!}
							<div class="form-row">
								<div class="form-group col-md-6 offset-md-3">
									<label for="name">Nombre</label>
									<input type="text" class="form-control" id="name">

								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6 offset-md-3">
									<label for="emailContact">Email</label>
									<input type="emailContact" class="form-control" id="emailContact">

								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6 offset-md-3">
									<label for="subject">Asunto</label>
									<input type="text" class="form-control" id="subject">
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-6 offset-md-3">
									<label for="mensaje">Mensaje</label>
									<textarea id="msg" class="form-control d-none d-sm-block" cols="30" rows="10"></textarea>
									<textarea id="msg" class="form-control d-md-none" cols="30" rows="5"></textarea>
									<br>
									<button id="sendEmail" type="button" class="btn btn-info">Enviar</button>
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