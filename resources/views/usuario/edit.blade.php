@extends('layout.layout')

@section('content')
    <h1>Editar Usuario</h1>

    <form action="{{ url('/usuario/update/' . $usuario->id) }}" method="post">
        @csrf
        @method('PUT')
        
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{ $usuario->nombre }}">
        
        <label for="edad">Edad:</label>
        <input type="text" name="edad" value="{{ $usuario->edad }}">
        
        <label for="email">Email:</label>
        <input type="text" name="email" value="{{ $usuario->email }}">
        
        <label for="fecha_nacimiento">Fecha de nacimiento:</label>
        <input type="date" name="fecha_nacimiento" value="{{ $usuario->fecha_nacimiento }}">
        
        <label for="genero">Género:</label>
        <select name="genero" id="genero">
            <option value="Masculino" {{ $usuario->genero == 'Masculino' ? 'selected' : '' }}>Masculino</option>
            <option value="Femenino" {{ $usuario->genero == 'Femenino' ? 'selected' : '' }}>Femenino</option>
            <option value="Otros" {{ $usuario->genero == 'Otros' ? 'selected' : '' }}>Otros</option>
        </select>
        
        <button type="submit">Update</button>
    </form>
@endsection
