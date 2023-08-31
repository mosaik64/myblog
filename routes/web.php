<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\GenreController;

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
   // return view('welcome')->middleware('auth');

});
Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::controller(GenreController::class)->prefix('admin/genre')->as('admin.genre.')->group(function() {
    Route::get('create', 'add')->name('add');
    Route::post('create', 'create')->name('create');
});
