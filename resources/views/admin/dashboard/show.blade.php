@extends('layouts/admin/panel') 
@section('title',"Dashboard") 
@section('content')



<h1 class="display-6">Dashboard</h1>

<input type="hidden" id="works" value="{{$works}}" />
<input type="hidden" id="skills" value="{{$skills}}" />
<input type="hidden" id="exp" value="{{$exp}}" />
<input type="hidden" id="studies" value="{{$studies}}" />

<div class="row">
  <div class="col-md-3 mt-4">

    <h5> <span class="badge badge-info">Antonio Ruiz Aznar</span></h5>
    <h5> <span class="badge badge-warning">Full-Stack Web Developer</span></h5>
  </div>
  <div class="col-md-6">
    <canvas id="myChart"></canvas>
  </div>
</div>
@endsection
 
@section('script')
<script src="{{ asset('public/assets/js/admin/dashboard/dashboard_show.js') }}" type="text/javascript"></script>
@endsection