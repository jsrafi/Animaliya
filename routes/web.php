<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

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

Route::get('/t', function () {
    return view('welcome');
});
Route::get('/', function () {
    return view('test');
});
Route::get('/doctor', function () {
    return view('doctor');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/logout', function () {
    return view('logout');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/petfood', function () {
    return view('petfood');
});
Route::get('/adminpanel', function () {
    return view('adminpanel');
});
Route::get('/apointment', function () {
    return view('apointment');
});
Route::get('/submit', function () {
    return view('submit');
});
Route::get('/schedule', function () {
    return view('schedule');
});
Route::get('/admin', function () {
    return view('admin');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect',[HomeController::class,'redirect']);
?>