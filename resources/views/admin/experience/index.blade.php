@extends('layouts/admin/panel') 
@section('title',"Listado Experiencia") 
@section('content')

<h1 class="display-6">{{$titulo}}</h1>
<br> @if($experience->isNotEmpty())
<div class="row">
  <div class="col-md-12 mt-4">
    @if (session('status'))

    <div class='alert alert-success alert-dismissible fade show' role='alert'>
      {{ session('status') }}
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
    </div>


    @endif
    <table id="experience-table" class="table table-striped table-bordered" style="width:100%">
      <thead>
        <tr>
          <th>Inicio</th>
          <th>Fin</th>
          <th>Empresa</th>
          <th>Provincia</th>
          <th>Ciudad</th>
          <th></th>
        </tr>
      </thead>

      <tbody>


        @forelse($experience as $exp)
        <tr>
          <td>{{$exp->date_start}}</td>
          <td>{{$exp->date_end}}</td>
          <td>{{$exp->company}}</td>
          <td>{{$exp->province}}</td>
          <td>{{$exp->city}}</td>
          <td align="center">
            <a class="btn btn-warning" href="{{route('experience.edit',$exp)}}"><span class="oi oi-pencil"></span></a>
            <button type="button" value="{{$exp->id}}" class="btn btn-danger trash_exp" data-toggle="modal" data-target="#exampleModalCenter"><span class="oi oi-trash"></span></button>
          </td>
        </tr>
        @empty
        <tr>
          <td>Sin resultados</td>

        </tr>
        @endforelse

      </tbody>

    </table>
  </div>
</div>




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
<p>No hay registros</p>

@endif
@endsection
 
@section('script')
<script src="{{ asset('public/assets/js/admin/experience/experience_index.js') }}" type="text/javascript"></script>
@endsection