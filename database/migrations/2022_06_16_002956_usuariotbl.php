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
        //Create table usuariotbl
        Schema::create('usuariotbl', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->primary('id');
        
            $table->bigInteger('cedulaUsr')->unique();
            $table->string('nombreUsr');
            $table->string('telefonoUsr');
            $table->string('ciudadUsr');
            $table->string('nickNameUsr');
            $table->string('contrasenaUsr');
            $table->bigInteger('idRol');
            $table->bigInteger('idArea');

            // $table->foreign('idArea')->references('id')->on('areatbl');
            // $table->foreign('idRol')->references('id')->on('roltbl');
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
