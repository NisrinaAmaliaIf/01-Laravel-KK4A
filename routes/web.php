<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ImageController;

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
    return view('index',[
    "title" => "Beranda",
    ]);
});

Route::get('/about', function(){
    return view('about', [
    "title" => "About",
    "nama" => "Nisrina Amalia Iffatunnisa",
    "email" => "3103120165@student.smktelkom-pwt.sch.id",
    "gambar" => "fotonisrina.PNG",
    "alamat" => "Banyumas, Jawa Tengah",
    "description" => "Saya adalah seorang pelajar SMK Telkom Purwokerto kelas XI RPL 6 Angkatan 28"
    ]);
});

Route::get('/gallery',function(){
    return view('gallery',[
    "title" => "Gallery",
    "smk" => "SMK Telkom Purwokerto | 2021-Sekarang",
    "smp" => "SMP Negeri 1 Kebasen | 2017-2021 "
    ]);
});

Route::get('/contacts', function (){
    return view('contacts', [
        "title" => "Contacts"
    ]);
});

//Route::resource('/contacts', ContactController::class);
Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/contacts/store', [ContactController::class, 'store'])->name('contacts.store');

Auth::routes();

Route::group(['middleware' => ['auth']], function(){
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/contacts/index', [ContactController::class, 'index'])->name('contacts.index');
Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
Route::post('/contacts/{id}/update', [ContactController::class, 'update'])->name('contacts.update');
Route::get('/contacts/{id}/destroy', [ContactController::class, 'destroy'])->name('contacts.destroy');


Route::get('/image/index', [ImageController::class, 'index'])->name('image.index');
//buat image
Route::get('/image/tampil', [ImageController::class, 'tampil'])->name('image.tampil');
Route::get('/upload',[ImageController::class,'uploadForm']);
Route::post('/upload',[ImageController::class,'uploadFile'])->name('upload.uploadfile');
Route::get('/image/{id}/edit', [ImageController::class, 'edit'])->name('image.edit');
Route::post('/image/{id}/update', [ImageController::class, 'update'])->name('image.update');
Route::get('/image/{id}/destroy', [ImageController::class, 'destroy'])->name('image.destroy');
Route::get('/search', [ImageController::class, 'search'])->name('search');


//imagecontroller
//Route::get('/image/index',[ImageController::class,'image.index']);
//Route::get('/image/addimg',[ImageController::class,'image.create']);


});
Route::get('/gallery', [ImageController::class, 'showgallery'])->name('showgallery');
Route::get('/export', [ImageController::class, 'export'])->name('export');
Route::get('/image_detail/{id}', [ImageController::class, 'detail'])->name('detail');
