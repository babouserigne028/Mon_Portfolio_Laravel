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
        Schema::table('users', function (Blueprint $table) {
            // On vérifie si les colonnes n'existent pas déjà pour éviter les erreurs
            if (!Schema::hasColumn('users', 'first_name')) {
                $table->string('first_name')->nullable()->after('name');
            }
            if (!Schema::hasColumn('users', 'last_name')) {
                $table->string('last_name')->nullable()->after('first_name');
            }
            if (!Schema::hasColumn('users', 'apropos')) {
                $table->text('apropos')->nullable();
            }
            if (!Schema::hasColumn('users', 'photo')) {
                $table->string('photo')->nullable();
            }
            if (!Schema::hasColumn('users', 'lien_cv')) {
                $table->string('lien_cv')->nullable();
            }
            if (!Schema::hasColumn('users', 'nbre_annee_experience')) {
                $table->integer('nbre_annee_experience')->default(0);
            }
            if (!Schema::hasColumn('users', 'adresse')) {
                $table->string('adresse')->nullable();
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['first_name', 'last_name', 'apropos', 'photo', 'lien_cv', 'nbre_annee_experience', 'adresse']);
        });
    }
};