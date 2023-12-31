<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

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
    return view('welcome');
});


Route::get('/categories', function(){
    return response()->json(
        request()->name
    );
});

Route::get('/download', function(){
    return response()->download('images/h0pNiH6uXpO0bTxIzAzsvu8CQiqjZYkfxraiZwNQ.png');
});

Route::get('/book/{id?}', [WelcomeController::class,'index']);
Route::get('/custom/response', function(){
    return response()->download('/storage/app/public/kire.txt');
});

Route::get('/admin', [AdminController::class,'index'])->middleware(['auth','admin']);

Route::resource('books', BooksController::class);

Route::post('/input',[WelcomeController::class,'inputpractice'])->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
