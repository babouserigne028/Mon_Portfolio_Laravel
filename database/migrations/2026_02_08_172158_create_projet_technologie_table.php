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
        Schema::create('projet_technologie', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('projet_id');
            $table->foreign('projet_id')->references('id')->on('projets')->onDelete('cascade');
            $table->uuid('technologie_id');
            $table->foreign('technologie_id')->references('id')->on('technologies')->onDelete('cascade');
            $table->timestamps();
            $table->unique(['projet_id', 'technologie_id'], 'unique_projet_technologie');
            $table->index('projet_id');
            $table->index('technologie_id');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projet_technologie');
    }
};
