<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_implemento');
            $table->dateTime('fecha_inicial');
            $table->dateTime('fecha_final');
            $table->enum('estado_prestamo',['Solicitado','Rechazado','Aprobado'])->default('Solicitado');
            $table->enum('estado_implemento_prestamo',['Pendiente','Entregado','Devuelto','Perdido','Defectuoso'])->default('Pendiente');
            $table->bigInteger('cantidad_implemento_solicitado');
            $table->bigInteger('cantidad_implemento_entregado')->default(0);
            $table->bigInteger('cantidad_implemento_devuelto')->default(0);
            $table->bigInteger('cantidad_implemento_perdido')->default(0);
            $table->bigInteger('cantidad_implemento_defectuoso')->default(0);
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_implemento')->references('id')->on('implementos')->onDelete('cascade');
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
        Schema::dropIfExists('prestamos');
    }
}
