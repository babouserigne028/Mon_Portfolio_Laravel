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
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nom', 100);
            $table->string('prenom', 100);
            $table->string('email', 255)->unique();
            $table->string('mot_de_passe', 255);
            $table->string('photo', 500)->nullable();
            $table->text('apropos')->nullable();
            $table->string('lien_cv', 500)->nullable();
            $table->integer('nbre_annee_experience')->default(0);
            $table->text('description')->nullable();
            $table->string('adresse', 500)->nullable();
            $table->timestamps();
            $table->index('email');

        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('utilisateurs');
    }
};
