<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImplementosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('implementos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('placa');
            $table->text('descripcion');
            $table->string('valor');
            $table->bigInteger('cantidad');
            $table->bigInteger('cantidad_prestados')->default(0);
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
        Schema::dropIfExists('implementos');
    }
}
