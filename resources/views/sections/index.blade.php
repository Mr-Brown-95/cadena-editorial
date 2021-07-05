@extends('layouts.plantillabase')

@section('css')
    <link hRef="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@section('contenido')
    <h1>Seccion</h1>
    <div>
        <a href="sections/create" class="btn btn-primary">Crear</a>
    </div>
    <table id="ejemplar" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
        <thead class="bg-dark text-white">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">Titulo de revista</th>
            <th scope="col">Titulo de seccion</th>
            <th scope="col">Extencion</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($sections as  $section)
            <tr>
                <td>{{$section->id}}</td>
                <td>{{$section->magazines['titulo']}}</td>
                <td>{{$section->titulo}}</td>
                <td>{{$section->extension}}</td>
                <td>
                    <form action="{{ route('sections.destroy',$section->id) }}" method="POST">
                        <a href="sections/{{$section->id}}/edit" class="btn btn-info">Editar</a>
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
            $('#ejemplar').DataTable();
        } );
    </script>
@endsection

@endsection
