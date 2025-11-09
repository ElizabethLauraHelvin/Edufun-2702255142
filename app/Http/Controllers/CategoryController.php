<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category as CategoryModel;
use App\Models\Materi as MateriModel;

class CategoryController extends Controller
{
    public function index($kategori)
    {
        $materis = MateriModel::where('Kategori', $kategori)->get();
        return view('category', compact('materis', 'kategori'));
    }
}