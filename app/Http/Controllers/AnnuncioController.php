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
        \App\Models\Annuncio::create($r->all());

        return redirect('/annunci');
    }
}
