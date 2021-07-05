@extends('layouts.plantillabase')

@section('css')
    <link hRef="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@section('contenido')
    <h1>Sucursales</h1>
    <div>
        <a href="branches/create" class="btn btn-primary">Crear</a>
    </div>
    <table id="sucursal" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
        <thead class="bg-dark text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Direccion</th>
            <th scope="col">Ciudad</th>
            <th scope="col">Provicncia</th>
            <th scope="col">Telefono</th>
            <th scope="col">Imagen</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($branches as  $branche)
            <tr>
                <td>{{$branche->id}}</td>
                <td>{{$branche->direccion}}</td>
                <td>{{$branche->ciudad}}</td>
                <td>{{$branche->provincia}}</td>
                <td>{{$branche->telefono}}</td>
                <td>{{$branche->imagen}}</td>
                <td>
                    <form action="{{ route('branches.destroy',$branche->id) }}" method="POST">
                        <a href="branches/{{$branche->id}}/edit" class="btn btn-info">Editar</a>
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
            $('#sucursal').DataTable();
        } );
    </script>
@endsection

@endsection
