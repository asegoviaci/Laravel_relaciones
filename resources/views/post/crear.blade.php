@extends('layout')

@section('content')
    <h1>Crear Post</h1>
    
    <form action="{{ url('/post') }}" method="post">
        @csrf
        <label for="titulo">Titulo: </label>
        <input type="text" name="titulo"><br>
        
        <label for="codigo">Codigo: </label>
        <input type="text" name="codigo"><br>
        
        <label for="usuario_id">Usuario: </label>
        <select name="usuario_id"><br>
            @foreach($usuarios as $usuario)
                <option value="{{ $usuario->id }}">{{ $usuario->nombre }}</option>
            @endforeach
        </select><br>
        
        <label for="temas">Temas:</label>
        @foreach($temas as $tema)
            <input type="checkbox" name="temas[]" value="{{ $tema->id }}">
            <label>{{ $tema->nombre }}</label>
        @endforeach
        <br>
        
        <button type="submit">Crear</button>
    </form>
    
    <h1>Lista de Posts</h1>
    
    <table>
        <tr>
            <th>Titulo</th>
            <th>Código</th>
            <th>Acciones</th>
        </tr>
        
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->titulo }}</td>
                <td>{{ $post->codigo }}</td>
                <td>
                    <form action="{{ url('/post/' . $post->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                        <button><a href="{{ url('/post/edit/' . $post->id) }}">Editar</a></button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
    
    <h1>Usuarios con Posts</h1>
    
    <table>
        <tr>
            <th>Usuarios</th>
            <th>Info</th>
            <th>Temas</th>
        </tr>
        
        @foreach($usuariosconposts as $usuario)
            <tr>
                <td>{{ $usuario->nombre }}</td>
                <td>
                    <ul>
                        @foreach($usuario->posts as $post)
                            <li>{{ $post->titulo }} - {{ $post->codigo }}</li>
                        @endforeach
                    </ul>
                </td>
                <td>
                    <ul>
                        @foreach($usuario->posts as $post)
                            @foreach($post->temas as $tema)
                                <li>{{ $tema->nombre }}</li>
                            @endforeach
                        @endforeach
                    </ul>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
