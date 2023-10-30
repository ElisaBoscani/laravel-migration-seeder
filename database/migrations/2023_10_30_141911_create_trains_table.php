<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Azienda
     * Stazione di partenza
     *Stazione di arrivo
     *Orario di partenza
     *Orario di arrivo
     *Codice Treno
     *Numero Carrozze
     *In orario
     *Cancellato
     */
    public function up(): void
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("azienda", 50)->nullable();
            $table->string("stazione_di_partenza", 100)->nullable();
            $table->time("orario_di_partenza")->nullable();
            $table->time("orario_di_arrivo")->nullable();
            $table->string("codice_treno", 6)->nullable();
            $table->tinyInteger("numero_carozze")->nullable()->unsigned();
            $table->boolean("in_orario")->default(1);
            $table->boolean("cancellato")->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
