@extends('layouts.app')

@section('titulo', $customer->name)

@section('contenido')
<div class="container mt-4">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    <h3 class="card-title"><i class="fa fa-user"></i> Detalles del Cliente</h3>
                </div>
                <div class="card-body">
                    <h5 class="card-title"><i class="fa fa-id-badge"></i> {{ $customer->name }}</h5>
                    <p class="card-text"><strong>Email:</strong> {{ $customer->email }}</p>
                    <p class="card-text"><strong>Teléfono:</strong> {{ $customer->phone }}</p>
                    <p class="card-text"><strong>Dirección:</strong> {{ $customer->address }}</p>
                </div>
                <div class="card-footer text-end">
                    <a href="{{ route('customers.index') }}" class="btn btn-secondary"><i class="fa fa-arrow-left"></i> </a>
                    <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i> </a>
                    <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de que quieres eliminar este cliente?');"><i class="fa fa-trash"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
