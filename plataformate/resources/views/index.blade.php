@extends('layout') @section('content')
<!-- menu-->

<!-- menu-->
<div class="container">
<br>
<br>
  <div class="col-lg-4 col-md-4 col-xs-4 ">
    <div class="rotacion ">
      <a href="http://enterate.plataformate.com ">
        <img class="img-responsive " src={{ asset ( 'assets/img/Circulo1.png') }}>
      </a>
    </div>
    <div class="indexText "> Entérate </div>
  </div>
  <div class="col-lg-4 col-md-4 col-xs-4 ">
    <div class="rotacion ">
      <a href="http://formate.plataformate.com ">
        <img class="img-responsive " src={{ asset ( 'assets/img/Circulo2.png') }}>
      </a>
    </div>
    <div class="indexText "> Fórmate </div>
  </div>
  <div class="col-lg-4 col-md-4 col-xs-4 ">
    <div class="rotacion ">
      <a href="{{ URL::to( 'mapa') }} ">
        <img class="img-responsive " src={{ asset ( 'assets/img/Circulo3.png') }}>
      </a>
    </div>
    <div class="indexText "> Caracterízate </div>
  </div>
</div>
@include('footer')
@endsection

@push('styles')
  <link rel="stylesheet " href="assets/css/map.css ">
  {{-- <link rel="stylesheet " href="assets/css/style.css "> --}}
  <link rel="stylesheet " type="text/css " href="assets/css/headerStyle.css ">
@endpush
