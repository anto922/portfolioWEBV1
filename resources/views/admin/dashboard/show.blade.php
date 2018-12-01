@extends('layouts/admin/panel')

@section('title',"Dashboard")

@section('content')

<div class="container">

<div class="row">

<div class="col-md-12">

<div class="card text-white bg-dark mt-3">
  <div class="card-header">Dashboard <button class="btn btn-danger float-right">Exportar PDF</button></div>
  <div class="card-body">
    <h5 class="card-title"></h5>
    <p class="card-text">

     
    <div class="row">
    
    <div class="col-md-4">
    <canvas  id="myChart1"></canvas>
    </div>
      <div class="col-md-4">
      <canvas  id="myChart2"></canvas>
    </div>
      <div class="col-md-4">
      <canvas  id="myChart3"></canvas>
    </div>
    
    
    </div>
    
    
    
    
    
    
    
    </p>
    
    
    
  </div>
</div>
</div>
</div>
</div>
@endsection