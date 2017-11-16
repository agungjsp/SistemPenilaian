<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTNilaisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_nilais', function (Blueprint $table) {
            $table->increments('id');
            $table->string('NIP');
            $table->string('Kd_Mapel');
            $table->string('NIS');
            $table->integer('N1');
            $table->integer('N2');
            $table->integer('UTS');
            $table->integer('UAS');
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
        Schema::dropIfExists('t_nilais');
    }
}
