<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('results', function (Blueprint $table) {
            // $table->id();
            $table->id();
            // $table->bigInteger('id_result')->primary();
            $table->string('desc_result');
            $table->string('img');
            $table->string('keterangan');
            $table->string('saran',500);
            $table->string('edukasi',500);
            $table->string('bg');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('results');
    }
}
