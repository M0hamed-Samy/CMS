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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('icon')->nullable();
            $table->string('title_image');
            $table->string('title');
            $table->string('about')->nullable();
            $table->text('description1');
            $table->text('importance');
            $table->string('small_image');
            $table->string('mini_title')->nullable();
            $table->text('description2')->nullable();
            $table->text('large_image')->nullable();
            $table->string('mini_one_image')->nullable();
            $table->string('mini_two_image')->nullable();
            $table->string('mini_three_image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
