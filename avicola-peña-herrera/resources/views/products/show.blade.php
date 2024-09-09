@extends('layouts.app')

@section('titulo', $product->name)

@section('contenido')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h3 class="card-title"><i class="fa fa-box"></i> Detalles del Producto</h3>
                </div>
                <div class="card-body">
                    <img src="{{ Storage::url($product->product_image) }}" class="card-img-top" style="max-width: 200px" alt="{{ $product->name }}">
                    <h5 class="card-title"><i class="fa fa-tag"></i> {{ $product->name }}</h5>
                    <p class="card-text"><strong>Descripción:</strong> {{ $product->description }}</p>
                    <p class="card-text"><strong>Precio:</strong> ${{ number_format($product->price, 2) }}</p>
                    <p class="card-text"><strong>Stock:</strong> {{ $product->stock }} unidades</p>
                    @if($product->imagen)
                        <div class="mb-3">
                            <img src="{{ asset('storage/' . $product->imagen) }}" alt="Imagen de {{ $product->name }}" class="img-fluid rounded">
                        </div>
                    @endif
                </div>
                <div class="card-footer text-end">
                    <a href="{{ route('products.index') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> </a>
                    <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i> </a>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este producto?');"><i class="fa fa-trash"></i> </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
