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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('marital_status');
            $table->string('place_of_birth');
            $table->string('date_of_birth');
            $table->string('id_card_number')->unique();
            $table->string('phone_number');
            $table->string('status_of_residence');
            $table->string('profession');
            $table->string('id_card_address');
            $table->string('residence_address');
            $table->string('amenability');
            $table->string('education');
            $table->string('gender');
            $table->string('office_number');
            $table->string('mate_name');
            $table->string('mate_place_of_birth');
            $table->string('mate_date_of_birth');
            $table->string('mate_id_card_address');
            $table->string('mate_residence_address');
            $table->string('mate_profession');
            $table->string('mate_phone_number');
            $table->string('family_name');
            $table->string('family_relationship');
            $table->string('family_residence_address');
            $table->string('family_phone_number');
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
        Schema::dropIfExists('customers');
    }
};
