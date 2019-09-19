<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class
AddContactExtra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('contact')->insert(array('id' => '111', 'name' => 'riddhi', 'password' => '12345'));
        //DB::table('contact')->insert(array('id' => '114', 'name' => 'krunal', 'password' => '123456'));
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('contact', function (Blueprint $table) {
            $table->dropColumn('name');
        });
        }
    }




