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
            $table->string('first_name',30);
            $table->string('last_name',30);
            $table->string('user_name',30);
            $table->string('user_email',50);
            $table->string('user_password',45);
            $table->string('user_country',30);
            $table->string('user_mobile_no',45);
            $table->text('user_token');

            $table->string('user_Address',100);

            
            $table->boolean('user_Gender');
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
