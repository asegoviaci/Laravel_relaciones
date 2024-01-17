@extends('layout')

@section('content')
    <h1>Crear Temas</h1>
    
    <form action="{{ url('/tema') }}" method="post">
        @csrf
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre">
        <button type="submit">Crear</button>
    </form>
    
    <h1>Lista de Temas</h1>
    
    <table>
        <tr>
            <th>Temas</th>
            <th>Acciones</th>
        </tr>
        
        @foreach($temas as $tema)
            <tr>
                <td>{{ $tema->nombre }}</td>
                <td>
                    <form action="{{ url('/tema/' . $tema->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                        <button><a href="{{ url('/tema/edit/' . $tema->id) }}">Editar</a></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
