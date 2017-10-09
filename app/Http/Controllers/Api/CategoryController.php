<?php declare(strict_types=1);

namespace App\Http\Controllers;

use App\Modules\Blog\Models\Category;
use Illuminate\Http\JsonResponse;

class CategoryController extends Controller
{

  /**
   * Display a listing of the resource.
   *
   * @return JsonResponse
   */
  public function index() : JsonResponse
  {
      return \response()->json(Category::all());
  }

  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
    
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
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    
  }
  
}

?>