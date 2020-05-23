<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEnderecosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->id();
            $table->string('cep', 7);
            $table->string('address', 50);
            $table->string('number', 7);
            $table->string('complement', 20);
            $table->string('neighborhood', 30);
            $table->string('city', 50);
            $table->bigInteger('patient_id')->unsigned();
            $table->bigInteger('professional_id')->unsigned();
            $table->timestamps();

            $table->foreign('patient_id')
                ->references('id')
                ->on('patients')
                ->cascadeOnDelete();

            $table->foreign('professional_id')
                ->references('id')
                ->on('professionals')
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('enderecos');
    }
}
