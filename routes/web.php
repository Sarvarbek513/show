<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\IshController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LanguageController;

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

Route::get('/', function () {
    return view('client.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
    //Bosh ish
    Route::get('/ish', function () {
        return view('client.boshish');
    });
    //News
    Route::get('/news', [NewsController::class, 'index_client'])->name('index_client');
    Route::get('news/{news}', [NewsController::class, 'show_client'])->name('show_client');
    //Article
    Route::get('/maqola', [ArticleController::class, 'index_client'])->name('articles.index_client');
    Route::get('articles/{articles}', [ArticleController::class, 'show_client'])->name('articles.show_client');
    //Work
    // Route::get('/ish', [IshController::class, 'index_client'])->name('articles.index_client');
    // Route::get('articles/{articles}', [IshController::class, 'show_client'])->name('articles.show_client');

Route::prefix('admin')->middleware('auth')->group(function(){
    //News
    Route::get('/news', [NewsController::class, 'index'])->name('news.index');
    Route::get('/news/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('/news', [NewsController::class, 'store'])->name('news.store');
    Route::get('/news/{news}', [NewsController::class, 'show'])->name('news.show');
    Route::get('/news/{news}/edit', [NewsController::class, 'edit'])->name('news.edit');
    Route::put('/news/{news}', [NewsController::class, 'update'])->name('news.update');
    Route::delete('/news/{news}', [NewsController::class, 'destroy'])->name('news.destroy');
    // Route::resource('news',NewsController::class);
    //Article
    Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
    Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');
    Route::post('/articles', [ArticleController::class, 'store'])->name('articles.store');
    Route::get('/articles/{articles}', [ArticleController::class, 'show'])->name('articles.show');
    Route::get('/articles/{articles}/edit', [ArticleController::class, 'edit'])->name('articles.edit');
    Route::put('/articles/{articles}', [ArticleController::class, 'update'])->name('articles.update');
    Route::delete('/articles/{articles}', [ArticleController::class, 'destroy'])->name('articles.destroy');
     //Work
     Route::get('/works', [IshController::class, 'index'])->name('works.index');
    Route::get('/works/create', [IshController::class, 'create'])->name('works.create');
    Route::post('/works', [IshController::class, 'store'])->name('works.store');
});
Route::post('/change-language', [LanguageController::class, 'changeLanguage'])->name('change.language');
require __DIR__.'/auth.php';
