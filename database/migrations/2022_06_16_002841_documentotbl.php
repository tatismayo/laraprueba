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
        //Crear tabla documentotbl
        Schema::create('documentotbl', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->primary('id');
            $table->string('nombreDoc');
            $table->string('tipoDoc');
            $table->string('rutaDoc');
            $table->date('fechaDoc');
            $table->string('reponsableDoc');
            $table->string('versionDoc');
            //Foreignkeys
            // $table->foreign('idArea')->references('id')->on('areatbl');
            // $table->foreign('idRol')->references('id')->on('roltbl');
            // $table->foreign('idUsuario')->references('id')->on('usuariotbl');

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
        //
    }
};
