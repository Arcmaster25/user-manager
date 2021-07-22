<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersdateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 100);
            $table->smallInteger('cedula');
            $table->string('nombreComercial', 200);
            $table->smallInteger('telefono');
            $table->string('direccion', 255);
            $table->string('regimen', 50);
            $table->string('representanteLegal', 100);
            $table->smallInteger('cedulaEepresentanteLegal');
            $table->string('correoFe', 50);
            $table->string('contrasenaFe', 100);
            $table->text('nota');
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
        Schema::dropIfExists('usersdate');
    }
}
