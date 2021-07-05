@extends('layouts.plantillabase')

@section('contenido')
    <h1>Agregar Periodista</h1>

    <form action="/journalists" method="POST">
        @csrf
        <div class="mb-3">
            <!-- <label for=id"" class="form-label">Código</label> -->
            <input id="id" name="id" type="hidden" class="form-control" tabindex="1" required>
        </div>
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input id="nombre" name="nombre" type="text" class="form-control" maxlength="50" tabindex="2" required>
        </div>
        <div class="mb-3">
            <label for="apellido1" class="form-label">Primer apellido</label>
            <input id="apellido1" name="apellido1" type="text" class="form-control" maxlength="50" tabindex="3" required>
        </div>
        <div class="mb-3">
            <label for="apellido2" class="form-label">Segundo apellido</label>
            <input id="apellido2" name="apellido2" type="text" class="form-control" maxlength="50" tabindex="4" required>
        </div>
        <div class="mb-3">
            <label for="telefono" class="form-label">Telefono</label>
            <input id="telefono" name="telefono" type="text" class="form-control" maxlength="9" tabindex="5" required>
        </div>
        <div class="mb-3">
            <label for="especialidad" class="form-label">Especialidad</label>
            <input id="especialidad" name="especialidad" type="text" class="form-control" maxlength="50" tabindex="5" required>
        </div>
        <a href="/journalists" class="btn btn-secondary" tabindex="7">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="8">Guardar</button>
    </form>
@endsection
