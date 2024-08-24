<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
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
    return view('websites.index');
});

Route::get('/team', function () {
    return view('websites.team');
});

Route::get('/about', function () {
    return view('websites.about');
});

Route::get('/events', function () {
    return view('websites.events');
});

Route::get('/contact', function () {
    return view('websites.contact');
});






Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        if(Auth::User()->role==0){
            return view('websites.index');
        }else{
            return view('admin.index');
        }
    })->name('dashboard');
});


Route::get('/insert/movies', function(){
    return view('admin.insertmovies');
});
Route::get('/insert/theatre', function(){
    return view('admin.inserttheatre');
});



Route::post('/movie', [MovieController::class, 'store']);
Route::get('/movies', [MovieController::class, 'movie']);


Route::post('/theatre', [MovieController::class, 'storetheatre']);
Route::get('/theatres', [MovieController::class, 'theatre']);




