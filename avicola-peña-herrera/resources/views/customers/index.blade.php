@extends('layouts.app')

@section('titulo', 'Clientes')

@section('contenido')
<div class="container mt-5">
    <!-- Encabezado -->
    <div class="mb-4 d-flex justify-content-between align-items-center">
        <h1 class="display-4">Nuestros Clientes</h1>
        <a href="/customers/create" class="btn btn-primary btn-lg"><i class="fa fa-plus-circle"></i> Nuevo Cliente</a>
    </div>

    <!-- Tabla de Clientes -->
    <div class="table-responsive">
        <table class="table table-striped table-bordered">
            <thead class="table-dark">
              <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Teléfono</th>
                <th scope="col">Dirección</th>
                <th scope="col" class="text-center">Acciones</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->name }}</td>
                    <td>{{ $customer->phone }}</td>
                    <td>{{ $customer->address }}</td>
                    <td class="text-center">
                        <a href="/customers/{{ $customer->id }}" class="btn btn-success btn-sm"><i class="fa fa-eye"></i> Ver</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
    </div>
</div>
@endsection
