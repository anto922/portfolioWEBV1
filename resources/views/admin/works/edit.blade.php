@extends('layouts/admin/panel') 
@section('title',"Alta habilidad") 
@section('content')

<h1 class="display-6">Editar trabajo</h1>
<br>

<form method="POST" action="{{url("AdminPanel/Trabajos/{$work->id}")}}" class="needs-validation" enctype="multipart/form-data"> {!! csrf_field() !!} {{method_field('PUT')}}
	<div class="row">
		<div class="col-md-4">
			<div class="form-group">
				<label for="formGroupExampleInput">Descripción</label>
				<input type="text" name="description" class="form-control" value="{{old('description',$work->description)}}" />
			</div>
		</div>


		<div class="col-md-4">
			<div class="form-group">
				<label for="formGroupExampleInput">Lenguaje</label>
				<select id="id_skill" name="id_skill" class="form-control">
						<option></option>
							@foreach($skills as $skill)
						@if($work->id_skill <> $skill->id)
						<option value="{{$skill->id}}">{{$skill->description}}</option>
						@else
						<option value="{{$skill->id}}" selected>{{$skill->description}}</option>
						@endif
					@endforeach
					</select>
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

	<div class="row mt-4">
		<div class="col-md-6">
			<div class="form-group">
				<label for="formGroupExampleInput">Enlace</label>
				<input type="text" name="link" class="form-control" value="{{old('description',$work->link)}}" />
			</div>
		</div>

	</div>



	<div class="row">
		<div class="col-md-2">
			<button type="submit" class="btn btn-info">Actualizar</button>
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
@endsection
 
@section('script')
<script src="{{ asset('public/assets/js/admin/works/works_edit.js') }}" type="text/javascript"></script>
@endsection