@extends('layouts.app')

@section('titulo', 'Editar Cliente')

@section('contenido')
<div class="container mt-5">
    <h1 class="mb-4">Editar Cliente</h1>

    <form action="{{ route('customers.update', $customer->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label"><i class="fa fa-user"></i> Nombre</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $customer->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label"><i class="fa fa-envelope"></i> Correo Electrónico</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email', $customer->email) }}" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label"><i class="fa fa-phone"></i> Teléfono</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone', $customer->phone) }}" required>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label"><i class="fa fa-map-marker-alt"></i> Dirección</label>
            <input type="text" class="form-control" id="address" name="address" value="{{ old('address', $customer->address) }}" required>
        </div>

        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar Cambios</button>
    </form>
</div>
@endsection
