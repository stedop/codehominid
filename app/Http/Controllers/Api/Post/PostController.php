<?php declare(strict_types=1);

namespace App\Http\Controllers\Api\Post;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Types\PostStatus;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

final class PostController extends Controller
{
    /**
     * @var \App\Models\Post
     */
    protected $post;

    /**
     * PostController constructor.
     *
     * @param \App\Models\Post $post
     */
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    /**
     * List all posts in reverse date order
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index() : JsonResponse
    {
        $posts = $this->post->orderBy('created_at', 'DESC')->get();
        return response()->json($posts);
    }

    /**
     * Create a post
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request) : JsonResponse
    {
        $postStatus = new PostStatus();
        $request->validate(
            [
                'title' => ['required', 'string', 'max:255'],
                'description' => ['required', 'string'],
                'summary' => ['required', 'string'],
                'contents' => ['required', 'string'],
                'status' => [
                    'sometimes',
                    'string',
                    Rule::in($postStatus->getConstList())
                ]
            ]
        );

        $newPost = $this->post->save(
            [
                'title' => $request->get('title'),
                'description' => $request->get('description'),
                'summary' => $request->get('summary'),
                'contents' => $request->get('contents'),
                'status' => $request->get('status', PostStatus::__default),
            ]
        );

        return response()->json($newPost);
    }

    /**
     * Get a post
     *
     * @param string $slug
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(string $slug) : JsonResponse
    {
        $post = $this->post->where('slug', '=', $slug)->firstOrFail();
        return response()->json($post);
    }

    /**
     * Update a post
     *
     * @param \Illuminate\Http\Request $request
     * @param string                   $slug
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, string $slug) : JsonResponse
    {
        $postStatus = new PostStatus();
        $request->validate(
            [
                'title' => ['required', 'string', 'max:255'],
                'description' => ['required', 'string'],
                'summary' => ['required', 'string'],
                'contents' => ['required', 'string'],
                'status' => [
                    Rule::in($postStatus->getConstList())
                ]
            ]
        );

        $newPost = $this->post->where('slug','=', $slug)->firstOrFail();
        $newPost->update(
            [
                'title' => $request->get('title'),
                'description' => $request->get('description'),
                'summary' => $request->get('summary'),
                'contents' => $request->get('contents'),
                'status' => $request->get('status', PostStatus::__default),
            ]
        );

        return response()->json($newPost);
    }

    /**
     * @param string $slug
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function destroy(string $slug) : JsonResponse
    {
        $post = $this->post->where('slug', '=', $slug)->firstOrFail();
        return response()->json($post->delete());
    }
}

?>