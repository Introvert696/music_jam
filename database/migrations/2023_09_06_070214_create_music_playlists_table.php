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
        Schema::create('musicPlaylists', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("music_id");
            $table->unsignedBigInteger("playlist_id");
            $table->timestamps();

            $table->foreign("music_id")->references("id")->on("music");
            $table->foreign("playlist_id")->references("id")->on("playlists");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('musicPlaylists');
    }
};
