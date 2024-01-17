@extends('layout.layout')

@section('content')
    <h1>Crear Usuario</h1>
    
    <form action="{{ url('/usuario') }}" method="POST">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="{{ old('nombre') }}"><br>
        @error('nombre')
            <p style="color: red;">No puede estar vacío</p>
        @enderror
        
        <label for="edad">Edad:</label>
        <input type="text" name="edad" value="{{ old('edad') }}"><br>
        @error('edad')
            <p style="color: red;">No puede estar vacío</p>
        @enderror
        
        <label for="email">Email:</label>
        <input type="email" name="email" value="{{ old('email') }}"><br>
        @error('email')
            <p style="color: red;">No puede estar vacío</p>
        @enderror
        
        <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
        <input type="date" name="fecha_nacimiento" value="{{ old('fecha_nacimiento') }}"><br>
        @error('fecha_nacimiento')
            <p style="color: red;">No puede estar vacío</p>
        @enderror
        
        <label for="genero">Género:</label>
        <select name="genero" id="genero">
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
            <option value="Otros">Otros</option>
        </select>
        @error('genero')
            <p style="color: red;">Tiene que ser Masculino, Femenino u Otros</p>
        @enderror
        
        <button type="submit">Crear</button>
    </form>
    
    <h1>Lista</h1>
    
    <ul>
        @foreach($usuarios as $usuario)
            <li>
                <form action="{{ url('/usuario/' . $usuario->id) }}" method="post">
                    {{ $usuario->nombre }}
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                    <button><a href="{{ url('/usuario/edit/' . $usuario->id) }}">Editar</a></button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
