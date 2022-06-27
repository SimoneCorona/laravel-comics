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



Route::get('/', function () {
    $data = config('comics');
    return view('homepage', compact("data"));
});

Route::get('/comic_info/{id}', function($id) use ($data){
    $data = config('comics');
    $single_comic = collect($data)->where('id', $id)->first();
    
    if (!$single_comic) {
        return abort(404);
    }
    return view('comic_info', compact($single_comic));
});