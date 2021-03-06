<?php declare (strict_types=1);

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Post
 *
 * @package App\Modules\Blog\Models
 *
 * @property string title
 * @property string slug
 * @property string description
 * @property string summary
 * @property string contents
 * @property string status
 * @property string comments
 * @property string featured
 *
 */
final class Post extends Model
{
    protected $table = 'blog_posts';
    public $timestamps = true;

    use SoftDeletes, Sluggable;

    protected $dates = ['deleted_at'];
    protected $guarded = ['id'];
    protected $fillable = [
        'title',
        'description',
        'summary',
        'contents',
        'status',
        'featured'
    ];

    public function category()
    {
        return $this->belongsTo('Category', 'category_id');
    }

    public function comments()
    {
        return $this->hasMany('Comment');
    }

    public function tags()
    {
        return $this->belongsToMany('PostTag');
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
                'source'=>'title'
            ]
        ];
    }
}