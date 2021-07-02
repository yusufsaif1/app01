<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Controller1;
// use App\Http\Controllers\controller2;
// use App\Http\Controllers\urlGenerationController;
// use App\Http\Controllers\DBController;
use App\Http\Controllers\QueryBuilderController;
use Illuminate\Support\Facades\Log;

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
//     Log::info("welcome file log info", [
//         'user_id' => 1
//     ]);
//     return view('welcome');
// });


Route::get('fetch', [QueryBuilderController::class, 'fetch']);












// Route::view('formdata', 'form');
// Route::post('save', [controller2::class, 'store']);
// Route::get('fetch', [DBController::class, 'fetch']);
// Route::get('insert', [DBController::class, 'insert']);
// Route::get('update', [DBController::class, 'update']);
// Route::get('delete', [DBController::class, 'delete']);

// Route::get('logout', function () {
//     if (session()->has('name')) {
//         session()->pull('name');
//         return redirect('/');
//     }
// });

//Route::get('url', [urlGenerationController::class, 'fun']);

// Route::middleware('route')->group(function () {
//     Route::get('/', function () {
//         $var = "yusuf saif";

//         return view('welcome', ["name" => $var]);
//     });
//     Route::get('get', function () {
//         echo "This is closer function";
//     });
// });


// Route::get('getFun', [Controller1::class, 'fun1']);

// Route::match(['post', 'get'], 'match', function () {
//     echo "This is closer function of match";
// });

// Route::any('any/{id}', function ($id) {
//     echo "This is any function which take parameter " . $id;
// })->where(["id" => '[0-9]+']);

// Route::get('/search/{search}', function ($search) {
//     return "Return from search method" . $search;
// })->where('search', '.*');

// Route::get('/user', function () {
//     return "you click on link";
// })->name('user');

// Route::fallback(function () {
//     return env("App_NAME");
// });
