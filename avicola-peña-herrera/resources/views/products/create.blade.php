@extends('layouts.app')

@section('titulo', 'Nuevo Producto')

@section('contenido')
<div class="container">
    <h2 class="mb-4"><i class="fa fa-box"></i> Crear Producto</h2>

    <form action="/products" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label"><i class="fa fa-tag"></i> Nombre del Producto</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label"><i class="fa fa-info-circle"></i> Descripción</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
            @error('description')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label"><i class="fa fa-dollar-sign"></i> Precio</label>
            <input type="number" class="form-control" id="price" name="price" step="0.01" min="0" value="{{ old('price') }}" required>
            @error('price')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="stock" class="form-label"><i class="fa fa-cubes"></i> Cantidad en Stock</label>
            <input type="number" class="form-control" id="stock" name="stock" min="0" value="{{ old('stock') }}" required>
            @error('stock')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3 d-flex align-items-center justify-content-between">
            <div>
                <label for="image" class="form-label"><i class="fa fa-image"></i> Imagen del Producto</label>
                <input type="file" class="form-control" id="image" name="image" accept="image/*" onchange="previewImage(event)">
            </div>
            @error('image')
                <small class="text-danger">{{ $message }}</small>
            @enderror
            <div>
                <img id="preview" alt="Vista previa de la imagen" class="img-thumbnail" style="display: none; max-width: 300px;">
            </div>
        </div>


        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar Producto</button>
    </form>
</div>
@endsection

@section('scripts')
<script>
    function previewImage(event) {
        var input = event.target;
        var preview = document.getElementById('preview');

        if (input.files && input.files[0]) {
            var file = input.files[0];

            // Validar si el archivo es una imagen
            if (file.type.startsWith('image/')) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    preview.src = e.target.result;
                    preview.style.display = 'block';
                };

                reader.readAsDataURL(file);
            } else {
                // Si no es una imagen, ocultar la vista previa
                preview.src = '';
                preview.style.display = 'none';
                alert('Por favor selecciona un archivo de imagen válido.');
            }
        } else {
            preview.src = '';
            preview.style.display = 'none';
        }
    }
</script>
@endsection
