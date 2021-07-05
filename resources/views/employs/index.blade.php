@extends('layouts.plantillabase')

@section('css')
    <link hRef="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@section('contenido')
    <h1>Empleados</h1>
    <div>
        <a href="employs/create" class="btn btn-primary">Crear</a>
    </div>
    <table id="empleados" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
        <thead class="bg-dark text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Sucursal</th>
            <th scope="col">Nif</th>
            <th scope="col">Nombre</th>
            <th scope="col">Primer apellido</th>
            <th scope="col">Segundo apellido</th>
            <th scope="col">Telefono</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($employs as  $employ)
            <tr>
                <td>{{$employ->id}}</td>
                <td>{{$employ->branches['direccion']}}</td>
                <td>{{$employ->nif}}</td>
                <td>{{$employ->nombre}}</td>
                <td>{{$employ->apellido1}}</td>
                <td>{{$employ->apellido2}}</td>
                <td>{{$employ->telefono}}</td>
                <td>
                    <form action="{{ route('employs.destroy',$employ->id) }}" method="POST">
                        <a href="employs/{{$employ->id}}/edit" class="btn btn-info">Editar</a>
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
            $('#empleados').DataTable();
        } );
    </script>
@endsection

@endsection
