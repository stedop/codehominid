<?php declare( strict_types=1 );

namespace App\Http\Controllers\Api\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Class PostCommentsController
 *
 * @package App\Http\Controllers\Api
 */
final class PostCommentController extends Controller
{
    /**
     * @var Post
     */
    protected $post;

    /**
     * PostCommentsController constructor.
     *
     * @param Post $post
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
    }


    /**
     * Show all comments for a post, paginated
     *
     * @param string $postSlug
     *
     * @return JsonResponse
     */
    public function index(string $postSlug) : JsonResponse
    {
        $comments = $this->post->where('slug', '=', $postSlug)->comments()->paginate(20);
        return response()->json($comments);
    }

    /**
     * Adds a comment
     *
     * @param \Illuminate\Http\Request $request
     * @param string                   $postSlug
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request, string $postSlug) : JsonResponse
    {

    }
}