<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrancheMagazineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('branche_magazine', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('codigo_sucursal_id');
            $table->unsignedBigInteger('numero_registro_id');
            $table->foreign('codigo_sucursal_id')->references('id')->on('branches');
            $table->foreign('numero_registro_id')->references('id')->on('magazines');
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
        Schema::dropIfExists('branche_magazine');
    }
}
