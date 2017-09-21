<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Cadmodel.
 *
 * @author The scaffold-interface created at 2017-09-05 08:07:22pm
 * @link https://github.com/amranidev/scaffold-interface
 * @property int $id
 * @property string $Name
 * @property string $Description
 * @property string $ModelFile
 * @property string $Material
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @property \Carbon\Carbon|null $deleted_at
 * @property int $user_id
 * @property-read \App\User $user
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Query\Builder|\App\Cadmodel onlyTrashed()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cadmodel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cadmodel whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cadmodel whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cadmodel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cadmodel whereMaterial($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cadmodel whereModelFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cadmodel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cadmodel whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Cadmodel whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Cadmodel withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Cadmodel withoutTrashed()
 * @mixin \Eloquent
 */
class Cadmodel extends Model
{
	
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'cadmodels';

    public function user() {
        return $this->belongsTo('App\User');
    }
	
}
