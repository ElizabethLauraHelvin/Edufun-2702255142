<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Writer as WriterModel;
use App\Models\Materi as MateriModel;

class MateriController extends Controller
{
    public function show($id)
    {
 
        $materis = MateriModel::with('writer')->findOrFail($id);

        // Kirim ke view
        return view('materi.show', compact('materis'));
    }
}
