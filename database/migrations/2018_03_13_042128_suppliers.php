<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Suppliers.
 *
 * @author  The scaffold-interface created at 2018-03-13 04:21:28pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Suppliers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('suppliers',function (Blueprint $table){

        $table->increments('id');
        
        $table->String('name');
        
        $table->longText('address');
        
        $table->String('phone');
        
        $table->String('fax');
        
        $table->String('email');
        
        $table->longText('url');
        
        $table->longText('orderURL');
        
        $table->longText('notes');
        
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
        Schema::drop('suppliers');
    }
}
