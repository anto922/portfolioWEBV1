@extends('layouts/admin/panel') 
@section('title',"Alta trabajo") 
@section('content')

<div class="card">
	<div class="card-header bg-dark text-white">
		<span class="oi oi-grid-four-up"></span> <b>Alta trabajo</b>
	</div>
	<div class="card-body">
		<form method="POST" action="{{url('AdminPanel/StoreWork')}}" class="needs-validation" enctype="multipart/form-data">
			{!! csrf_field() !!}
			<div class="row mt-4">
				<div class="col-md-4">
					<div class="form-group">
						<label for="formGroupExampleInput">Descripción</label>
						<input type="text" name="description" class="form-control" />
					</div>
				</div>

				<div class="col-md-4">
					<div class="form-group">
						<label for="formGroupExampleInput">Lenguaje</label>
						<select id="id_skill" name="id_skill" class="form-control">
				<option></option>
					@foreach($skills as $skill)
				<option value="{{$skill->id}}">{{$skill->description}}</option>
			@endforeach
					  </select>
					</div>
				</div>

			</div>

			<div class="row mt-4">

				<div class="col-md-6">
					<div class="form-group">
						<label for="formGroupExampleInput">Enlace</label>
						<input type="text" name="link" class="form-control" />
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-3">
					<div class="form-group">
						<label for="formGroupExampleInput">Icono</label> <input type="file" class="form-control-file" name="icon_work" />
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

						<h6>Por favor corrige los errores:</h6>
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
<script src="{{ asset('public/assets/js/admin/works/works_create.js') }}" type="text/javascript"></script>
@endsection