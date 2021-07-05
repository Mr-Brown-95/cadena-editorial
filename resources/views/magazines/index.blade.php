@extends('layouts.plantillabase')

@section('css')
    <link hRef="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@section('contenido')
    <h1>Revistas</h1>
    <div>
        <a href="magazines/create" class="btn btn-primary">Crear</a>
    </div>
    <table id="revistas" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
        <thead class="bg-dark text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Titulo</th>
            <th scope="col">Periodicidad</th>
            <th scope="col">Tipo</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($magazines as  $magazine)
            <tr>
                <td>{{$magazine->id}}</td>
                <td>{{$magazine->titulo}}</td>
                <td>{{$magazine->periodicidad}}</td>
                <td>{{$magazine->tipo}}</td>
                <td>
                    <form action="{{ route('magazines.destroy',$magazine->id) }}" method="POST">
                        <a href="magazines/{{$magazine->id}}/edit" class="btn btn-info">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Borrar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#revistas').DataTable();
        } );
    </script>
@endsection

@endsection
