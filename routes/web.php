<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MainController;


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


Route::get('/homePage',[MainController::Class, 'homePage'])->name('homePage');
Route::get('/services',[MainController::Class, 'servicePage'])->name('service');      
Route::get('/aboutUs',[MainController::Class, 'aboutPage'])->name('about');
Route::get('/guards',[MainController::Class, 'guardPage'])->name('guard');
Route::get('/contact',[MainController::Class, 'contactUsPage'])->name('contactUs');

Route::post ('/contactForm',[MailController::class,'sendMail'])->name('sendMail');

Auth::routes(['verify'=>true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
