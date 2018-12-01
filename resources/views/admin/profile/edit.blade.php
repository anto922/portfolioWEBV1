@extends('layouts/admin/Panel')

@section('title',"Editar experiencia")

@section('content')

<h1 class="display-3">Editar Perfil</h1>

@if($errors->any())

<div class="row">
	<div class="col-md-6 col-md-offset-5">
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

	@if (session('status'))
    
		<div class='alert alert-success alert-dismissible fade show' role='alert'>
        {{ session('status') }}
		<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
		</div>
		
   
@endif


<form method="POST" action="{{url("AdminPanel/Perfil/{$user->id}")}}" class="needs-validation" enctype="multipart/form-data">
	{!! csrf_field() !!}
	{{method_field('PUT')}}
	
	<div class="row">
	<div class="col-md-5">
	 <img src="{{ asset('storage/app/'.$user->photo) }}" class="rounded" alt="foto Perfil"> 
	 </div>
	</div>
<div class="row">
<div class="col-md-4">
<label for="formGroupExampleInput">Foto</label>
<input type="file" name="photo" class="form-control-file"/>
</div>
</div>
	<div class="row">

			<div class="col-md-5">
		   <div class="form-group">
			      <label for="formGroupExampleInput">Nombre</label>
			   <input type="text" class="form-control" name="name" value="{{old('name',$user->name)}}" readonly/>
			</div>
		</div>
			<div class="col-md-3">
		   <div class="form-group">
			      <label for="formGroupExampleInput">Apellidos</label>
			   <input type="text" class="form-control" name="surname" value="{{old('surname',$user->surname)}}" readonly/>
			</div>
		</div>
	</div>

	
	<div class="row">
			<div class="col-md-3">
		   <div class="form-group">
		     <label for="formGroupExampleInput">Edad</label>
			   <input type="text" class="form-control" name="age" value="{{old('age',$user->age)}}"/>
		   </div>
		   </div>
		   	<div class="col-md-3">
		   <div class="form-group">
		     <label for="formGroupExampleInput">Telefono</label>
			   <input type="text" class="form-control" name="telephone" value="{{old('telephone',$user->telephone)}}"/>
		   </div>
		   </div>
		    	<div class="col-md-3">
		   <div class="form-group">
		     <label for="formGroupExampleInput">Email</label>
			   <input type="text" class="form-control" name="email" value="{{old('email',$user->email)}}"/>
		   </div>
		   </div>
	</div>
	<div class="row">
	
	<div class="col-md-9">
	 <div class="form-group">
		     <label for="formGroupExampleInput">Acerca de mi</label>
	<textarea  class="form-control" rows="6" cols="6" name="about_me">{{$user->about_me}}</textarea>
	</div>
	</div>
	
	
	</div>
	<div class="row">
		<div class="col-md-3">
		   <div class="form-group">
		   <label for="formGroupExampleInput">Contraseña</label>
		   <input type="password" class="form-control"  value="{{old('password',$user->password)}}"/>
		   </div>
		   </div>
		   <div class="col-md-3">
		   <div class="form-group">
		   <label for="formGroupExampleInput">Contraseña nueva</label>
		   <input type="password" class="form-control" name="password"  minlength="8" value="" />
		   </div>
		   </div>
	</div>
	<div class="row">
		<div class="col-md-2">
			<button type="submit" class="btn btn-primary">Actualizar</button>
		</div>
	</div>
  
</form>

@endsection