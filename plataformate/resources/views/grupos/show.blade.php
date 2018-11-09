@extends('layout')
@section('meta-title','Organizaciones Juveniles')
@section('content')
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">	    
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">#PLATAFORMATE</a>
	    </div>
	    
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav"></ul>	     
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="http://enterate.plataformate.com">ENTERATE</a></li>
	        <li class="active"><a href="{{ URL::to('mapa') }}">ORGANIZACIONES JUVENILES</a></li>
	        <li><a href="http://formarte.plataformate.com">FORMATE VIRTUAL</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>	
	<!-- contenido-->
	<div class="container" id="contenido">
		<div class="row">
		<div class="images">			
			  @if($post->photos->count() === 1)
				<figure><img src="{{ url('storage', $post->photos->first()->url) }}" class="img-responsive" alt=""></figure>			
			@elseif($post->photos->count() > 1)
				<div class="gallery">
					@foreach($post->photos->take(4) as $photo)
					  	@include('grupos.carousel')
					@endforeach
				</div>
			@endif			
		</div>
		</div>
		<div class="row">
			<div class="col-xs-12">
				<h1>{{ $post->ngrupo }}</h1>
				<p><strong>Representante:</strong>  {{ $post->representante }}</p>				
				{!! $post->body !!}				
			</div>			
		</div>
	</div>
	


	<!-- contenido-->


@endsection
@push('styles')

 <!-- Estilos CSS -->  
 <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
<link rel="stylesheet" href="../assets/css/grupos.css">
<link rel="stylesheet" href="../assets/css/twitter-boostrap.css">
@endpush

@push('scripts')    
   <!-- jQuery -->
    <script src="../assets/js/jquery.min.js"></script>
    <!-- Bootstrap JavaScript -->
		<script src="../assets/js/bootstrap.min.js"></script>
		<script src="../assets/js/twitter-bootstrap.min.js"></script>
    <script src="../assets/js/gallery.js"></script>
@endpush