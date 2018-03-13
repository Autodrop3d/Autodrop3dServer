<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Vendor.
 *
 * @author  The scaffold-interface created at 2018-03-13 04:09:03pm
 * @link  https://github.com/amranidev/scaffold-interface
 */
class Vendor extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'vendors';

	
}
