@extends('layout')

@section('content')
    <h1>Crear Direccion</h1>
    
    <form action="{{ url('/direccion') }}" method="post">
        @csrf
        <label for="calle">Calle: </label>
        <input type="text" name="calle"><br><br>
        
        <label for="numero_portal">Portal: </label>
        <input type="text" name="numero_portal"><br><br>
        
        <label for="codigo_postal">Codigo postal: </label>
        <input type="text" name="codigo_postal"><br><br>
        
        <label for="ciudad">Ciudad: </label>
        <input type="text" name="ciudad"><br><br>
        
        <button type="submit">Crear</button>
    </form>
    
    <h1>Lista</h1>
    
    <table>
        <tr>
            <th>Calle</th>
            <th>Portal</th>
            <th>Codigo postal</th>
            <th>Ciudad</th>
            <th>Accion</th>
        </tr>
        
        @foreach($direcciones as $direccion)
        <tr>
            <td>{{ $direccion->calle }}</td>
            <td>{{ $direccion->numero_portal }}</td>
            <td>{{ $direccion->codigo_postal }}</td>
            <td>{{ $direccion->ciudad }}</td>
            <td>
                <form action="{{ url('/direccion/' . $direccion->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
                
                <button><a href="{{ url('/direccion/edit/' . $direccion->id) }}">Editar</a></button>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
        