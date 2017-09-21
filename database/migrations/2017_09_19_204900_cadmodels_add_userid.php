<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Class Cadmodels.
 *
 * @author  The scaffold-interface created at 2017-09-05 08:07:22pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class CadmodelsAddUserid extends Migration
{
    /**
     * Run the migrations.
     *
     * @return  void
     */
    public function up()
    {
        Schema::table('cadmodels',function (Blueprint $table){

        $table->unsignedInteger('user_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return  void
     */
    public function down()
    {
        Schema::table('cadmodels',function (Blueprint $table){
            $table->dropColumn('user_id');
        });
    }
}
