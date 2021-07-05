<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmploysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('codigoSucursal_id');
            $table->string('nif',9);
            $table->string('nombre',50);
            $table->string('apellido1',50)->nullable()->default(null);;
            $table->string('apellido2',50)->nullable()->default(null);;
            $table->string('telefono',9);
            $table->foreign('codigoSucursal_id')->references('id')->on('branches');
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
        Schema::dropIfExists('employs');
    }
}
