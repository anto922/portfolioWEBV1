@extends('layouts/admin/Panel') 
@section('title',"Editar experiencia") 
@section('content')

<div class="card">
	<div class="card-header bg-dark text-white">
		<span class="oi oi-grid-four-up"></span> <b>Editar Experiencia</b>
	</div>
	<div class="card-body">
		<form method="POST" action="{{url("AdminPanel/Experiencia/{$experience->id}")}}" class="needs-validation"> {!! csrf_field() !!} {{method_field('PUT')}}
			<div class="row mt-4">
				<div class="col-md-3">
					<div class="form-group">
						<label for="formGroupExampleInput">Fecha de inicio</label>
						<input type="date" name="date_start" class="form-control" value="{{old('company',$experience->date_start)}}" />
					</div>
				</div>
				<div class="col-md-3">
					<div class="form-group">
						<label for="formGroupExampleInput">Fecha de fin</label>
						<input type="date" name="date_end" class="form-control" value="{{old('company',$experience->date_end)}}" />
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
						@if($experience->id_province <> $value->id)
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
							   @if($experience->id_city == $value->id)
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
						<label for="formGroupExampleInput">Empresa</label>
						<input type="text" class="form-control" name="company" value="{{old('company',$experience->company)}}" />
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="form-group">
						<label for="formGroupExampleInput">Descripción</label>
						<textarea class="form-control" name="description" rows="3">{{old('description',$experience->description)}}</textarea>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-2">
					<button type="submit" class="btn btn-primary">Actualizar</button>
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
<script src="{{ asset('public/assets/js/admin/experience/experience_edit.js') }}" type="text/javascript"></script>
@endsection