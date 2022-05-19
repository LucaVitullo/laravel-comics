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

// Route::get('/', function () {
//     return view('app');
// });


Route::get('/', function () {

    $comics = @include "../config/comics.php";

    return view('main', ["comics" => $comics]);
});

Route::get('card{id}', function ($id) {

    $comics = @include "../config/comics.php";

    return view('/partials/singleCard', ["comics" => $comics[$id]]);
});
