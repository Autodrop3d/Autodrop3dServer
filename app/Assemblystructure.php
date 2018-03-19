<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Assemblystructure.
 *
 * @author  The scaffold-interface created at 2018-03-18 11:27:11pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Assemblystructure extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'assemblystructures';

	
}
