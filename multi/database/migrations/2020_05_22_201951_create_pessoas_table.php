<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('cpf', 16);
            $table->string('rg', 16);
            $table->date('birth');
            $table->string('email', 50);
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
        Schema::dropIfExists('pessoas');
    }
}
