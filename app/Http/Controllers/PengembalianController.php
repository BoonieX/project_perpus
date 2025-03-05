<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengembalian;

class PengembalianController extends Controller
{
    public function index()
    {
        $pengembalians = Pengembalian::paginate(10);
        return view('layouts.pengembalian.index', compact('pengembalians'));
    }
    

    // public function show(Pengembalian $pengembalian)
    // {
    //     return view('layt.show', compact('pengembalian'));
    // }
}
