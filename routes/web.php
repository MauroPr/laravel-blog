<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
//use App\Http\Controllers\PostController;
use App\Http\Controllers\Backend\PostController;



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
//     return view('welcome');
// });

Route::get('/', [PageController::class, 'posts']);
Route::get('blog/{post}', [PageController::class, 'post'])->name('post');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('posts', PostController::class)
    ->middleware('auth')
    ->except('show');
