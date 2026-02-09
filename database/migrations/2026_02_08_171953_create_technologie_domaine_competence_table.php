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
        Schema::create('technologie_domaine_competence', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('technologie_id');
            $table->foreign('technologie_id')->references('id')->on('technologies')->onDelete('cascade');
            $table->uuid('domaine_competence_id');
            $table->foreign('domaine_competence_id')->references('id')->on('domaine_competences')->onDelete('cascade');
            $table->timestamps();
            $table->unique(['technologie_id', 'domaine_competence_id'], 'unique_techno_domaine');
            $table->index('technologie_id');
            $table->index('domaine_competence_id');;
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('technologie_domaine_competence');
    }
};
