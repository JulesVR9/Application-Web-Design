<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Superhero;

class SuperheroController extends Controller
{
    // Mostrar lista
    public function index()
    {
        $superheroes = Superhero::all();
        return view('superheroes.index', compact('superheroes'));
    }

    // Mostrar formulario crear
    public function create()
    {
        return view('superheroes.create');
    }

    // Guardar en BD
    public function store(Request $request)
    {
        Superhero::create($request->all());
        return redirect()->route('superheroes.index');
    }

    // Mostrar uno
    public function show($id)
    {
        $superhero = Superhero::findOrFail($id);
        return view('superheroes.show', compact('superhero'));
    }

    // Formulario editar
    public function edit($id)
    {
        $superhero = Superhero::findOrFail($id);
        return view('superheroes.edit', compact('superhero'));
    }

    // Actualizar
    public function update(Request $request, $id)
    {
        $superhero = Superhero::findOrFail($id);
        $superhero->update($request->all());
        return redirect()->route('superheroes.index');
    }

    // Eliminar
    public function destroy($id)
    {
        $superhero = Superhero::findOrFail($id);
        $superhero->delete();
        return redirect()->route('superheroes.index');
    }
}