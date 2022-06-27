<?php

use Illuminate\Support\Facades\Route;

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

$data = config('comics');

Route::get('/', function () use($data) {
    return view('homepage', compact("data"));
});

Route::get('/comic_info/{id}', function($id) use($data) {
    $single_comic = collect($data)->where('id', $id)->first();
    
    $data = array_merge($data, ['single_comic' => $single_comic]);
    if (!$single_comic) {
        return abort(404);
    }
    return view('comic_info', $data);
})->name('comic_info');