<?php declare( strict_types=1 );

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Response;


/**
 * Class AdminController
 * @package App\Http\Controllers\Admin
 */
final class AdminController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index(  ) : Response
    {
        return response()->view('admin.home');
    }
}