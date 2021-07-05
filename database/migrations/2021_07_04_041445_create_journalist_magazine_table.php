<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJournalistMagazineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journalist_magazine', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('numero_registro_id');
            $table->unsignedBigInteger('periodista_id');
            $table->foreign('numero_registro_id')->references('id')->on('magazines');
            $table->foreign('periodista_id')->references('id')->on('journalists');
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
        Schema::dropIfExists('journalist_magazine');
    }
}
