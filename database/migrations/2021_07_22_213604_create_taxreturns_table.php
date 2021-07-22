<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxreturnsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tax_returns', function (Blueprint $table) {
            $table->id();
            $table->string('tipo', 255);
            $table->date('periodo');
            $table->date('ano');
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
        Schema::dropIfExists('taxreturns');
    }
}
