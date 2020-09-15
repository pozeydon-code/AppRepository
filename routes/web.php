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

Route::get('/About Us', function (){
    return view('informacion');
})->name('about');

Route::get('/Contact Us', function (){
    return view('contactanos');
})->name('contact');

// Route::get('/Visualizacion', function (){
//     return view('visualizacion');
// })->name('vistas');

Route::get('/', function () {
    return view('index');
})->name('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/Cuenta', [App\Http\Controllers\HomeController::class, 'acount'])->name('acount');
Route::get('/Visualizacion', [App\Http\Controllers\HomeController::class, 'visualizacion'])->name('vistas');

Route::get('/Contactanos', [App\Http\Controllers\ControllerMail:: class, 'index']);
Route::post('/send', [App\Http\Controllers\ControllerMail:: class, 'send']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
