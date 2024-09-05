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

    <div class="container mb-3 mt-5 d-flex justify-content-center align-items-center">
        <div class="row g-0">
          <div class="col-md-6 d-flex align-items-center">
            <img src="{{ Vite::asset('resources/img/pollos.jpeg') }}" class="img-fluid rounded-start w-100" alt="..." style="max-height: 50vh; object-fit: cover;">
          </div>
          <div class="col-md-6 d-flex align-items-center p-5">
            <div class="card-body text-center">
              <h5 class="card-title mb-3"> <strong>Calidad y Frescura en cada Producto</strong> </h5>
              <p class="card-text">En Avícola Peña Herrera nos dedicamos a ofrecer productos avícolas frescos y de la más alta calidad. Desde huevos y pollos de corral hasta productos procesados, nos esforzamos por garantizar la mejor selección para tu hogar o negocio.</p>
              <p class="card-text"><a href="/products   " class="btn btn-primary">Conoce más</a></p>
            </div>
          </div>
        </div>
      </div>

</div>
@endsection
