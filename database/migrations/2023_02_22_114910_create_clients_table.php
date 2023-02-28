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
        Schema::create('clients', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('user_name',30);
            $table->string('user_email',50);
            $table->string('user_password',45);
            $table->string('user_check_password',45);
            $table->string('user_mobile_no',45);
            $table->string('user_Address',100);
            $table->string('user_country',30);
            $table->string('user_city',35);
            $table->string('user_Town',30);
            $table->integer('user_Postal_code');
            $table->string('user_Gender',30);
            $table->text('user_img');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
