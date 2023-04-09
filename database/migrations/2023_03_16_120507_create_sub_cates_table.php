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
        Schema::create('sub_cates', function (Blueprint $table) {
            $table->id('sub_cate_id');
            $table->string('sub_cate_name',30 );
            $table->unsignedBigInteger('cate_id' );
            $table->foreign('cate_id')->references('cate_id')->on('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_cates');
    }
};
