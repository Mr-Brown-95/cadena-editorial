@extends('layouts.plantillabase')

@section('contenido')
    <h1>Agregar Sucursal</h1>

    <form action="/branches" method="POST">
        @csrf
        <div class="mb-3">
            <!-- <label for=id"" class="form-label">Código</label> -->
            <input id="id" name="id" type="hidden" class="form-control" tabindex="1" required>
        </div>
        <div class="mb-3">
            <label for="direccion" class="form-label">Dirección</label>
            <input id="direccion" name="direccion" type="text" class="form-control"  maxlength="100" tabindex="2" required>
        </div>
        <div class="mb-3">
            <label for="ciudad" class="form-label">Ciudad</label>
            <input id="ciudad" name="ciudad" type="text" class="form-control" maxlength="50" tabindex="3" required>
        </div>
        <div class="mb-3">
            <label for="provincia" class="form-label">Provincia</label>
            <input id="provincia" name="provincia" type="text" class="form-control" maxlength="50" tabindex="4" required>
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Telefono</label>
            <input id="telefono" name="telefono" type="text" class="form-control" maxlength="9" tabindex="5" required>
        </div>
        <div class="mb-3">
            <label for="imagen" class="form-label">Imagen</label>
            <input id="imagen" name="imagen" type="file" class="form-control" tabindex="6">
        </div>
        <a href="/branches" class="btn btn-secondary" tabindex="7">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="8">Guardar</button>
    </form>
@endsection
