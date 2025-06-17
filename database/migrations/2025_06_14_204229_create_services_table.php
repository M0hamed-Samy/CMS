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
            $table->string('icon');
            $table->string('main_image');
            $table->string('main_title');
            $table->string('main_about');
            $table->text('main_description');
            $table->text('secondary_image');
            $table->string('secondary_title');
            $table->string('secondary_description');
            $table->text('mini_image_1');
            $table->text('mini_title_1');
            $table->string('mini_title_image_1');
            $table->string('mini_description_1');
            $table->string('mini_about_1');
            $table->text('mini_image_2');
            $table->text('mini_title_2');
            $table->string('mini_title_image_2');
            $table->string('mini_description_2');
            $table->string('mini_about_2');
            $table->text('mini_image_3');
            $table->text('mini_title_3');
            $table->string('mini_title_image_3');
            $table->string('mini_description_3');
            $table->string('mini_about_3');
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
