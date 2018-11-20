@extends('layout') @section('content')
<!-- menu-->

<!-- menu-->
<div class="cuerpo">
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-4 col-md-12 col-sm-12 col-xl-4">
    {{-- <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12"> --}}
      <div class="rotacion justify-content-center">
        <a href="http://enterate.plataformate.com ">
          <img class="img-responsive " src={{ asset ( 'assets/img/Circulo1.png') }}> {{-- <img src={{ asset ( 'assets/img/Circulo1.png') }}> --}}
        </a>
      </div>
      <div class="indexText "> Entérate </div>
    </div>
    <div class="col-lg-4 col-md-12 col-sm-12 col-xl-4">
    {{-- <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12"> --}}
        <div class="rotacion justify-content-center">
          <a href="http://formate.plataformate.com ">
            <img class="img-responsive " src={{ asset ( 'assets/img/Circulo2.png') }}> {{-- <img src={{ asset ( 'assets/img/Circulo2.png') }}> --}}
          </a>
        </div>
        <div class="indexText "> Fórmate </div>
      </div>
      <div class="col-lg-4 col-md-12 col-sm-12 col-xl-4">
      {{-- <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12"> --}}
      <div class="rotacion justify-content-center">
            <a href="{{ URL::to( 'mapa') }} ">
              <img class="img-responsive " src={{ asset ( 'assets/img/Circulo3.png') }}> {{-- <img src={{ asset ( 'assets/img/Circulo3.png') }}> --}}
            </a>
          </div>
      <div class="indexText "> Caracterízate </div>
      </div>
  </div>
  {{-- container --}}
</div>
{{-- cuerpo --}}
</div>

<div>
@include('footer')
{{-- algo --}}
</div>
@endsection

@push('styles')
  <link rel="stylesheet " href="assets/css/map.css ">
  <link rel="stylesheet " type="text/css " href="assets/css/headerStyle.css ">
  {{-- <link rel="stylesheet " href="assets/css/style.css "> --}}
@endpush
