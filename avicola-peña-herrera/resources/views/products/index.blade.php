@extends('layouts.app')

@section('titulo', 'Productos')

@section('contenido')
<div class="container mt-5">
    <!-- Encabezado -->
    <div class="mb-4 text-center">
        <h1 class="display-4 mb-3">Nuestros Productos</h1>
        <!--<p class="lead">Explora nuestra selección de productos de alta calidad.</p>-->
    </div>

    <!-- Verifica si hay productos -->
    @if ($products->isEmpty())
        <div class="alert alert-warning text-center">
            No se encontraron registros en la tabla de productos.
        </div>
    @else
        <!-- Tarjetas de Productos -->
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach ($products as $product)
                <div class="col">
                    <div class="card h-100 shadow-sm border-light">
                        <img src="{{ Storage::url($product->product_image) }}" class="card-img-top" alt="{{ $product->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text text-truncate" style="max-height: 4.5em;">{{ $product->description }}</p>
                            <div class="d-flex justify-content-between">
                                <span class="text-muted">Precio:</span>
                                <h6 class="mb-0">${{ $product->price }}</h6>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <span class="text-muted">Stock:</span>
                                <h6 class="mb-0">{{ $product->stock }}</h6>
                            </div>
                        </div>
                        <div class="card-footer text-center">
                            <a href="/products/{{ $product->id }}" class="btn btn-primary btn-sm"><i class="fa fa-eye"></i> Ver</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
