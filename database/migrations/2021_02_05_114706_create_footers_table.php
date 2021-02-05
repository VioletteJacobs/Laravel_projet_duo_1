<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->string('copyright1', 20);
            $table->string('copyright2', 20);
            $table->string('copyright3', 20);
            $table->string('design1', 50);
            $table->string('design2', 50);
            $table->string('icon1',50);
            $table->string('icon2',50);
            $table->string('icon3',50);
            $table->string('icon4',50);
            $table->string('icon5',50);
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
        Schema::dropIfExists('footers');
    }
}
