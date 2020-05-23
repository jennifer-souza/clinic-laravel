<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('professional_id')->unsigned();
            $table->bigInteger('patient_id')->unsigned();
            $table->bigInteger('type_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->timestamps();

            $table->foreign('professional_id')
                ->references('id')
                ->on('professionals')
                ->cascadeOnDelete();

            $table->foreign('patient_id')
                ->references('id')
                ->on('patients')
                ->cascadeOnDelete();

            $table->foreign('type_id')
                ->references('id')
                ->on('types')
                ->cascadeOnDelete();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
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
        Schema::dropIfExists('schedules');
    }
}
