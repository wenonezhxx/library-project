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
        Schema::create('exhibitions_has_artworks', function (Blueprint $table) {
            $table->integer('exhibition_id');
            $table->integer('artwork_id');
            $table->primary(['exhibition_id', 'artwork_id']);
            $table->foreign('exhibition_id')->references('id')->on('exhibitions');
            $table->foreign('artwork_id')->references('id')->on('artworks');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exhibitions_has_artworks');
    }
};
