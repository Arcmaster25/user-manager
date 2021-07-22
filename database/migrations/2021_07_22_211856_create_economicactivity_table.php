<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEconomicactivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('economic_activity', function (Blueprint $table) {
            $table->id();
            $table->string('actividadEconomica', 60);
            $table->mediumInteger('codigoDeActividad');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('clients');
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
        Schema::dropIfExists('economicactivity');
    }
}
