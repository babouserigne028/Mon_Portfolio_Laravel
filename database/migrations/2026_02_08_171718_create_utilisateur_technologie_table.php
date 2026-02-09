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
        Schema::create('utilisateur_technologie', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('utilisateur_id');
            $table->foreign('utilisateur_id')->references('id')->on('utilisateurs')->onDelete('cascade');
            $table->uuid('technologie_id');
            $table->foreign('technologie_id')->references('id')->on('technologies')->onDelete('cascade');
            $table->enum('niveau_maitrise', ['Débutant', 'Intermédiaire', 'Avancé', 'Expert'])->default('Intermédiaire');
            $table->timestamps();
            $table->unique(['utilisateur_id', 'technologie_id'], 'unique_utilisateur_technologie');
            $table->index('utilisateur_id');
            $table->index('technologie_id');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utilisateur_technologie');
    }
};
