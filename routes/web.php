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

use App\Http\Controllers\NewsController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\NewsController as AdminNewsController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\AboutController as AdminAboutController;

Route::get('/', function () {
	return view('welcome');
});

Route::get('/hello/{name}', function (string $name) {
	return "Hello, " . $name;
});

//admin
Route::group(['prefix' => 'admin'], function () {
	Route::resource('/categories', AdminCategoryController::class);
	Route::resource('/news', AdminNewsController::class);
});

//news
Route::get('/news', [NewsController::class, 'index'])
	->name('news');
Route::get('/news/{id}', [NewsController::class, 'show'])
	->where('id', '\d+')
	->name('news.show');

//categories
Route::get('/categories', [CategoryController::class, 'index'])
	->name('categories');
Route::get('/categories/{id}', [CategoryController::class, 'show'])
	->where('id', '\d+')
	->name('categories.show');

//about
Route::get('/about', [AboutController::class, 'index'])
	->name('about');
Route::get('/about/{id}', [AboutController::class, 'show'])
	->where('id', '\d+')
	->name('about.show');
