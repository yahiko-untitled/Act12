@extends('layouts.app')

@section('content')
    <h1>Editar Superhéroe</h1>
    <form action="{{ route('superheroes.update', $superheroe) }}" method="POST">
        @csrf
        @method('PUT')  <!-- Método PUT para actualizar -->
        
        <input type="text" name="nombre_real" value="{{ old('nombre_real', $superheroe->nombre_real) }}" placeholder="Nombre Real" required>
        <input type="text" name="nombre_superheroe" value="{{ old('nombre_superheroe', $superheroe->nombre_superheroe) }}" placeholder="Nombre del Superhéroe" required>
        <input type="text" name="foto_url" value="{{ old('foto_url', $superheroe->foto_url) }}" placeholder="URL de la Foto" required>
        <textarea name="informacion_adicional" placeholder="Información adicional">{{ old('informacion_adicional', $superheroe->informacion_adicional) }}</textarea>
        
        <button type="submit">Actualizar</button>
    </form>
@endsection
