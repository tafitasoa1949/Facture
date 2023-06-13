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
        Schema::create('ecritures', function (Blueprint $table) {
            $table->id();
            $table->string('reference');
            $table->integer('compte')->nullable();
            $table->string('tiers');
            $table->string('intitule')->nullable();
            $table->string('libelle')->nullable();
            $table->integer('debit');
            $table->integer('credit');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ecritures');
    }
};
