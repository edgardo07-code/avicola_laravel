@extends('layouts.app')

@section('titulo', 'Welcome')

@section('contenido')
<div class="container-fluid p-0">
    <div class="banner position-relative" style="background-image: url('{{ Vite::asset('resources/img/banner-bg.jpg') }}'); background-size: cover; background-position: center; height: 300px;">

        <div class="overlay position-absolute top-0 start-0 w-100 h-100 bg-dark" style="opacity: 0.4;"></div>

        <div class="d-flex justify-content-center align-items-center h-100 text-white position-relative">
            <div>
                <h1 class="display-4 text-center"> <strong>Bienvenido</strong></h1>
                <p class="lead text-center">Avícola PeñaHerrera</p>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col text-center">
                <h2 class="mb-4">Gracias por visitar nuestra sitio</h2>
                <p class="lead">Aquí encontrarás toda la información sobre nuestros productos y servicios.</p>
            </div>
        </div>
    </div>
</div>
@endsection
