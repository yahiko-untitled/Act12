@foreach ($superheroes as $superheroe)
    @if (!$superheroe->trashed()) {{-- No mostrar los eliminados --}}
        <tr>
            <td>{{ $superheroe->real_name }}</td>
            <td>{{ $superheroe->hero_name }}</td>
            <td><img src="{{ asset('storage/' . $superheroe->photo) }}" width="100"></td>
            <td>{{ $superheroe->additional_info }}</td>
            <td>
                <a href="{{ route('superheroes.edit', $superheroe->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('superheroes.destroy', $superheroe->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </td>
        </tr>
    @endif
@endforeach
