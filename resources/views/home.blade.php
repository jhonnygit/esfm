@extends('layouts.app')

@section('content')
             
<!--
    <div class="panel-body">
        You are logged in!
         @can('admin')
         admin
         @endcan
    </div>-->

    <div class="row mt-3">
            <div class="col-12 mt-3">
                <div class="carousel slide" id="secondary-carousel" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#secondary-carousel" data-slid-to="0" class="active"></li>
                        <li data-target="#secondary-carousel" data-slid-to="1"></li>
                        <li data-target="#secondary-carousel" data-slid-to="2"></li>
                    </ol>

                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="carousel-caption d-block">
                                <h4>Frontis ESFM</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, possimus!</p>
                            </div>
                            <img src="{{asset('img/carousel1.jpg')}}" alt="">
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-caption d-block">
                                <h4>Patio principal y ambientes de educación</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, possimus!</p>
                            </div>
                            <img src="{{asset('img/carousel2.jpg')}}" alt="">
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-caption d-block">
                                <h4>Ambientes administrativos</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, possimus!</p>
                            </div>
                            <img src="{{asset('img/carousel3.jpg')}}" alt="">
                        </div>
                    </div>

                    <a href="#secondary-carousel" class="carousel-control-prev" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Anterior</span>
                    </a>

                    <a href="#secondary-carousel" class="carousel-control-next" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Siguiente</span>
                    </a>
                </div>
            </div>
    </div>

    <div class="row">
            <div class="col">
                <div class="card-group mt-3">
                    <div class="card">
                        <img src="{{asset('img/DSC05457.jpg')}}" class="card-image-top img-fluid" alt="">
                        <div class="card-block">
                            <h1 class="card-title">Mision</h1>
                            <p class="card-text">Una institucion formadora de profesores y profesoras en Educación Intracultural e
                            Intercultural Bilingue (quechua - castellano), con competencias pedagógicas, didácticas,
                            científicas, orientada al desarrollo de actitudes valores y normas hacia la toma de conciencia democrática,
                             participativa, comunitaria, productiva y socio-linguistica.</p>
                            
                        </div>
                        
                    </div>

                    <div class="card">
                        <img src="{{asset('img/DSC05328.jpg')}}" class="card-image-top img-fluid" alt="">
                        <div class="card-block">
                            <h1 class="card-title">Vision</h1>
                            <p class="card-text">Una población de hombres y mujeres docentes que se han formado en el
                            marco de un conjunto de actividades valores y normas con una orientación democrática 
                            intracultural e intercultural de respecto, tolerancia, reciprocidad y complementariedad,
                            entre los miembros del entorno socio-linguistico quechua castellano.</p>
                            
                        </div>
                    </div>

                    <div class="card">
                        <img src="{{asset('img/DSC05313.jpg')}}" class="card-image-top img-fluid" alt="">
                        <div class="card-block">
                            <h1 class="card-title">Objetivo</h1>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt natus, odit eius impedit provident fugiat voluptatum, doloremque repudiandae nemo aspernatur delectus quas, placeat alias animi pariatur culpa sunt asperiores, et!</p>
                            
                        </div>                       
                    </div>
                </div>
            </div>
    </div>
      
@endsection
