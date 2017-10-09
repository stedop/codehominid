<?php

use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(
    [
        'middleware' => 'auth:api',
        'namespace' => 'Api',
        'prefix' => 'api/v1'
    ],
    function() {
        Route::group(
            [
                'namespace' => 'Post',
            ],
            function() {
                Route::resource(
                    'post',
                    'PostController',
                    [
                        'except' => [
                            'create',
                            'edit'
                        ]
                    ]
                );
                Route::resource(
                    'post.comment',
                    'PostCommentController',
                    [
                        'except' => [
                            'create',
                            'edit'
                        ]
                    ]
                );
            }
        );

        Route::resource(
            'category',
            'CategoryController',
            [
                'except' => [
                    'create',
                    'edit'
                ]
            ]
        );

        Route::resource(
            'posttag',
            'PostTagController',
            [
                'except' => [
                    'create',
                    'edit'
                ]
            ]
        );
        Route::resource(
            'tag',
            'TagController',
            [
                'except' => [
                    'create',
                    'edit'
                ]
            ]
        );
    }
);
