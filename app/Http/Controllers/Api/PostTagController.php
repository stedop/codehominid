<?php declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Modules\Blog\Models\PostTag;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Class PostTagController
 * @package App\Http\Controllers\Api
 */
final class PostTagController extends Controller
{
    /**
     * @var PostTag
     */
    protected $postTag;

    /**
     * PostTagController constructor.
     *
     * @param PostTag $postTag
     */
    public function __construct( PostTag $postTag )
    {
        $this->postTag = $postTag;
    }


    /**
   * Display a listing of the resource.
   *
   * @return JsonResponse
   */
  public function index() : JsonResponse
  {
      $tags = $this->postTag->all();
      return response()->json($tags);
  }

    /**
     * Create a link
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
  public function store( Request $request ) : JsonResponse
  {
      $request->validate([
          'post_id' => 'required|integer|exits:posts',
          'tag_id' => 'required|integer|exits:tags',
      ]);

      $postTag = $this->postTag->create(
          [
              'post_id' => $request->get('post_id'),
              'tag_id' => $request->get('tag_id')
          ]
      );
      return response()->json($postTag);
  }

    /**
     * Display the items
     *
     * @param int $id
     * @return JsonResponse
     */
  public function show(int $id) : JsonResponse
  {
      $postTag = $this->postTag->findOrFail($id);
      return response()->json($postTag);
  }

    /**
     * Update a link
     *
     * @param Request $request
     *
     * @param int $id
     * @return JsonResponse
     */
  public function update(Request $request, int $id) : JsonResponse
  {
      $request->validate([
          'post_id' => 'required|integer|exits:posts',
          'tag_id' => 'required|integer|exits:tags',
      ]);
      $postTag = $this->postTag->findOrFail($id);
      $postTag->update(
          [
              'post_id' => $request->get('post_id'),
              'tag_id' => $request->get('tag_id')
          ]
      );
      return response()->json($postTag);
  }

    /**
     * Destroy a post/tag link
     *
     * @param int $id
     *
     * @return JsonResponse
     */
  public function destroy(int $id) : JsonResponse
  {
      $postTag = $this->postTag->findOrFail($id);
      return response()->json($postTag->delete());
  }
  
}

?>