<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHqsTable extends Migration
{
    public function up()
    {
        Schema::create('hqs', function (Blueprint $table) {
            $table->id();
            $table->string('hq_name');
            $table->string('chapter_number');
            $table->string('page_number');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hqs');
    }
}
