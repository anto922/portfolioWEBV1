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
              <div class="col-md-6">
                <h4>- Antonio Ruiz Aznar</h4>
                <h4>- Full Stack Developer Web</h4>
              </div>

            </div>

            <div class="row">

              <div class="col-md-6">
                <canvas id="myChart1" width="800" heigth="800"></canvas>
              </div>
              <div class="col-md-6">
                <canvas id="myChart2" width="800" heigth="800"></canvas>
              </div>

            </div>







          </p>



        </div>
      </div>
    </div>
  </div>
</div>
@endsection
 
@section('script')
<script src="{{ asset('public/assets/js/admin/dashboard/dashboard_show.js') }}" type="text/javascript"></script>
@endsection