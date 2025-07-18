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
        Schema::create('videos', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('video_path'); 
            $table->enum('video_type', ['url', 'file']);
             $table->string('video_img')->nullable();
            $table->timestamps();
        });
         Schema::table('videos', function (Blueprint $table) {
        $table->string('video_img')->nullable();
    });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('videos');
        Schema::table('videos', function (Blueprint $table) {
        $table->dropColumn('video_img');
    });
    }
};
