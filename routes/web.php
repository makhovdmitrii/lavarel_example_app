<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//$users = User::all();
//dd($users);
//dump($users);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/posts', function () {
    return 'список постов';
});
Route::prefix('post')->group(function () {
    Route::get('/{id}', [PostController::class, 'show'])
        ->where('id', '[0-9]+');
    Route::get('/page/{page?}', function ($page = 1) {
        return 'страница номер ' . $page;
    })->whereNumber('page');
    Route::get('/{catId}/{postId}', function ($catId, $postId) {
        return $catId . ' ' . $postId;
    })->where('catId', '[a-z0-9_-]+')->where('postId', '[0-9]+');
});
Route::get('/user/{id}/{name}', function ($id, $name) {
    return $id . ' ' . $name;
})->whereAlpha('name')->whereAlphaNumeric('id');

