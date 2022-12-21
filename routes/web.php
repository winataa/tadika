<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisController;

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
    return view('landing_page');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/pricing', function () {
    return view('pricing');
});

// Route::get('/register', function () {
//     return view('register');
// });

Route::get('/dbConfig', function () {
    return view('dbConfig');
});

Route::get('/admin', function () {
    return view('admin/homeAdmin');
});

Route::get('/custAdmin', function () {
    return view('admin/custAdmin');
});
Route::get('/statistik', function () {
    return view('admin/statistik');
});

Route::get('/service', function () {
    return view('admin/serviceAdmin');
});


Route::get('/register', [RegisController::class, 'RegisIndex']);
Route::post('insertData', [RegisController::class, 'InsertData']);

