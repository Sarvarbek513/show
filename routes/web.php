<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IshController;
use App\Http\Controllers\PDFController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\DoktarantController;
use App\Http\Controllers\JournalController;

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

Route::get('/',[NewsController::class,'index_last']);
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
    //Raxbariyat
    Route::get('/administrations', function () {
        return view('client.bosses');
    });
    //Journals
    Route::get('/journals',[JournalController::class,'client_index']);
    Route::get('/journals/{journals}',[JournalController::class,'show']);
    //Bosh ish
    Route::get('/ish', function () {
        return view('client.boshish');
    });
    //Doktarant
    Route::get('/doktarants', [DoktarantController::class, 'index_client'])->name('doktarants.index_client');
    Route::get('/doktarants/{doktarants}', [DoktarantController::class, 'show_client'])->name('doktarants.show_client');
    //News
    Route::get('/news', [NewsController::class, 'index_client'])->name('index_client');
    Route::get('news/{news}', [NewsController::class, 'show_client'])->name('show_client');
    Route::get('/news/{id}/download-pdf', [NewsController::class, 'downloadPDF'])->name('news.downloadPDF');

    //Article
    Route::get('/maqola', [ArticleController::class, 'index_client'])->name('articles.index_client');
    Route::get('articles/{articles}', [ArticleController::class, 'show_client'])->name('articles.show_client');
    //Work
    // Route::get('/ish', [IshController::class, 'index_client'])->name('articles.index_client');
    // Route::get('articles/{articles}', [IshController::class, 'show_client'])->name('articles.show_client');

Route::prefix('admin')->middleware('auth')->group(function(){
    //Doktarant
    Route::get('/doktarants', [DoktarantController::class, 'index'])->name('doktarants.index');
    Route::get('/doktarants/create', [DoktarantController::class, 'create'])->name('doktarants.create');
    Route::post('/doktarants', [DoktarantController::class, 'store'])->name('doktarants.store');
    Route::get('/doktarants/{doktarants}', [DoktarantController::class, 'show'])->name('doktarants.show');
    Route::get('/doktarants/{doktarants}/edit', [DoktarantController::class, 'edit'])->name('doktarants.edit');
    Route::put('/doktarants/{doktarants}', [DoktarantController::class, 'update'])->name('doktarants.update');
    Route::delete('/doktarants/{doktarants}', [DoktarantController::class, 'destroy'])->name('doktarants.destroy');
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
    Route::resource('journals', JournalController::class);

    //PDF
 
});
// Route::get('/pdf', function () {
//     return view('admin.pdf.upload_pdf');
// });
Route::get('/download/{file}', [PDFController::class,'download']);
Route::post('/change-language', [LanguageController::class, 'changeLanguage'])->name('change.language');
require __DIR__.'/auth.php';
