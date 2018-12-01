<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Panel Administrador</title>
<title>@yield('title')</title>
<link href="{{ asset('public/assets/css/bootstrap.min.css') }}"
	rel="stylesheet">
<link
	href="{{ asset('public/assets/plugins/datatables/css/dataTables.bootstrap4.min.css') }}"
	rel="stylesheet">
<link
	href="{{ asset('public/assets/plugins/iconic/css/open-iconic-bootstrap.css') }}"
	rel="stylesheet">
<link href="{{ asset('public/assets/css/dashboard.css') }}"
	rel="stylesheet">
<link href="{{ asset('public/assets/css/estilos.css') }}"
	rel="stylesheet">

</head>

<body>
	<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0">
		<a class="navbar-brand col-sm-3 col-md-2 mr-0"
			href="{{url('/AdminPanel/Dashboard')}}">Panel Administrador</a>
		<ul class="navbar-nav px-3">
			<li class="nav-item text-nowrap"><a class="btn btn-primary"
				href="javascript:void(0)" href="{{ route('admin.logout') }}"
				onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
					<span class="oi oi-account-logout"></span> Salir
			</a>
				<form id="logout-form" action="{{ route('admin.logout') }}"
					method="POST" style="display: none;">@csrf</form></li>
		</ul>
	</nav>

	<div class="container">
		<div class="row">
			<nav class="col-md-2 d-none d-md-block bg-light sidebar">
				<div class="sidebar-sticky">
					<h6 style="cursor: pointer"
						class="sidebar-heading d-flex justify-content-between align-items-center  mt-4 pt-4  pl-3 text-muted"
						data-toggle="collapse" href="#collapseExample1" role="button"
						aria-expanded="false" aria-controls="collapseExample1">
						<span><span class="oi oi-grid-three-up"></span>&nbsp;&nbsp;Perfil</span>
					</h6>
					<div class="collapse" id="collapseExample1">
						<ul class="nav flex-column">

							<li class="nav-item bg-dark"><a class="nav-link  pl-4 text-white"
								href="{{url('/AdminPanel/Perfil/edit')}}"> <span
									class="oi-minus"></span> Editar Perfil
							</a></li>
						</ul>
					</div>
					<h6 style="cursor: pointer"
						class="sidebar-heading d-flex justify-content-between align-items-center  mt-4 pt-4  pl-3 text-muted"
						data-toggle="collapse" href="#collapseExample2" role="button"
						aria-expanded="false" aria-controls="collapseExample1">
						<span><span class="oi oi-grid-three-up"></span>&nbsp;&nbsp;Experiencia</span>
					</h6>
					<div class="collapse" id="collapseExample2">
						<ul class="nav flex-column">

							<li class="nav-item bg-dark"><a class="nav-link  pl-4 text-white"
								href="{{url('/AdminPanel/Experiencia')}}"> <span
									class="oi-minus"></span> Ver Experiencia
							</a></li>
							<li class="nav-item bg-dark"><a class="nav-link  pl-4 text-white"
								href="{{url('/AdminPanel/AltaExperiencia')}}"> <span
									class="oi-minus"></span> Alta Experiencia
							</a></li>
						</ul>
					</div>
					<h6 style="cursor: pointer"
						class="sidebar-heading d-flex justify-content-between align-items-center  mt-4 pt-4  pl-3 text-muted"
						data-toggle="collapse" href="#collapseExample3" role="button"
						aria-expanded="false" aria-controls="collapseExample3">
						<span><span class="oi oi-grid-three-up"></span>&nbsp;&nbsp;Habilidades</span>
					</h6>
					<div class="collapse" id="collapseExample3">
						<ul class="nav flex-column">

							<li class="nav-item bg-dark"><a class="nav-link  pl-4 text-white"
								href="{{url('/AdminPanel/Habilidades')}}"> <span
									class="oi oi-plus"></span> Ver Habilidades
							</a></li>
							<li class="nav-item bg-dark"><a class="nav-link  pl-4 text-white"
								href="{{url('/AdminPanel/AltaHabilidad')}}"> <span
									class="oi oi-plus"></span> Alta Habilidad
							</a></li>
						</ul>
					</div>
					<h6 style="cursor: pointer"
						class="sidebar-heading d-flex justify-content-between align-items-center  mt-4 pt-4  pl-3 text-muted"
						data-toggle="collapse" href="#collapseExample4" role="button"
						aria-expanded="false" aria-controls="collapseExample3">
						<span><span class="oi oi-grid-three-up"></span>&nbsp;&nbsp;Formación</span>
					</h6>
					<div class="collapse" id="collapseExample4">
						<ul class="nav flex-column">

							<li class="nav-item bg-dark"><a class="nav-link  pl-4 text-white"
								href="{{url('/AdminPanel/Estudios')}}"> <span class="oi oi-plus"></span>
									Ver Formación
							</a></li>
							<li class="nav-item bg-dark"><a class="nav-link  pl-4 text-white"
								href="{{url('/AdminPanel/AltaEstudio')}}"> <span
									class="oi oi-plus"></span> Alta Formación
							</a></li>
						</ul>
					</div>
					<h6 style="cursor: pointer"
						class="sidebar-heading d-flex justify-content-between align-items-center  mt-4 pt-4  pl-3 text-muted"
						data-toggle="collapse" href="#collapseExample5" role="button"
						aria-expanded="false" aria-controls="collapseExample3">
						<span><span class="oi oi-grid-three-up"></span>&nbsp;&nbsp;Trabajos</span>
					</h6>
					<div class="collapse" id="collapseExample5">
						<ul class="nav flex-column">

							<li class="nav-item bg-dark"><a class="nav-link  pl-4 text-white"
								href="{{url('/AdminPanel/Trabajos')}}"> <span class="oi oi-plus"></span>
									Ver Trabajos
							</a></li>
							<li class="nav-item bg-dark"><a class="nav-link  pl-4 text-white"
								href="{{url('/AdminPanel/AltaTrabajo')}}"> <span
									class="oi oi-plus"></span> Alta Trabajos
							</a></li>
						</ul>
					</div>
				</div>
			</nav>


		</div>
		<div class="row">
			<div class="col-md-10 offset-2">@yield('content')</div>
		</div>


	</div>

	<script
		src="{{ asset('public/assets/plugins/jquery/jquery-3.3.1.min.js') }}"
		type="text/javascript"></script>
	<script src="{{ asset('public/assets/plugins/popper/popper.min.js') }}"
		type="text/javascript"></script>
	<script src="{{ asset('public/assets/plugins/charts/Chart.min.js') }}"
		type="text/javascript"></script>
	<script src="{{ asset('public/assets/js/bootstrap.min.js') }}"
		type="text/javascript"></script>
	<script
		src="{{ asset('public/assets/plugins/datatables/js/jquery.dataTables.min.js') }}"
		type="text/javascript"></script>
	<script
		src="{{ asset('public/assets/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"
		type="text/javascript"></script>
		@yield('script')
</body>
</html>
