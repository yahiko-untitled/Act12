@extends('layouts.app')

@section('content')
    <h1>Lista de Superhéroes</h1>
    <a href="{{ route('superheroes.create') }}">Agregar Superhéroe</a>
    <ul>
        @foreach ($superheroes as $superheroe)
            <li>
                <a href="{{ route('superheroes.show', $superheroe) }}">{{ $superheroe->nombre_superheroe }}</a>
                <a href="{{ route('superheroes.edit', $superheroe) }}">Editar</a>
                <form action="{{ route('superheroes.destroy', $superheroe) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Eliminar</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
