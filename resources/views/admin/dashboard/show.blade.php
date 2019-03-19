@extends('layouts/admin/panel') 
@section('title',"Dashboard") 
@section('content')



<h1 class="display-6">Dashboard</h1>

<input type="hidden" id="works" value="{{$works}}" />
<input type="hidden" id="skills" value="{{$skills}}" />
<input type="hidden" id="exp" value="{{$exp}}" />
<input type="hidden" id="studies" value="{{$studies}}" />
<input type="hidden" id="skills_levels" value="{{$skills_levels}}" />

<div class="row mt-4">
  <div class="col-sm-3">
    <a class="card-link text-dark" href="{{url('/AdminPanel/Experiencia')}}">
      <div class="card bg-light">
        <div class="card-body">
          <h5 class="card-title text-center">Experiencia</h5>
          <p class="card-text text-center text-info display-4"><span class="oi oi-briefcase"></span>&nbsp;&nbsp;{{$exp}}</p>

        </div>
    </a>
    </div>
  </div>
  <div class="col-sm-3">
    <a class="card-link text-dark" href="{{url('AdminPanel/Habilidades')}}">
      <div class="card bg-light">
        <div class="card-body">
          <h5 class="card-title text-center">Habilidades</h5>
          <p class="card-text text-center text-info display-4"><span class="oi oi-brush"></span>&nbsp;&nbsp;{{$skills}}</p>

        </div>
    </a>
    </div>
  </div>
  <div class="col-sm-3">
    <a class="card-link text-dark" href="{{url('/AdminPanel/Estudios')}}">
      <div class="card bg-light">
        <div class="card-body">
          <h5 class="card-title text-center">Formación</h5>
          <p class="card-text text-center text-info display-4"><span class="oi oi-book"></span>&nbsp;&nbsp;{{$studies}}</p>

        </div>
    </a>
    </div>
  </div>
  <div class="col-sm-3">
    <a class="card-link text-dark" href="{{url('/AdminPanel/Trabajos')}}">
      <div class="card bg-light">
        <div class="card-body">
          <h5 class="card-title text-center">Trabajos</h5>
          <p class="card-text text-center text-info display-4"><span class="oi oi-folder"></span>&nbsp;&nbsp;{{$works}}</p>

        </div>
    </a>
    </div>
  </div>
</div>
<div class="row mt-4">
  <div class="col-md-10 mx-auto">
    <canvas id="ChartSkills"></canvas>
  </div>

</div>
@endsection
 
@section('script')
<script src="{{ asset('public/assets/js/admin/dashboard/dashboard_show.js') }}" type="text/javascript"></script>
@endsection