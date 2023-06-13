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
        Schema::create('factures', function (Blueprint $table) {
            $table->string('idfacture')->nullable();
            $table->integer('idclient')->nullable();
            $table->integer('montan_hors_taxe')->nullable();
            $table->integer('tva')->nullable();
            $table->integer('ttc')->nullable();
            $table->integer('avance')->nullable();
            $table->integer('montant_payer')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('factures');
    }
};
