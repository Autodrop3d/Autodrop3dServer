<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Group.
 *
 * @author The scaffold-interface created at 2017-01-18 02:37:47am
 * @link https://github.com/amranidev/scaffold-interface
 * @property int $id
 * @property string $name
 * @property string $stub
 * @property string $about
 * @property string $image
 * @property int $contactUser
 * @property string $visibility
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property \Carbon\Carbon $deleted_at
 * @method static \Illuminate\Database\Query\Builder|\App\Group whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Group whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Group whereStub($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Group whereAbout($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Group whereImage($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Group whereContactUser($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Group whereVisibility($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Group whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Group whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Group whereDeletedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Event[] $events
 * @property int $image_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Comment[] $comments
 * @method static \Illuminate\Database\Query\Builder|\App\Group whereImageId($value)
 * @property int $user_id
 * @method static \Illuminate\Database\Query\Builder|\App\Group whereUserId($value)
 */
class Group extends Model
{
    use Commentable;
    use HasImage;
	use SoftDeletes;

	protected $dates = ['deleted_at'];
    
	
    protected $table = 'groups';


	/**
     * event.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany|
     */
    public function events()
    {
        return $this->belongsToMany('App\Event','events_groups');
    }

    /**
     * Assign a event.
     *
     * @param  $event
     * @return  mixed
     */
    public function assignEvent($event)
    {
        return $this->events()->attach($event);
    }
    /**
     * Remove a event.
     *
     * @param  $event
     * @return  mixed
     */
    public function removeEvent($event)
    {
        return $this->events()->detach($event);
    }

    public static function create(array $attributes = [])
    {
        if (!array_has($attributes,'image_id')) {
            return parent::create($attributes);
        } else {
            $attributes['image_id'] = Image::whereName('groupNoImage.svg')->first()->id;
            return parent::create($attributes);
        }
    }

    public function save(array $options = [])
    {
        if (is_null($this->image_id)){
            $this->image_id = Image::whereName('groupNoImage.svg')->first()->id;
        }
        return parent::save($options);
    }


	/**
     * post.
     *
     * @return  \Illuminate\Support\Collection;
     */
    public function posts()
    {
        return $this->belongsToMany('App\Post','groups_posts');
    }

    /**
     * Assign a post.
     *
     * @param  $post
     * @return  mixed
     */
    public function assignPost($post)
    {
        return $this->posts()->attach($post);
    }
    /**
     * Remove a post.
     *
     * @param  $post
     * @return  mixed
     */
    public function removePost($post)
    {
        return $this->posts()->detach($post);
    }

}
