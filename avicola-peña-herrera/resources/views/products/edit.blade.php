@extends('layouts.app')

@section('titulo', 'Editar Producto')

@section('contenido')
<div class="container">
    <h2 class="mb-4"><i class="fa fa-box"></i> Editar Producto</h2>

    <form action="/products/{{ $product->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT') <!-- Método PUT para actualización -->

        <div class="mb-3">
            <label for="name" class="form-label"><i class="fa fa-tag"></i> Nombre del Producto</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $product->name) }}" required>
            @error('name')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label"><i class="fa fa-info-circle"></i> Descripción</label>
            <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $product->description) }}</textarea>
            @error('description')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label"><i class="fa fa-dollar-sign"></i> Precio</label>
            <input type="number" class="form-control" id="price" name="price" step="0.01" min="0" value="{{ old('price', $product->price) }}" required>
            @error('price')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="stock" class="form-label"><i class="fa fa-cubes"></i> Cantidad en Stock</label>
            <input type="number" class="form-control" id="stock" name="stock" min="0" value="{{ old('stock', $product->stock) }}" required>
            @error('stock')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            <label for="image" class="form-label"><i class="fa fa-image"></i> Imagen del Producto</label>
            <input type="file" class="form-control" id="image" name="image" accept="image/*" onchange="previewImage(event)">
            @error('image')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>

        <div class="mb-3">
            @if($product->product_image)
                <img src="{{ Storage::url($product->product_image) }}" alt="Imagen Actual del Producto" class="img-thumbnail" style="max-width: 300px;">
            @endif
            <img id="preview" src="#" alt="Vista previa de la imagen" class="img-thumbnail" style="display: none; max-width: 300px;">
        </div>

        <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Guardar Cambios</button>
    </form>
</div>
@endsection

@section('scripts')
<script>
    function previewImage(event) {
        var input = event.target;
        var reader = new FileReader();

        reader.onload = function() {
            var preview = document.getElementById('preview');
            preview.src = reader.result;
            preview.style.display = 'block';
        };

        reader.readAsDataURL(input.files[0]);
    }
</script>
@endsection
