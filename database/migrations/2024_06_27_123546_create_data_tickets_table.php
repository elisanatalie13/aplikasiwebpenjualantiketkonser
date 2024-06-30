<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataTicketsTable extends Migration
{
    public function up()
    {
        Schema::create('data_tickets', function (Blueprint $table) {
            $table->id();
            $table->string('concert_name');
            $table->date('date');
            $table->string('location');
            $table->time('time');
            $table->string('category');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('data_tickets');
    }
}
