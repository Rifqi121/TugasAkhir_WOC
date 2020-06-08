<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTRsrujuk extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_rsrujuk', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('rumahsakit','50');
            $table->string('provinsi','30');
            $table->string('telepon','50');
            $table->string('alamat','50');
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
        Schema::dropIfExists('t_rsrujuk');
    }
}
