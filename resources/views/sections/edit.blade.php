@extends('layouts.plantillabase')

@section('contenido')
    <h1>Editar Seccion</h1>

    <form action="/sections/{{$sections->id}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <!-- <label for=id"" class="form-label">Código</label> -->
            <input id="id" name="id" type="hidden" class="form-control" value="{{$sections->id}}" tabindex="1" required>
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
            <input id="titulo" name="titulo" type="text" class="form-control" value="{{$sections->titulo}}" tabindex="3" required>
        </div>
        <div class="mb-3">
            <label for="extension" class="form-label">Extension</label>
            <input id="extension" name="extension" type="number" class="form-control" value="{{$sections->extension}}" tabindex="4" required>
        </div>
        <a href="/sections" class="btn btn-secondary" tabindex="5">Cancelar</a>
        <button type="submit" class="btn btn-primary" tabindex="6">Guardar</button>
    </form>
@endsection
