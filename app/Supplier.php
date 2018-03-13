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

	

	/**
     * cadmodel.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function cadmodels()
    {
        return $this->belongsToMany('App\Cadmodel');
    }

    /**
     * Assign a cadmodel.
     *
     * @param  $cadmodel
     * @return  mixed
     */
    public function assignCadmodel($cadmodel)
    {
        return $this->cadmodels()->attach($cadmodel);
    }
    /**
     * Remove a cadmodel.
     *
     * @param  $cadmodel
     * @return  mixed
     */
    public function removeCadmodel($cadmodel)
    {
        return $this->cadmodels()->detach($cadmodel);
    }



}
