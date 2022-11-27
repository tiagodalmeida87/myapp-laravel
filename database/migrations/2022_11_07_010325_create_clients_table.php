<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id('user_id');

            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone', 13)->unique()->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('street_name', 250)->nullable();
            $table->string('street_number', 10)->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
};
