<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    public function index()
    {
        $list_kelas = Kelas::all();
        return view('kelas.index', compact('list_kelas'));
    }
}
