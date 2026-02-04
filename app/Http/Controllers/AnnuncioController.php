<?php

namespace App\Http\Controllers;

class AnnuncioController extends Controller
{
    public function index()
    {
        $annunci = \App\Models\Annuncio::latest()->get();

        return view('annunci.index', compact('annunci'));
    }

    public function store(\Illuminate\Http\Request $r)
    {
        $dati = $r->validate([
            'titolo' => 'required',
            'marca' => 'required',
            'modello' => 'required',
            'prezzo_giorno' => 'required|numeric',
            'posti' => 'required|integer|min:1|max:9',
            'citta' => 'required',
            'contatto' => 'required',
        ]);

        \App\Models\Annuncio::create($dati);

        return redirect('/annunci')->with('ok', 'Annuncio pubblicato!');

    }
}
