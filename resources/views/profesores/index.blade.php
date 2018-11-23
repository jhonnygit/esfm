@extends('layouts.app')
@section('content')
<h2 class="titulo">PLANTEL DE DOCENTES</h2>
<div class="row acerca-de align-items-center">
				
				<div class="col-12 col-lg-4 foto">
					<img src="{{asset('img/foto.jpg')}}" class="rounded-circle img-fluid" alt="">
					<p class="nombre">Jhonny fernandez - Prof. Sistemas computacionales</p>
				</div>
				<div class="col-12 col-lg-4 foto">
					<img src="{{asset('img/foto.jpg')}}" class="rounded-circle img-fluid" alt="">
					<p class="nombre">Carlos Arturo</p>
				</div>
				<div class="col-12 col-lg-4 foto">
					<img src="{{asset('img/foto.jpg')}}" class="rounded-circle img-fluid" alt="">
					<p class="nombre">Carlos Arturo</p>
				</div>
				<div class="col-12 col-lg-4 foto">
					<img src="{{asset('img/foto.jpg')}}" class="rounded-circle img-fluid" alt="">
					<p class="nombre">Carlos Arturo</p>
				</div>
</div>

@endsection