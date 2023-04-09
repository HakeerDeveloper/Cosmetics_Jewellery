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
        Schema::create('p_reviews', function (Blueprint $table) {
            $table->id('p_r_id');
            $table->unsignedBigInteger('p_id');
            $table->foreign('p_id')->references('p_id')->on('products');
            $table->string('name',40);
            $table->text('review');
            $table->text('img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('p_reviews');
    }
};
