@extends('layouts/admin/panel') 
@section('title',"Alta habilidad") 
@section('content')

<h1 class="display-6">Editar formación</h1>
<br>
<form method="POST" action="{{url("AdminPanel/Estudios/{$studie->id}")}}" class="needs-validation"> {!! csrf_field() !!} {{method_field('PUT')}}
	<div class="row mt-4">
		<div class="col-md-3">
			<div class="form-group">
				<label for="formGroupExampleInput">Fecha de inicio</label>
				<input type="date" name="date_start" class="form-control" value="{{old('date_start',$studie->date_start)}}" />
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label for="formGroupExampleInput">Fecha de fin</label>
				<input type="date" name="date_end" class="form-control" value="{{old('date_end',$studie->date_start)}}" />
			</div>
		</div>
	</div>

	<div class="row mt-4">
		<div class="col-md-3">
			<div class="form-group">
				<label for="formGroupExampleInput">Provincia</label>
				<select id="province" name="province" class="form-control">
				<option></option>
				<option></option>
					@foreach($provinces as $value)
				@if($studie->id_province <> $value->id)
				<option value="{{$value->id}}">{{$value->name}}</option>
				@else
				<option value="{{$value->id}}" selected>{{$value->name}}</option>
				@endif
			@endforeach
					  </select>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label for="formGroupExampleInput">Localidad</label>
				<select id="city" name="city" class="form-control" readonly="true">
			 @foreach($cities as $value)
					   @if($studie->id_city == $value->id)
						   <option value="{{$value->id}}" selected>{{$value->name}}</option>
					   @endif
					   @endforeach
			</select>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="formGroupExampleInput">Escuela</label>
				<input type="text" class="form-control" name="school" value="{{old('school',$studie->school)}}" />
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				<label for="formGroupExampleInput">Curso</label>
				<input type="text" class="form-control" name="course" value="{{old('course',$studie->course)}}" />

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

				<h6>Por favor corrige los errores debajo:</h6>
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
<script src="{{ asset('public/assets/js/admin/studies/studies_edit.js') }}" type="text/javascript"></script>
@endsection