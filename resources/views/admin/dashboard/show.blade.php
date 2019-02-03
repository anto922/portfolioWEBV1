@extends('layouts/admin/panel') 
@section('title',"Dashboard") 
@section('content')

<div class="container">

  <div class="row">
    <input type="hidden" id="works" value="{{$works}}" />
    <input type="hidden" id="skills" value="{{$skills}}" />
    <input type="hidden" id="exp" value="{{$exp}}" />
    <input type="hidden" id="studies" value="{{$studies}}" />

    <div class="col-md-12">

      <div class="card mt-3">
        <div class="card-header bg-dark text-white"><b>Dashboard</b> <a href="javascript:void(0)" data-toggle="modal" data-target="#cv_pdf" data-whatever="@mdo" class="btn btn-danger float-right"><span class="oi oi-document"></span> Exportar CV</a></div>
        <div class="card-body">
          <h5 class="card-title"></h5>
          <p class="card-text">
            <div class="row">
              <div class="col-md-6">


                <h5> <span class="badge badge-info">Antonio Ruiz Aznar</span></h5>
                <h5> <span class="badge badge-warning">Full-Stack Web Developer</span></h5>

              </div>
              <div class="col-md-6">
                <canvas id="myChart"></canvas>
              </div>
            </div>
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

  @include('admin.pdf.modal_pdf') 
@section('script')
<script src="{{ asset('public/assets/js/admin/dashboard/dashboard_show.js') }}" type="text/javascript"></script>
@endsection