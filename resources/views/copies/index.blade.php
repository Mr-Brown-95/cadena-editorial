@extends('layouts.plantillabase')

@section('css')
    <link hRef="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@section('contenido')
    <h1>Ejemplares</h1>
    <div>
        <a href="copies/create" class="btn btn-primary">Crear</a>
    </div>
    <table id="ejemplares" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
        <thead class="bg-dark text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Titulo</th>
            <th scope="col">Fecha</th>
            <th scope="col">Nmero de paginas</th>
            <th scope="col">Numero de ejemplares</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($copies as $copy)
            <tr>
                <td>{{$copy->id}}</td>
                <td>{{$copy->magazines['titulo']}}</td>
                <td>{{$copy->fecha}}</td>
                <td>{{$copy->numero_paginas}}</td>
                <td>{{$copy->numero_ejemplares}}</td>
                <td>
                    <form action="{{ route('copies.destroy',$copy->id) }}" method="POST">
                        <a href="copies/{{$copy->id}}/edit" class="btn btn-info">Editar</a>
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
            $('#ejemplares').DataTable();
        } );
    </script>
@endsection

@endsection
