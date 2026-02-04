<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Annuncio extends Model
{
    protected $fillable = [
        'titolo',
        'marca',
        'modello',
        'prezzo_giorno',
        'posti',
        'tipo',
        'citta',
        'descrizione',
        'contatto',
        'disponibile',
    ];
}
