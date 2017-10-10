<?php

use Illuminate\Http\Request;

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

Route::get('/user', function (Request $request) {
    return $request->user();
});

Route::namespace('Api')->prefix('api/v1')->group(
    function () {
        Route::namespace('Post')->group(
            function () {
                Route::resource(
                    'post',
                    'PostController',
                    [
                        'except' => [
                            'create',
                            'edit',
                        ],
                    ]
                );
                Route::resource(
                    'post.comment',
                    'PostCommentController',
                    [
                        'only' => [
                            'index',
                            'store',
                        ],
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
                    'edit',
                ],
            ]
        );

        Route::resource(
            'comment',
            'CommentController',
            [
                'only' => [
                    'update',
                    'show',
                    'destroy',
                ],
            ]
        );

        Route::resource(
            'posttag',
            'PostTagController',
            [
                'except' => [
                    'create',
                    'edit',
                ],
            ]
        );
        Route::resource(
            'tag',
            'TagController',
            [
                'except' => [
                    'create',
                    'edit',
                ],
            ]
        );
    }
);
