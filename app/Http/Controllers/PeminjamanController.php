<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Peminjaman;

class PeminjamanController extends Controller
{
    
    public function index()
    {
        $peminjaman = Peminjaman::all();
        return view('layouts.peminjaman.index', compact('peminjaman'));
    }

    public function create()
    {
        return view('layouts.peminjaman.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_anggota' => 'required|integer',
            'id_buku' => 'required|integer',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'nullable|date',
            'status' => 'required|string',
        ]);
        

        Peminjaman::create($request->all());
        return redirect()->route('layouts.peminjaman.index')->with('success', 'Peminjaman berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $peminjaman = Peminjaman::findOrFail($id);
        return view('layouts.peminjaman.edit', compact('peminjaman'));
    }
    

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_anggota' => 'required|integer',
            'id_buku' => 'required|integer',
            'tanggal_pinjam' => 'required|date',
            'tanggal_kembali' => 'nullable|date',
            'status' => 'required|string',
        ]);

        $peminjaman = Peminjaman::findOrFail($id);
        $peminjaman->update($request->all());

        return redirect()->route('layouts.peminjaman.index')->with('success', 'Peminjaman berhasil diperbarui!');
    }

    public function destroy($id)
    {
        Peminjaman::findOrFail($id)->delete();
        return redirect()->route('layouts.peminjaman.index')->with('success', 'Peminjaman berhasil dihapus!');
    }
}
