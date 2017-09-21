<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Contactinfo.
 *
 * @author The scaffold-interface created at 2017-09-14 01:43:22am
 * @link https://github.com/amranidev/scaffold-interface
 * @property int $id
 * @property string $emailAddress
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contactinfo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contactinfo whereEmailAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contactinfo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Contactinfo whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Contactinfo extends Model
{
	
	
    protected $table = 'contactinfos';

	
}
