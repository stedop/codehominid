<?php declare(strict_types=1);

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Modules\Blog\Models\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

final class CategoryController extends Controller
{
    protected $category;

    /**
     * CategoryController constructor.
     *
     * @param Category $category
     */
    public function __construct( Category $category )
    {
        $this->category = $category;
    }

    /**
     * Display a listing of the resource.
     *
     * @return JsonResponse
     */
    public function index() : JsonResponse
    {
      return \response()->json($this->category->all());
    }

    /**
     * Store a new Category
     *
     * @param Request $request
     *
     * @return JsonResponse
     */
    public function store(Request $request) : JsonResponse
    {
      $request->validate([
          'name' => 'required|string|size:255',
          'description' => 'required|sring'
      ]);

      $newCat = $this->category->save($request->all());

    }

    /**
     * Display a Category by the slug.
     *
     * @param  string $slug
     * @return JsonResponse
     */
    public function show(string $slug) : JsonResponse
    {
      $cat = Category::where('slug', '=', $slug)->firstOrFail();
      return $cat;
    }

    /**
     * Update a category
     *
     * @param Request $request
     * @param string $slug
     *
     * @return JsonResponse
     */
    public function update(Request $request, string $slug) : JsonResponse
    {
        $request->validate([
            'name' => 'required|string|size:255',
            'description' => 'required|sring'
        ]);

        $cat = $this->category->where('slug', '=', $slug)->firstOrFail();
        $cat->update($request->toArray());

        return response()->json($cat);
    }

    /**
     * Remove a category
     *
     * @param string $slug
     * @return JsonResponse
     */
    public function destroy(string $slug) : JsonResponse
    {
        $cat = $this->category->where('slug', '=', $slug)->firstOrFail();
        return response()->json($cat->delete());
    }
  
}

?>