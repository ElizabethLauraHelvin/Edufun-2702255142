<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Materi as MateriModel;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil hanya materi dengan id = 1 dan id = 5
        $materis = MateriModel::whereIn('id', [1, 5])->get();

        return view('homepage', compact('materis'));
    }
}
