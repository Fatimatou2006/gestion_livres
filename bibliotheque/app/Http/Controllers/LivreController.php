<?php

namespace App\Http\Controllers;

use App\Http\Requests\LivreRequest;
use App\Models\Livre;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    public function index()
    {
        $livres = Livre::all();

        return view('livres.index', compact('livres'));
    }


    public function create()
    {
        return view('livres.create');
    }


    public function store(LivreRequest $request)
    {
        Livre::create($request->validated());

        return redirect()
            ->route('livres.index')
            ->with('success', 'Ouvrage ajouté avec succès');
    }


    public function show(Livre $livre)
    {
        return view('livres.show', compact('livre'));
    }


    public function edit(Livre $livre)
    {
        return view('livres.edit', compact('livre'));
    }


    public function update(LivreRequest $request, Livre $livre)
    {
        $livre->update($request->validated());

        return redirect()
            ->route('livres.index')
            ->with('success', 'Ouvrage modifié avec succès');
    }


    public function destroy(Livre $livre)
    {
        $livre->delete();

        return redirect()
            ->route('livres.index')
            ->with('success', 'Ouvrage supprimé avec succès');
    }
}