<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 120);
            $table->string('apellido', 120);
            $table->date('fecha_nacimiento');
            $table->integer('edad');
            $table->string('direccion', 254);
            $table->string('encargado', 100);
            $table->string('parentesco');
            $table->string('telefono_emergencia');
            $table->string('padecimientos', 254);
            $table->string('descripcion_padecimiento', 100);
            $table->string('alergia_medicamento', 50);
            $table->string('nombre_padre', 100);
            $table->string('profesion_padre', 60);
            $table->string('telefono_padre');
            $table->string('nombre_madre', 100);
            $table->string('profesion_madre', 60);
            $table->string('telefono_madre');
            $table->date('fecha_creacion');
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
}
