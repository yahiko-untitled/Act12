<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Superheroe;
use Illuminate\Support\Facades\Storage;

class SuperheroeController extends Controller
{
    // Guardar nuevo superhéroe
    public function store(Request $request)
    {
        $request->validate([
            'real_name' => 'required|string|max:255',
            'hero_name' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'additional_info' => 'nullable|string',
        ]);

        // Guardar imagen en storage/app/public/superheroes
        $photoPath = $request->file('photo')->store('superheroes', 'public');

        Superheroe::create([
            'real_name' => $request->real_name,
            'hero_name' => $request->hero_name,
            'photo' => $photoPath,
            'additional_info' => $request->additional_info,
        ]);

        return redirect()->route('superheroes.index')->with('success', 'Superhéroe creado correctamente.');
    }

    // Actualizar superhéroe
    public function update(Request $request, Superheroe $superheroe)
    {
        $request->validate([
            'real_name' => 'required|string|max:255',
            'hero_name' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpg,png,jpeg|max:2048',
            'additional_info' => 'nullable|string',
        ]);

        if ($request->hasFile('photo')) {
            // Eliminar imagen anterior
            Storage::disk('public')->delete($superheroe->photo);
            // Guardar nueva imagen
            $photoPath = $request->file('photo')->store('superheroes', 'public');
            $superheroe->photo = $photoPath;
        }

        $superheroe->update([
            'real_name' => $request->real_name,
            'hero_name' => $request->hero_name,
            'additional_info' => $request->additional_info,
        ]);

        return redirect()->route('superheroes.index')->with('success', 'Superhéroe actualizado correctamente.');
    }

    // Borrado suave
    public function destroy(Superheroe $superheroe)
    {
        $superheroe->delete();
        return redirect()->route('superheroes.index')->with('success', 'Superhéroe eliminado correctamente.');
    }

    // Mostrar superhéroes eliminados
    public function deleted()
    {
        $superheroes = Superheroe::onlyTrashed()->get();
        return view('superheroes.deleted', compact('superheroes'));
    }

    // Restaurar un superhéroe eliminado
    public function restore($id)
    {
        $superheroe = Superheroe::onlyTrashed()->findOrFail($id);
        $superheroe->restore();
        return redirect()->route('superheroes.deleted')->with('success', 'Superhéroe restaurado correctamente.');
    }
}

