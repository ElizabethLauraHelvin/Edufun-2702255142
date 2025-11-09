<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\MateriController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return redirect()->route('homepage');
// });

Route::get('/', [HomeController::class, 'index'])->name('homepage');

Route::get('/homepage', function(){
    return view('homepage');
})->name('homepage');

Route::get('/writers', function(){
    return view('writers');
})->name('writers');

Route::get('/about', function(){
    return view('about');
})->name('about');

Route::get('/popular', function(){
    return view('popular');
})->name('popular');

// Route::get('/category', function(){
//     return view('category');
// })->name('category');

Route::get('/materi', function(){
    return view('materi');
})->name('materi');

Route::get('/writers', [WriterController::class, 'index'])->name('writers');

Route::get('/category/{kategori}', [CategoryController::class, 'index'])->name('category');

Route::get('/materi/{id}', [MateriController::class, 'show'])->name('materi.show');
