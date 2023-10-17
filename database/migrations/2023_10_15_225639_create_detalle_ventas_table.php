<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetalleVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_ventas', function (Blueprint $table) {
            $table->id();
            $table->decimal('precio_unitario',10,2);
            $table->unsignedInteger('cantidad');
            $table->decimal('sub_total');
            $table->boolean('recomendado')->default(false);
            $table->foreignId('producto_id')->references('id')->on('productos');
            $table->foreignId('nota_venta_id')->references('id')->on('nota_ventas');
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
        Schema::dropIfExists('detalle_ventas');
    }
}
