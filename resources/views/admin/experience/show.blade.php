@extends('layouts/admin/Panel')

@section('title',"Mostrar experiencia")

@section('content')

<h1 class="display-3">Mostrar Experiencia</h1>

  <div class="row mt-4">
	  <div class="col-md-2">
		  <div class="form-group">
			  <label for="formGroupExampleInput">Inicio</label>
		 <select class="form-control">
	      <option value="1999">1999</option>
			 <option value="1999">2000</option>
			 <option value="1999">2001</option>
			 <option value="1999">2002</option>
			 <option value="1999">2003</option>
			 <option value="1999">2004</option>
			 <option value="1999">2005</option>
			 <option value="1999">2006</option>
		 </select>
		  </div>
	  </div>
	   <div class="col-md-2">
		   <div class="form-group">
			   <label for="formGroupExampleInput">Fin</label>
		   	 <select class="form-control">
	      <option value="1999">1999</option>
			 <option value="1999">2000</option>
			 <option value="1999">2001</option>
			 <option value="1999">2002</option>
			 <option value="1999">2003</option>
			 <option value="1999">2004</option>
			 <option value="1999">2005</option>
			 <option value="1999">2006</option>
		 </select>
		   </div>
	  </div>
  </div>
	
	<div class="row">
			<div class="col-md-4">
		   <div class="form-group">
			      <label for="formGroupExampleInput">Empresa</label>
			   <input type="text" class="form-control" name="company"/>
			</div>
		</div>
	</div>
	<div class="row">
			<div class="col-md-5">
		   <div class="form-group">
			      <label for="formGroupExampleInput">Descripción</label>
			   <textarea class="form-control" name="description" rows="3"></textarea>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-md-2">
			<a href="{{url('/AdminPanel/Experiencia')}}"  class="btn btn-primary">Volver</a>
		</div>
	</div>
  


@endsection