<?php declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Comment
 * @package App\Modules\Blog\Models
 *
 * @property string status
 * @property string ip
 * @property string user_agent
 */
final class Comment extends Model
{
    protected $table = 'blog_comments';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $guarded = ['id'];
    protected $fillable = [
        'comment',
        'status'
    ];

    public function post()
    {
        return $this->belongsTo('Post', 'post_id');
    }
}