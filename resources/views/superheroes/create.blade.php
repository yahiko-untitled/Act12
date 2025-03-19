@extends('layouts.app')

@section('content')
    <h1>Agregar Superhéroe</h1>
    <form action="{{ route('superheroes.store') }}" method="POST">
        @csrf
        <input type="text" name="nombre_real" placeholder="Nombre Real" required>
        <input type="text" name="nombre_superheroe" placeholder="Nombre del Superhéroe" required>
        <input type="text" name="foto_url" placeholder="URL de la Foto" required>
        <textarea name="informacion_adicional" placeholder="Información adicional"></textarea>
        <button type="submit">Guardar</button>
    </form>
@endsection
