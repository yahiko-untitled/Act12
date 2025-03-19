<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Superheroe;

class SuperheroeController extends Controller
{
    public function index()
    {
        $superheroes = Superheroe::all();
        return view('superheroes.index', compact('superheroes'));
    }

    public function create()
    {
        return view('superheroes.create');
    }

    public function store(Request $request)
    {
        Superheroe::create($request->all());
        return redirect()->route('superheroes.index');
    }

    public function show(Superheroe $superheroe)
    {
        return view('superheroes.show', compact('superheroe'));
    }

    public function edit(Superheroe $superheroe)
    {
        return view('superheroes.edit', compact('superheroe'));
    }

    public function update(Request $request, Superheroe $superheroe)
    {
        $superheroe->update($request->all());
        return redirect()->route('superheroes.index');
    }

    public function destroy(Superheroe $superheroe)
    {
        $superheroe->delete();
        return redirect()->route('superheroes.index');
    }
}
