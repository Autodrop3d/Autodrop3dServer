<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Supplier.
 *
 * @author  The scaffold-interface created at 2018-03-13 04:21:28pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Supplier extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'suppliers';

	
}
