@extends('layouts/admin/panel') 
@section('title',"Alta habilidad") 
@section('content')

<div class="card">
	<div class="card-header bg-dark text-white">
		<span class="oi oi-grid-four-up"></span> <b>Alta habilidad</b>
	</div>
	<div class="card-body">

		<form method="POST" action="{{url('AdminPanel/StoreSkill')}}" class="needs-validation" enctype="multipart/form-data">
			{!! csrf_field() !!}

			<div class="row">
				<div class="col-md-5">
					<div class="form-group">
						<label for="formGroupExampleInput">Descripción</label>
						<input type="text" class="form-control" name="description" />
					</div>
				</div>

			</div>

			<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						<label for="formGroupExampleInput">Nivel</label>
						<input type="number" class="form-control" min="0" max="100" name="level" />
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						<label for="formGroupExampleInput">Icono</label>
						<input type="file" class="form-control-file" name="icon_skill" />
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-2">
					<button type="submit" class="btn btn-primary">Guardar</button>
				</div>
			</div>



			@if($errors->any())

			<div class="row">
				<div class="col-md-6 col-md-offset-5 mt-3">
					<div class='alert alert-danger alert-dismissible fade show msgErrorLogin' role='alert'>

						<h6>Por favor corrige los errores :</h6>
						<ul>
							@foreach($errors->all() as $error)
							<li>{{$error}}</li>
							@endforeach
						</ul>
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>
				</div>
			</div>
			@endif
	</div>

	</form>
</div>
</div>
@endsection
 
@section('script')
<script src="{{ asset('public/assets/js/admin/skills/skills_create.js') }}" type="text/javascript"></script>
@endsection