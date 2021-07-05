@extends('layouts.plantillabase')

@section('contenido')
    <h1>Agregar Ejemplar</h1>

    <form action="/copies" method="POST">
        @csrf
        <div class="mb-3">
            <!-- <label for=id"" class="form-label">Código</label> -->
            <input id="id" name="id" type="hidden" class="form-control" tabindex="1" required>
        </div>
        <div class="mb-3">
            <label for="numero_registro_id" class="form-label">Titulo</label>
            <select id="numero_registro_id" class="form-select" tabindex="3" name="numero_registro_id">
                @foreach($magazines as  $magazine)
                    <option value="{{$magazine->id}}">{{$magazine->titulo}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="fecha" class="form-label">Fecha</label>
            <input id="fecha" name="fecha" type="date" class="form-control" tabindex="3" required>
        </div>
        <div class="mb-3">
            <label for="numero_paginas" class="form-label">Numero de paginas</label>
            <input id="numero_paginas" name="numero_paginas" type="number" class="form-control" tabindex="4" required>
        </div>
        <div class="mb-3">
            <label for="numero_ejemplares" class="form-label">Numero de ejemplares</label>
            <input id="numero_ejemplares" name="numero_ejemplares" type="number" class="form-control" tabindex="5" required>
        </div>
        <a href="/copies" class="btn btn-secondary" tabindex="7">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="8">Guardar</button>
    </form>
@endsection
