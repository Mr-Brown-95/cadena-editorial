@extends('layouts.plantillabase')

@section('contenido')
    <h1>Agregar Seccion</h1>

    <form action="/sections" method="POST">
        @csrf
        <div class="mb-3">
            <!-- <label for=id"" class="form-label">Código</label> -->
            <input id="id" name="id" type="hidden" class="form-control" tabindex="1" required>
        </div>
        <div class="mb-3">
            <label for="numero_registro_id" class="form-label">Titulo de revista</label>
            <select id="numero_registro_id" class="form-select" tabindex="3" name="numero_registro_id">
                @foreach($magazines as  $magazine)
                    <option value="{{$magazine->id}}">{{$magazine->titulo}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="titulo" class="form-label">Titulo de seccion</label>
            <input id="titulo" name="titulo" type="text" class="form-control" tabindex="3" required>
        </div>
        <div class="mb-3">
            <label for="extension" class="form-label">Extension</label>
            <input id="extension" name="extension" type="number" class="form-control" tabindex="4" required>
        </div>
        <a href="/sections" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
    </form>
@endsection
