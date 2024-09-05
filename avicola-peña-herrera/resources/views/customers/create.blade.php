@extends('layouts.app')

@section('titulo', 'Nuevo Cliente')

@section('contenido')
<div class="container mt-5">
    <h1 class="mb-4">Crear Cliente</h1>

    <form action="/customers" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label"><i class="fa fa-user"></i> Nombre</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label"><i class="fa fa-envelope"></i> Correo Electrónico</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label"><i class="fa fa-phone"></i> Teléfono</label>
            <input type="text" class="form-control" id="phone" name="phone" required>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label"><i class="fa fa-map-marker-alt"></i> Dirección</label>
            <input type="text" class="form-control" id="address" name="address" required>
        </div>

        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar Cliente</button>
    </form>
</div>
@endsection
