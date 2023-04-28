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
        Schema::create('capacities', function (Blueprint $table) {
            $table->id();
            $table->integer('id_application');
            $table->string('business_name');
            $table->string('business_sector');
            $table->string('business_status');
            $table->string('business_start');
            $table->string('customer_start');
            $table->string('deed_number');
            $table->string('profession');
            $table->string('deed_date');
            $table->string('npwp');
            $table->string('npwp_date');
            $table->string('business_address');
            $table->text('content');
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
        Schema::dropIfExists('capacities');
    }
};
