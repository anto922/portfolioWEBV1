@extends('layouts/admin/panel') 
@section('title',"Listado Habilidades") 
@section('content')

<h1 class="display-6">{{$titulo}}</h1>
<br> @if (session('status'))

<div class='alert alert-success alert-dismissible fade show' role='alert'>
  {{ session('status') }}
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
</div>


@endif @if($skills->isNotEmpty())

<table id="skills_table" class="table table-striped table-bordered" style="width:100%">
  <thead>
    <tr>
      <th>Descripción</th>
      <th>Nivel</th>
      <th></th>
    </tr>
  </thead>

  <tbody>


    @forelse($skills as $skill)
    <tr>
      <td>{{$skill->description}}</td>
      <td>{{$skill->level}} %</td>

      <td align="center">
        <a class="btn btn-info" href="{{route('skill.edit',$skill)}}"><span class="oi oi-pencil"></span></a>
        <button type="button" value="{{$skill->id}}" class="btn btn-info trash_skill" data-toggle="modal" data-target="#exampleModalCenter"><span class="oi oi-trash"></span></button>
      </td>
    </tr>
    @empty
    <tr>
      <td>Sin resultados</td>

    </tr>
    @endforelse

  </tbody>
</table>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">ELIMINAR REGISTRO</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Está seguro de que desea eliminar el elemento seleccionado?
      </div>
      <div class="modal-footer">
        <button id="confirm" type="button" class="btn btn-danger">Aceptar</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
      </div>
    </div>
  </div>
  {!! csrf_field() !!}
</div>

@else
<p>No hay usuarios registrados</p>
@endif
@endsection
 
@section('script')
<script src="{{ asset('public/assets/js/admin/skills/skills_index.js') }}" type="text/javascript"></script>
@endsection