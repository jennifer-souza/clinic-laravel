<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfessionalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professionals', function (Blueprint $table) {


            $table->id();
            $table->bigInteger('pessoa_id')->unsigned();
            $table->bigInteger('phone_id')->unsigned();
            $table->bigInteger('profession_id')->unsigned();
            $table->timestamps();

            $table->foreign('pessoa_id')
                ->references('id')
                ->on('pessoas')
                ->onDelete('cascade');
            
            $table->foreign('phone_id')
                ->references('id')
                ->on('phones')
                ->onDelete('cascade');

            $table->foreign('profession_id')
                ->references('id')
                ->on('professions')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('professionals');
    }
}
