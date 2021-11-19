<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('producto', 45);
            $table->unsignedInteger('existencias');
            $table->decimal('precio', 10, 2);
            $table->string('fotografia');
            $table->tinyText('descripcion');
            $table->enum('estatus',['Activo', 'Inactivo']);
            $table->decimal('iva', 10, 2);
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
        Schema::dropIfExists('productos');
    }
}
