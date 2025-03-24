@extends('layouts.app')

@section('content')
    <h1>Superhéroes Eliminados</h1>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre Real</th>
                <th>Nombre del Héroe</th>
                <th>Foto</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($superheroes as $superheroe)
                <tr>
                    <td>{{ $superheroe->real_name }}</td>
                    <td>{{ $superheroe->hero_name }}</td>
                    <td><img src="{{ asset('storage/' . $superheroe->photo) }}" width="100"></td>
                    <td>
                        <form action="{{ route('superheroes.restore', $superheroe->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-success">Restaurar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
