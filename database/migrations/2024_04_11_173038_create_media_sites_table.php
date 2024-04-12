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
        Schema::create('media_sites', function (Blueprint $table) {
            $table->id();
            $table->foreignId('tourist_site')->constrained('tourist_sites')->onDelete('cascade');
            $table->string('path');
            $table->string('type')->nullable(); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('media_sites');
    }
};