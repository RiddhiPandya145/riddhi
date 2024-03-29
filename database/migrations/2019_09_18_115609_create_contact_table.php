<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('contact', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('password');
        });
    }

    public function down()
    {
        Schema::drop('contact');
    }
}
