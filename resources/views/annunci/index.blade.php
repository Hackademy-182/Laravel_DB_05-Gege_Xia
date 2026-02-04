@extends('layouts.app')

@section('content')
    @include('layouts.navbar')
    <div class="row g-4">

        <!-- FORM -->
        <div class="col-md-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title mb-3">Pubblica un annuncio</h5>
                    @if (session('ok'))
                        <div class="alert alert-success">{{ session('ok') }}</div>
                    @endif

                    <form method="POST" action="/annunci">
                        @csrf

                        <input class="form-control mb-2" name="titolo" placeholder="Titolo annuncio">
                        @error('titolo')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                        <input name="titolo" class="form-control mb-2" placeholder="Titolo annuncio">
                        <input name="marca" class="form-control mb-2" placeholder="Marca">
                        <input name="modello" class="form-control mb-2" placeholder="Modello">
                        <input name="prezzo_giorno" class="form-control mb-2" placeholder="Prezzo al giorno €">
                        <input name="posti" class="form-control mb-2" placeholder="Posti (es. 4)">

                        <input name="citta" class="form-control mb-2" placeholder="Città">
                        <input name="contatto" class="form-control mb-2" placeholder="Telefono o email">

                        @error('posti')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror

                        <button class="btn btn-primary w-100 mt-2">Pubblica</button>
                    </form>

                </div>
            </div>
        </div>

        <!-- LISTA ANNUNCI -->
        <div class="col-md-8">
            <h4 class="mb-3">Annunci disponibili</h4>

            @forelse($annunci as $a)
                <div class="card mb-3 shadow-sm">
                    <div class="card-body">
                        <h5 class="card-title">{{ $a->titolo }}</h5>
                        <p class="mb-1 text-muted">
                            {{ $a->marca }} {{ $a->modello }} — {{ $a->citta }}
                        </p>
                        <p class="fw-semibold mb-1">€ {{ $a->prezzo_giorno }} / giorno</p>
                        <p class="small">Contatto: {{ $a->contatto }}</p>
                    </div>
                </div>
            @empty
                <p class="text-muted">Nessun annuncio ancora pubblicato.</p>
            @endforelse
        </div>

    </div>
@endsection
