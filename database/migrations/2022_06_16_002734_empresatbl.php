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
        //Creacion tabla empresa
        Schema::create('empresatbl', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nombreEmp');
            $table->string('documentoEmp');
            $table->string('telefonoEmp');
            $table->string('direccionEmp');
            $table->string('urlEmp');
            // $table->primary('id');
            
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
