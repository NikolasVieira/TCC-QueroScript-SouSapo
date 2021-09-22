<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagesTable extends Migration
{
    public function up()
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('chapter_number');
            $table->string('page_number');
            $table->string('path');
            $table->boolean('status')->default(true);
            $table->foreign('chapter_number')->references('chapter_number')->on('chapters')->onDelete('CASCADE');
        });
    }

    public function down()
    {
        Schema::dropIfExists('pages');
    }
}
