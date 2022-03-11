<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCursosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    /*public function up() //creo la tabla cursos
    {
        Schema::create('cursos', function (Blueprint $table) {
            $table->id();
            $table->string('hostia',100);
            $table->string('descripcion');
            $table->timestamps();
        });
    }*/

    public function up()
    {
        Schema::table('users', function(Blueprint $table){
            $table->json('features')
                  ->after('email')
                  ->nullable;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() //doy de baja la tabla
    {
        Schema::dropIfExists('cursos');
    }
}
