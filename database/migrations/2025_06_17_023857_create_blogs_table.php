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
        Schema::create('blogs', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->longText('content');
    $table->longText('brief');
    $table->string('image'); // keep one image column
    $table->string('author_name');
    $table->string('image1')->nullable();
    $table->string('image2')->nullable();
    $table->string('image3')->nullable();
    $table->string('image4')->nullable();
    $table->string('image5')->nullable();
    $table->timestamps();
});

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
