@extends('layouts.master') @section('title',"PortFolioWeb")

@section('content')


<div class="container">

	<div class="row mt-5">
		<div class="col-md-12">
			<section id="sobre-mi"
				class="sobre-mi text-white text-justify my-5  py-5 mt-5"
				data-aos="fade-down" data-aos-offset="370">

				<h2 class="display-4 text-center justify ">Sobre mi</h2>
				<p class="lead py-5 mt-5">{{$user->about_me}}</p>

			</section>
		</div>
	</div>
</div>


<div class="row">
	<div class="col-md-12 bg-darkV2">
		<section id="formacion" class="formacion text-white mb-5 py-5 "
			data-aos="fade-left">
			<h2 class="display-4 text-center">Formación</h2>

			<div class="row">
				<div class="col-md-6 offset-md-3">

					<ul class="timeline">

						@foreach($studies as $stu)

						<li><span>{{$stu->school}}</span> <span class="float-right">{{date('m-Y',
								strtotime($stu->date_start))}} - {{date('m-Y',
								strtotime($stu->date_end))}}</span>
							<p class="alert alert-secondary">{{$stu->course}}</p></li>


						@endforeach
					</ul>
				</div>
			</div>

		</section>
	</div>
</div>



<div class="row">
	<div class="col-md-12">
		<section id="experiencia" class="experiencia text-white my-5 py-5"
			data-aos="fade-right">
			<h2 class="display-4 text-center">Experiencia</h2>
			<div class="row">
				<div class="col-md-6 offset-md-3">
					<ul class="timeline">
						@foreach($exp as $ex)

						<li><span>{{$ex->company}}</span> <span class="float-right">{{date('m-Y',
								strtotime($ex->date_start))}} - {{date('m-Y',
								strtotime($ex->date_end))}}</span>
							<p class="alert alert-secondary">{{$ex->description}}</p></li>
						@endforeach

					</ul>
				</div>
			</div>

		</section>
	</div>
</div>

<div class="row">
	<div class="col-md-12  bg-darkV2">
		<section id="habilidades" class="habilidades  my-5 py-5"
			data-aos="fade-up-left">
			<h2 class="display-4 text-center text-white">Habilidades</h2>

			@php 
			$filas = is_float(count($skills)/4) ? round(count($skills)/4+1): count($skills)/4 ; 
			$cols = 4; 
			$cont=0;  
			@endphp
			@for($i=0;$i < $filas;$i++)
			@if($i>0 && count($skills)-4 > 3)
			@php
			$cols=count($skills)-4 ;
			@endphp
			@endif
			<div class="row mt-5">
				@for($j=0;$j < $cols; $j++)
		       
		        @if($j==0)
				
				<div class="col-md-2 offset-2">
					@else
					<div class="col-md-2">
						@endif

						<div class="card" style="width: 18rem;">
							<div class="card-body">
								<h5 class="card-title">{{$skills[$j]["description"]}}</h5>
								<p class="card-text">With supporting text below as a natural
									lead-in to additional content.</p>
								<a href="#" class="btn btn-primary">Go somewhere</a>
							</div>
						</div>

					</div>
                
					@endfor
			</div>
				@endfor 
		
		</section>
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<section id="trabajos" class="trabajos  my-5 py-5"
			data-aos="fade-up-right">
			<h2 class="display-4 text-center text-white">Trabajos</h2>


			@foreach($works as $i => $work) @if($i== 0)
			<div class="row mt-5">
				<div class="col-md-2 offset-2">@elseif($i>3)</div>
				<div class="row mt-5">
					<div class="col-md-2 offset-2">
						@else
						<div class="col-md-2">
							@endif




							<div class="card bg-light mb-3" style="max-width: 18rem;">
								<div class="card-header text-center">{{$work->description}}</div>
								<div class="card-body">
									<h5 class="card-title text-center">
										<img src="{{ asset('storage/app/'.$work->icon_work) }}"
											width="" height="" />
									</h5>
									<p class="card-text text-center">
										<a target="_blank" href="http://{{$work->link}}">{{$work->link}}</a>
									</p>


								</div>
							</div>
						</div>
						@endforeach

					</div>
		
		</section>
	</div>
</div>
@endsection @include('admin.login.login')
