<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Assemblystructures.
 *
 * @author  The scaffold-interface created at 2018-03-18 11:27:11pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Assemblystructures extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('assemblystructures',function (Blueprint $table){

        $table->increments('id');
        
        $table->integer('ParentID');
        
        $table->integer('ChildID');
        
        $table->String('Callout');
        
        $table->longText('Position');
        
        /**
         * Foreignkeys section
         */
        
        
        $table->timestamps();
        
        
        $table->softDeletes();
        
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
        Schema::drop('assemblystructures');
    }
}
