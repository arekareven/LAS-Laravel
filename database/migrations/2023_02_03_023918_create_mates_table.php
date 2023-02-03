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
        Schema::create('mates', function (Blueprint $table) {
            $table->id();
            $table->integer('id_costumers');
            $table->string('name');
            $table->string('place_of_birth');
            $table->string('date_of_birth');
            $table->string('id_card_address');
            $table->string('residence_address');
            $table->string('profession');
            $table->string('phone_number');
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
        Schema::dropIfExists('mates');
    }
};
