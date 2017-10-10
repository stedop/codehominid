<?php declare( strict_types=1 );

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        User::create([
            'name' => 'Ste',
            'email' => 'dopstpehen@gmail.com',
            'password' => \Hash::make('ReaperMan')
        ]);
        return response()->view('admin.home');
    }
}