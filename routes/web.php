<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LangController;

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

Route::middleware('SetLanguage')->group(function () {
    Route::get('/',[\App\Http\Controllers\MainController::class, 'index'])->name('home');
    Route::get('/change-language/{locale}', [LangController::class, 'changeLanguage'])->name('change_language');
    Route::get('/dr-abdulkadir-narin',[\App\Http\Controllers\MainController::class, 'abdul'])->name('abdul');
    Route::get('/iletisim',[\App\Http\Controllers\MainController::class, 'contact_us'])->name('contact_us');
    Route::get('/tv_programs',[\App\Http\Controllers\MainController::class, 'tv_programs'])->name('tv_programs');
    Route::get('/blog_item/{id}', [\App\Http\Controllers\MainController::class, 'get_item'])->name('blog_item');
    Route::get('/blog',[\App\Http\Controllers\MainController::class, 'blog'])->name('blog');
});

Route::middleware('AdminMiddleware')->prefix('admin')->group(function (){
    Route::get('/', [AdminController::class, 'index']);
    Route::get('logout',[AdminController::class, 'logout'])->name('logout');
    Route::get('ContentUpdateGet/{id}', [AdminController::class,'ContentUpdateGet'])->name('ContentUpdateGet');
    Route::post('ContentUpdate/{id}', [\App\Http\Controllers\BlogController::class,'contentUpdate'])->name('ContentUpdate');
    Route::delete('posts/{id}',[\App\Http\Controllers\BlogController::class,'deletePost'])->name('deletePost');
    Route::post('postToDB', [\App\Http\Controllers\BlogController::class,'loadPostToTable'])->name('newContentForBlog');
    Route::post('saveNewWorker', [\App\Http\Controllers\WorkerController::class,'saveNewWorker'])->name('saveNewWorker');
    Route::get('remakeWorkerGet/{id}', [\App\Http\Controllers\WorkerController::class,'remakeWorkerGet'])->name('remakeWorkerGet');
    Route::post('remakeWorker/{id}', [\App\Http\Controllers\WorkerController::class,'remakeWorker'])->name('remakeWorker');
    Route::delete('deleteWorker/{id}', [\App\Http\Controllers\WorkerController::class,'deleteWorker'])->name('deleteWorker');
    Route::post('saveNewPanel', [\App\Http\Controllers\PanelController::class,'saveNewPanel'])->name('saveNewPanel');
    Route::get('remakePanelGet/{id}', [\App\Http\Controllers\PanelController::class,'remakePanelGet'])->name('remakePanelGet');
    Route::post('remakePanel/{id}', [\App\Http\Controllers\PanelController::class,'remakePanel'])->name('remakePanel');
    Route::delete('deletePanel/{id}', [\App\Http\Controllers\PanelController::class,'deletePanel'])->name('deletePanel');
});

Route::get('sign_up',[AdminController::class, 'signUp'])->name('signUp');
Route::post('sign_up',[AdminController::class, 'signUping']);
Route::get('login',[AdminController::class, 'logIn'])->name('signIn');
Route::post('login',[AdminController::class, 'logIning']);
