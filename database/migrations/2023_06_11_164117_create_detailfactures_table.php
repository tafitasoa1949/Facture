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
        Schema::create('detailfactures', function (Blueprint $table) {
            $table->string('idfacture')->nullable();
            $table->string('designation');
            $table->string('unite');
            $table->integer('quantite');
            $table->integer('prix');
            $table->integer('montant');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detailfactures');
    }
};
