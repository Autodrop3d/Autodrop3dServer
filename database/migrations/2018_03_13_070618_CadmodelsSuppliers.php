<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CadmodelsSuppliers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::create('cadmodel_supplier',function (Blueprint $table){
			$table->increments('id')->unique()->index()->unsigned();
			$table->integer('cadmodel_id')->unsigned()->index();
			$table->foreign('cadmodel_id')->references('id')->on('cadmodels')->onDelete('cascade');
			$table->integer('supplier_id')->unsigned()->index();
			$table->foreign('supplier_id')->references('id')->on('suppliers')->onDelete('cascade');

            $table->float('price')->nullable();
            $table->float('orderUnit')->nullable();
			/**
			 * Type your addition here
			 *
			 */
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::drop('cadmodel_supplier');
    }
}
