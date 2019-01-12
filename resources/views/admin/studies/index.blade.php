@extends('layouts/admin/panel') 
@section('title',"Listado Estudios") 
@section('content')

<h1 class="mt-3">{{$titulo}}</h1>

@if (session('status'))

<div class="row">
  <div class="col-md-12 mt-4">
    @if (session('status'))

    <div class='alert alert-success alert-dismissible fade show' role='alert'>
      {{ session('status') }}
      <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
    </div>


    @endif @endif @if($studies->isNotEmpty())


    <table id="studies_table" class="table table-striped table-bordered" style="width:100%">
      <thead class="thead">
        <tr>
          <th>Curso</th>
          <th>Inicio</th>
          <th>Fin</th>
          <th>Escuela</th>
          <th>Provincia</th>
          <th>Ciudad</th>
          <th></th>
        </tr>
      </thead>

      <tbody>


        @forelse($studies as $studie)
        <tr>
          <td>{{$studie->course}}</td>
          <td>{{$studie->date_start}}</td>
          <td>{{$studie->date_end}}</td>
          <td>{{$studie->school}}</td>
          <td>{{$studie->province}}</td>
          <td>{{$studie->city}}</td>
          <td align="center">
            <a class="btn btn-warning" href="{{route('studie.edit',$studie)}}"><span class="oi oi-pencil"></span></a>
            <button type="button" value="{{$studie->id}}" class="btn btn-danger trash_stud" data-toggle="modal" data-target="#exampleModalCenter"><span class="oi oi-trash"></span></button>
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
<p>No hay usuarios registrados</p>
@endif
@endsection









</div>
</div>












@section('script')
<script src="{{ asset('public/assets/js/admin/studies/studies_index.js') }}" type="text/javascript"></script>
@endsection