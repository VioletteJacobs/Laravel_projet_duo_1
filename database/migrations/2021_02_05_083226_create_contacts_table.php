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
            $table->string("h2", 15);
            $table->string("para1",50);
            $table->string("h3adresse",20);
            $table->string("paraadresse",50);
            $table->string("h3mail",20);
            $table->string("paramail",50);
            $table->string("paramailcontact",50);
            $table->string("h3call",20);
            $table->integer("paracall1");
            $table->integer("paramail2");
            $table->string("loading",20);
            $table->string("parasent",20);
            $table->string("button",20);
            $table->string("iconmap", 20);
            $table->string("iconenvelope", 20);
            $table->string("iconphone", 20);
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
