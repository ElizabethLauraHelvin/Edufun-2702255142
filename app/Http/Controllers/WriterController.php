<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Writer as WriterModel;

class WriterController extends Controller
{
    public function index(){
        $writers = WriterModel::all();
        return view('writer', compact('writers'));
    }
}
