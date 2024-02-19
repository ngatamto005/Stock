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
        Schema::create('vente', function (Blueprint $table) {
            $table->id();
            $table->string('nom_client');
            $table->string('nom_produit');
            $table->string('quantite');
            $table->string('total');
            $table->string('total_general');
            $table->string('utilisateur');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vente');
    }
};
