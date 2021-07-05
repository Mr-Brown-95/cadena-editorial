@extends('layouts.plantillabase')

@section('css')
    <link hRef="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@section('contenido')
    <h1>Periodistas</h1>
    <div>
        <a href="journalists/create" class="btn btn-primary">Crear</a>
    </div>
    <table id="peridistas" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
        <thead class="bg-dark text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre</th>
            <th scope="col">Primer apellido</th>
            <th scope="col">Segundo apellido</th>
            <th scope="col">Telefono</th>
            <th scope="col">especialidad</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($journalists as  $journalist)
            <tr>
                <td>{{$journalist->id}}</td>
                <td>{{$journalist->nombre}}</td>
                <td>{{$journalist->apellido1}}</td>
                <td>{{$journalist->apellido2}}</td>
                <td>{{$journalist->telefono}}</td>
                <td>{{$journalist->especialidad}}</td>
                <td>
                    <form action="{{ route('journalists.destroy',$journalist->id) }}" method="POST">
                        <a href="journalists/{{$journalist->id}}/edit" class="btn btn-info">Editar</a>
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
            $('#periodistas').DataTable();
        } );
    </script>
@endsection

@endsection
