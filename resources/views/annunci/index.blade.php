@extends('layouts.app')
@section('content')
    <form class="mb-4" method="POST" action="/annunci">@csrf
        <input class="form-control mb-2" name="titolo" placeholder="Titolo">
        <input class="form-control mb-2" name="marca" placeholder="Marca">
        <input class="form-control mb-2" name="modello" placeholder="Modello">
        <input class="form-control mb-2" name="prezzo_giorno" placeholder="Prezzo giorno">
        <button class="btn btn-primary">Pubblica</button>
    </form>

    @foreach ($annunci as $a)
        <div class="border rounded p-3 mb-2">
            <b>{{ $a->titolo }}</b>
            <div>{{ $a->marca }} {{ $a->modello }} — €{{ $a->prezzo_giorno }}</div>
        </div>
    @endforeach
@endsection
