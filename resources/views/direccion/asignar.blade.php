@extends('layout')

@section('content')
    <h1>Asignar</h1>

    <form action="{{ url('/asignar') }}" method="post">
        @csrf
        <label for="usuario">Seleccionar Usuario</label>
        <select name="usuario" id="usuario">
            @foreach($usuarios as $usuario)
                <option value="{{ $usuario->id }}">{{ $usuario->nombre }}</option>
            @endforeach
        </select>

        <label for="direccion">Seleccionar Dirección</label>
        <select name="direccion" id="direccion">
            @foreach($direcciones as $direccion)
                <option value="{{ $direccion->id }}">
                    {{ $direccion->calle }} {{ $direccion->numero_portal }} {{ $direccion->ciudad }}
                </option>
            @endforeach
        </select>
        
        <button type="submit">Asignar</button>
    </form>
@endsection
