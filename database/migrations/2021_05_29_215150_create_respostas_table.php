<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRespostasTable extends Migration
{

    public function up()
    {
        Schema::create('respostas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('discucao_id')->unsigned();
            $table->string('texto');
            $table->timestamps();

            $table->foreign('discucao_id')->references('id')->on('discucao')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('respostas');
    }
}
