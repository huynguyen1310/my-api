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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');


Route::middleware('auth:api')->resource('posts', 'PostController');

Route::fallback(function(){
    // return response()->json([
    //     'message' => 'Page Not Found. If error persists, contact info@website.com'], 404);
    return responder()->error('Not Found', 'Not found')->respond(404);
});
