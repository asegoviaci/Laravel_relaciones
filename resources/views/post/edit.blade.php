@extends('layout')

@section('content')
    <h1>Editar</h1>
    
    <form action="{{ url('/post/update/' . $post->id) }}" method="post">
        @csrf
        @method('PUT')
        
        <label for="titulo">Titulo:</label>
        <input type="text" name="titulo" value="{{ $post->titulo }}"><br>
        
        <label for="codigo">Codigo: </label>
        <input type="text" name="codigo" value="{{ $post->codigo }}"><br>
        
        <label for="usuario">Usuario: </label>
        <select name="usuario" id="usuario">
            @foreach($usuarios as $usuario)
                <option value="{{ $usuario->id }}">{{ $usuario->nombre }}</option>
            @endforeach
        </select><br><br>
        
        <button type="submit">Update</button>
    </form>
@endsection
