@extends('layouts/admin/Panel') 
@section('title',"Editar experiencia") 
@section('content') @if (session('status'))

<div class='alert alert-success alert-dismissible fade show' role='alert'>
	{{ session('status') }}
	<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
</div>


@endif

<h1 class="display-6">Editar Perfil</h1>
<br>
<form method="POST" action="{{url("AdminPanel/Perfil/{$user->id}")}}" class="needs-validation" enctype="multipart/form-data"> {!! csrf_field() !!} {{method_field('PUT')}}

	<div class="row">
		<div class="col-md-5 mb-4">
			<img src="{{ asset('storage/app/'.$user->photo) }}" class="rounded border border-primary" alt="foto Perfil">
		</div>
	</div>

	<div class="row">

		<div class="col-md-6">
			<div class="form-group">
				<label for="name">Nombre</label>
				<input type="text" class="form-control" name="name" id="name" value="{{old('name',$user->name)}}" readonly/>
			</div>
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label for="surname">Apellidos</label>
				<input type="text" class="form-control" name="surname" id="surname" value="{{old('surname',$user->surname)}}" readonly/>
			</div>
		</div>
	</div>


	<div class="row">

		<div class="col-md-3">
			<div class="form-group">
				<label for="age">Edad</label>
				<input type="text" class="form-control" name="age" id="age" value="{{old('age',$user->age)}}" />
			</div>
		</div>

		<div class="col-md-3">
			<div class="form-group">
				<label for="telephone">Telefono</label>
				<input type="text" class="form-control" name="telephone" id="telephone" value="{{old('telephone',$user->telephone)}}" />
			</div>
		</div>

		<div class="col-md-3">
			<div class="form-group">
				<label for="email">Email</label>
				<input type="text" class="form-control" name="email" id="email" value="{{old('email',$user->email)}}" />
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-md-9">
			<div class="form-group">
				<label for="about_me">Acerca de mi</label>
				<textarea class="form-control" rows="6" cols="6" name="about_me" id="about_me">{{$user->about_me}}</textarea>
			</div>
		</div>


	</div>

	<div class="row">
		<div class="col-md-4">
			<label for="photo">Foto</label>
			<input type="file" name="photo" id="photo" class="form-control-file" />
		</div>
		<div class="col-md-3">
			<div class="form-group">
				<label for="password">Contraseña nueva</label>
				<input type="password" class="form-control" name="password" minlength="8" value="" />
			</div>
		</div>



	</div>
	<div class="row">
		<div class="col-md-2 offset-10">
			<button type="submit" class="btn btn-primary">Actualizar</button>
		</div>
	</div>

	@if($errors->any())

	<div class="row">
		<div class="col-md-6 col-md-offset-5">
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