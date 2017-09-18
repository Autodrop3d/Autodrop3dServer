<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Contactinfos.
 *
 * @author  The scaffold-interface created at 2017-09-14 01:43:22am
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Contactinfos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('contactinfos',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('emailAddress')->unique();
        
        /**
         * Foreignkeys section
         */
        
        
        $table->timestamps();
        
        
        // type your addition here

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('contactinfos');
    }
}
