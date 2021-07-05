@extends('layouts.plantillabase')

@section('css')
    <link hRef="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@section('contenido')
    <h1>Periodista escribe revista</h1>
    <div>
        <a href="journalist_magazines/create" class="btn btn-primary">Crear</a>
    </div>
    <table id="journalist_magazines" class="table table-striped table-bordered shadow-lg mt-4" style="width:100%">
        <thead class="bg-dark text-white">
        <tr>
            <th scope="col">Titulo de revista</th>
            <th scope="col">Periodista</th>
            <th scope="col">Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($journalists->magazines as  $magazine)
            <tr>
                <td>{{$magazine->numero_registro_id}}</td>
                <td>{{$magazine->periodista_id}}</td>
                <td>
                    <form action="{{ route('journalist_magazines.destroy',$magazine->id) }}" method="POST">
                        <a href="journalist_magazines/{{$magazine->id}}/edit" class="btn btn-info">Editar</a>
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
            $('#journalist_magazines').DataTable();
        } );
    </script>
@endsection

@endsection
