@extends('layout')

@section('content')
    <h1>Editar Direccion</h1>
    
    <form action="{{ url('/direccion/update/' . $direccion->id) }}" method="post">
        @csrf
        @method('PUT')
        
        <label for="calle">Calle: </label>
        <input type="text" name="calle" value="{{ $direccion->calle }}"><br><br>
        
        <label for="numero_portal">Portal: </label>
        <input type="text" name="numero_portal" value="{{ $direccion->numero_portal }}"><br><br>
        
        <label for="codigo_postal">Código postal: </label>
        <input type="text" name="codigo_postal" value="{{ $direccion->codigo_postal }}"><br><br>
        
        <label for="ciudad">Ciudad: </label>
        <input type="text" name="ciudad" value="{{ $direccion->ciudad }}"><br><br>
        
        <button type="submit">Update</button>
    </form>
@endsection
