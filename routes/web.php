<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\hom;
use App\Http\Controllers\homecontroller;

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



// Route::post('/post-test', function (Request $request) {
//     dd(request());
// });


Route::get("/",[homecontroller::class,"index"]);

Route::get("/home",function(){
    return view('home');
});

Route::get("/contact",function(){
    return view('pages.contact');
});

Route::get("/menu",function(){
    return view('pages.menu');
});







Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
