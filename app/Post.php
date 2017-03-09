<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Post.
 *
 * @author The scaffold-interface created at 2017-01-18 02:52:09am
 * @link https://github.com/amranidev/scaffold-interface
 * @property int $id
 * @property string $posted_at
 * @property string $title
 * @property string $body
 * @property string $image
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post wherePostedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereBody($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereImage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereDeletedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $users
 * @property int $image_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Comment[] $comments
 * @method static \Illuminate\Database\Query\Builder|\App\Post whereImageId($value)
 */
class Post extends Model
{
    use HasImage;
	use Commentable;
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'posts';

	

	/**
     * user.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function users()
    {
        return $this->belongsToMany('App\User','posts_users');
    }

    /**
     * Assign a user.
     *
     * @param  $user
     * @return  mixed
     */
    public function assignUser($user)
    {
        return $this->users()->attach($user);
    }
    /**
     * Remove a user.
     *
     * @param  $user
     * @return  mixed
     */
    public function removeUser($user)
    {
        return $this->users()->detach($user);
    }

	/**
     * group.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function groups()
    {
        return $this->belongsToMany('App\Group','groups_posts');
    }

    /**
     * Assign a group.
     *
     * @param  $group
     * @return  mixed
     */
    public function assignGroup($group)
    {
        return $this->groups()->attach($group);
    }
    /**
     * Remove a group.
     *
     * @param  $group
     * @return  mixed
     */
    public function removeGroup($group)
    {
        return $this->groups()->detach($group);
    }

}
