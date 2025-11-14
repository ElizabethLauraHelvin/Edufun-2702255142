<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MateriController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as RoutingRoute;
use App\Http\Controllers\WriterController as WriterController;

Route::get('/', [MateriController::class, 'showHomepage'])->name('homepage');

// Route::get('/category', function(){
//     return view('category');
// })->name('category');

// Route::get('/category/{kategori}', function($kategori){
//     return view ('category', ['kategori' => $kategori]);
// })->name('category');

Route::get('/category/{kategori}', [MateriController::class, 'showByCategory'])->name('category');

Route::get('/writer', [WriterController::class, 'index'])->name('writer');

Route::get('/writer/{writer_id}', [MateriController::class, 'showByWriter'])->name('materiWriter');

Route::get('/about', function(){
    return view('about');
})->name('about');

Route::get('/popular', [MateriController::class, 'showPopular'])->name('popular');

Route::get('/materiContent/{materi_id}',  [MateriController::class, 'showDetail'])
->name('materiContent');
