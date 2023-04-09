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
        Schema::create('customers', function (Blueprint $table) {
            $table->id('cus_id');
            $table->string('cus_f_name',30);
            $table->string('cus_l_name',30);
            $table->string('cus_email',40)->unique();
            $table->string('cus_country',30);
            $table->text('cus_address');
            $table->string('cus_city',20);
            $table->string('cus_phone',11);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
