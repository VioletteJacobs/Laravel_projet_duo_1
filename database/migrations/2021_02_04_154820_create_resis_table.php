<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateResisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resis', function (Blueprint $table) {
            $table->id();
            $table->string('h1',50);
            $table->string('check',50);
            $table->string('li1',50);
            $table->string('li2',50);
            $table->string('li3',50);
            $table->string('btn1',50);
            $table->string('btn2',50);
            $table->string('img1',50);
            $table->string('h2',50);
            $table->string('h3',200);
            $table->string('img2',50);
            $table->string('p1',300);
            $table->string('dblCheck',50);
            $table->string('li4',200);
            $table->string('li5',200);
            $table->string('li6',200);
            $table->string('p2',300);




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
        Schema::dropIfExists('resis');
    }
}
