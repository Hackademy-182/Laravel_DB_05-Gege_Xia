<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('annuncios', function (Blueprint $table) {
            $table->id();
            $table->string('titolo');
            $table->string('marca');
            $table->string('modello');
            $table->decimal('prezzo_giorno', 6, 2);
            $table->unsignedTinyInteger('posti');
            $table->string('tipo');
            $table->string('citta');
            $table->text('descrizione')->nullable();
            $table->string('contatto');
            $table->boolean('disponibile')->default(true);
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annuncios');
    }
};
