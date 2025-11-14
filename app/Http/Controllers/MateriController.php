<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Materi as MateriModel;
use App\Models\Writer as WriterModel;

class MateriController extends Controller
{
    public function showByCategory($kategori)
    {
        // Ambil semua materi dengan kategori yang sama
        $materis = MateriModel::where('Cat', $kategori)
                        ->with('writer') // relasi writer
                        ->get();

        // Kirim data kategori dan daftar materinya ke view
        return view('category', compact('materis', 'kategori'));
    }

    public function showByWriter($writerId){
        $writer = WriterModel::findOrFail($writerId);

        $materis = MateriModel::where('writer_id', $writerId)
            ->with('writer')
            ->get();

        return view ('materiWriter', compact('materis', 'writer'));
    }

    public function showDetail($materiId){

        $materis = MateriModel::with('writer')
            ->findOrFail($materiId);
        
            $writer = $materis->writer;

        return view('materiContent', compact('materis', 'writer'));
    }

    public function showPopular(){
        $materis = MateriModel::with('writer')
            ->paginate(3);

        return view('popular', compact('materis'));
    }

    public function showHomepage(){
        $materis = MateriModel::with('writer')
            ->orderBy('id', 'DESC')
            -> take(2)
            ->get();

        return view('homepage', compact('materis'));
    }


}
