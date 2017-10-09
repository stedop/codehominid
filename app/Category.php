<?php

namespace App\Modules\Blog\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 *
 * @package App\Modules\Blog\Models
 *
 * @property string name
 * @property string slug
 * @property string description
 *
 */
final class Category extends Model
{
    use Sluggable;

    protected $table = 'blog_categories';
    public $timestamps = false;
    protected $guarded = array('id');
    protected $fillable = [
        'name',
        'description'
    ];
    protected $hidden = [
        'id'
    ];

    public function posts()
    {
        return $this->hasMany('Post');
    }

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

}