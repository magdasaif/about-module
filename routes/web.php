<?php

use Illuminate\Support\Facades\Route;
use Modules\About\Http\Controllers\AboutController;

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

Route::group(['prefix' => 'dashboard', 'as' => 'admin.', /*'middleware' => ['auth', 'dashboard']*/], function () {
    Route::resource('abouts', AboutController::class)->names('abouts');
});
