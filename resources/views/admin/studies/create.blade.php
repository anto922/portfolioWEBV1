@extends('layouts/admin/panel') 
@section('title',"Alta habilidad") 
@section('content')



<div class="card">
	<div class="card-header bg-dark text-white">
		<span class="oi oi-grid-four-up"></span> <b>Alta Formación</b>
	</div>
	<div class="card-body">
		<form method="POST" action="{{url('AdminPanel/StoreStudie')}}" class="needs-validation">
			{!! csrf_field() !!}
			<div class="row mt-4">
				<div class="col-md-2">
					<div class="form-group">
						<label for="formGroupExampleInput">Fecha de inicio</label>
						<input type="date" name="date_start" class="form-control" />
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<label for="formGroupExampleInput">Fecha de fin</label>
						<input type="date" name="date_end" class="form-control" />
					</div>
				</div>
			</div>

			<div class="row mt-4">
				<div class="col-md-3">
					<div class="form-group">
						<label for="formGroupExampleInput">Provincia</label>
						<select id="province" name="province" class="form-control">
				<option></option>
					@foreach($provinces as $value)
				<option value="{{$value->id}}">{{$value->name}}</option>
			@endforeach
					  </select>
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="formGroupExampleInput">Localidad</label>
						<select id="city" name="city" class="form-control" readonly="true"></select>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<div class="form-group">
						<label for="formGroupExampleInput">Escuela</label>
						<input type="text" class="form-control" name="school" />
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-5">
					<div class="form-group">
						<label for="formGroupExampleInput">Curso</label>
						<input type="text" class="form-control" name="course" />

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

						<h6>Por favor corrige los errores</h6>
						<ul>
							@foreach($errors->all() as $error)
							<li>{{$error}}</li>
							@endforeach
						</ul>
						<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button></div>
				</div>
			</div>
			@endif

		</form>
	</div>
</div>
@endsection
 
@section('script')
<script src="{{ asset('public/assets/js/admin/studies/studies_create.js') }}" type="text/javascript"></script>
@endsection