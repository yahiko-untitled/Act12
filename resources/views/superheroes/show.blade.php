@extends('layouts.app')

@section('content')
    <h1>{{ $superheroe->nombre_superheroe }}</h1>
    <p><strong>Nombre Real:</strong> {{ $superheroe->nombre_real }}</p>
    <p><strong>Foto:</strong> <img src="{{ $superheroe->foto_url }}" alt="Foto de {{ $superheroe->nombre_superheroe }}" width="200"></p>
    <p><strong>Información adicional:</strong> {{ $superheroe->informacion_adicional }}</p>

    <a href="{{ route('superheroes.edit', $superheroe) }}">Editar</a>
    <form action="{{ route('superheroes.destroy', $superheroe) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
@endsection
