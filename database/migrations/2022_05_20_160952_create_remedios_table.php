<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRemediosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('remedios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome_marca');
            $table->string('formula');
            $table->string('validade');
            $table->string('lote');
            $table->string('nome_remedio');
            $table->string('valor');
            $table->foreignId('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('remedios');
    }
}
//POPI, 2019-01-01, 123, ELU, 1, 2022-05-20 18:27:13, 2022-05-20 18:27:13
