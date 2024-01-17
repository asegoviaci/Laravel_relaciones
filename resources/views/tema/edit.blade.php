@extends('layout')

@section('content')
    <h1>Editar Temas</h1>

    <form action="{{ url('/tema/actualizar/' . $tema->id) }}" method="post">
        @csrf
        @method('PUT')
        <label for="nombre">Nombre del tema: </label>
        <input type="text" name="nombre" value="{{ $tema->nombre }}">
        <button type="submit">Update</button>
    </form>
@endsection
