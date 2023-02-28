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
        Schema::create('products', function (Blueprint $table) {
            $table->id('p_id');
            $table->string('p_name',40);
            $table->string('p_short_desc',50);
            $table->string('p_long_desc',100);
            $table->integer('p_price');
            $table->text('p_img');
            $table->unsignedBigInteger('b_id');
            $table->foreign('b_id')->references('brand_id')->on('brands');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
