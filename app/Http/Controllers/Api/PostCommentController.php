<?php declare( strict_types=1 );

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Modules\Blog\Models\Post;
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
     * Show all comments for a post
     *
     * @param string $postSlug
     *
     * @return JsonResponse
     */
    public function index(string $postSlug) : JsonResponse
    {
        $comments = $this->post->where('slug', '=', $postSlug)->comments()->get();
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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function update($id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return JsonResponse
     */
    public function destroy($id)
    {

    }
}