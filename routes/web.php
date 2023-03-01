<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//   return view('welcome');
// });

// Route::get('/', [HomeController::class, 'index']);
// Route::get('/about', [AboutController::class, 'index']);
// Route::get('/articles/{id}', [ArticleController::class, 'index']);


Route::get('/', function () {
  return "ini halaman home";
});
Route::get('/about-us', function () {
  return "ini halaman about";
});
Route::resource('/contact-us', ContactController::class)->only([
  'index',
  'create',
  'store'
]);
Route::prefix('news')->controller(NewsController::class)->group(function () {
  Route::get('/', 'index');
  Route::get('/{slug}', 'show');
});

Route::prefix('category')->group(function () {
  Route::get('/{category}', [ProductController::class, 'show'])
    ->whereIn(
      'category',
      [
        'digital-books',
        'marbel-edu-games',
        'marbel-and-friends-kids-games',
        'riri-story-books',
        'kolak-kids-songs',
        'kabi-islamic-education',
        'marbel-junior',
        'keong-casual-games'
      ]
    );
});

Route::prefix('program')->group(function () {
  Route::get('/karir', [ProgramController::class, 'karir']);
  Route::get('/kunjungan-industri', [ProgramController::class, 'kunjunganIndustri']);
  Route::get('/magang', [ProgramController::class, 'magang']);
});

Route::fallback(function () {
  return '404 halaman tidak ditemukan';
});