<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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

Route::get('/', function () {
    return view('home',[
    "title" => "Home",
    ]);
});

Route::get('/about', function(){
    return view('about', [
    "title" => "About",
    "nama" => "Nisrina Amalia Iffatunnisa",
    "email" => "3103120165@student.smktelkom-pwt.sch.id",
    "gambar" => "nisrina.JPG"
    ]);
});

Route::get('/gallery',function(){
    return view('gallery',[
    "title" => "Gallery",
    ]);
});

Route::get('/contacts', function (){
    return view('contacts', [
        "title" => "Contacts"
    ]);
});

Route::resource('/contacts', ContactController::class);
