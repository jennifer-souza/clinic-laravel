<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('patient_id')->unsigned();
            $table->foreign('patient_id')->references('id')->on('patients')->cascadeOnDelete();
            $table->bigInteger('professional_id')->unsigned();
            $table->foreign('professional_id')->references('id')->on('professionals')->cascadeOnDelete();
            $table->string('zip', 7);
            $table->string('address', 50);
            $table->string('number', 7);
            $table->string('complement', 20);
            $table->string('neighborhood', 30);
            $table->string('city', 50);
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
        Schema::dropIfExists('addresses');
    }
}
