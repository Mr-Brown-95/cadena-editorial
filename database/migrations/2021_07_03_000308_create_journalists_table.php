<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJournalistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journalists', function (Blueprint $table) {
            $table->id();
            $table->string('nombre',50);
            $table->string('apellido1',50);
            $table->string('apellido2',50)->nullable();
            $table->string('telefono',9)->nullable();
            $table->string('especialidad',50);
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
        Schema::dropIfExists('journalists');
    }
}
