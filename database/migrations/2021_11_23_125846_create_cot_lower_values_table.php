<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCotLowerValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cot_lower_values', function (Blueprint $table) {
            $table->id();

            $table->string('compra');
            $table->string('venta');
            $table->unsignedBigInteger('id_moneda')->nullable();

            $table->foreign('id_moneda')->references('id')->on('cot_currencies');

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
        Schema::dropIfExists('cot_lower_values');
    }
}
