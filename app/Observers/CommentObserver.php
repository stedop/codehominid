<?php declare( strict_types=1 );

namespace App\Observers;

use App\Modules\Blog\Models\Comment;


/**
 * Class CommentObserver
 * @package App\Observers
 */
class CommentObserver
{
    /**
     * Listen for the comment created event
     *
     * @param Comment $comment
     */
    public function created( Comment $comment )
    {
       $comment->ip = \Request::ip();
       $comment->user_agent = \Request::userAgent();
    }
}