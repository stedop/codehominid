<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PostTag
 *
 * @package App\Modules\Blog\Models
 *
 * @property int tagId the tag
 * @property int postId the post
 */
class PostTag extends Model 
{

    protected $table = 'blog_post_tag';
    public $timestamps = false;
    protected $fillable = ['post_id', 'tag_id'];

    public function posts()
    {
        return $this->belongsTo('Post', 'post_id');
    }

    public function tags()
    {
        return $this->hasOne('Tag');
    }
}