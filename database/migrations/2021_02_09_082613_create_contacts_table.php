<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string("h2", 50);
            $table->string("para1",1000);
            $table->string("iconmap",500);
            $table->string("h3adresse",100);
            $table->string("iconenvelope",500);
            $table->string("h3mail",100);
            $table->string("iconphone",500);
            $table->string("h3phone",100);
            $table-> string("loading",50);
            $table-> string("parasent",500);
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
        Schema::dropIfExists('contacts');
        
    }
}
