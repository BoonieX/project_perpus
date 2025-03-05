<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('category.category');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view( 'category.category-add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_kategori' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
           
        ]);

        Kategori::create($validated);
        return redirect()->route('category.category')->with('success', 'kategori berhasil ditambahkan.');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $kategori= Kategori::find($id);
        return view('category.edit', compact('category'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validated = $request->validate([
            'nama_kategori' => 'required|string|max:255',
            'deskripsi' => 'required|string|max:255',
            
        ]);
$kategori= Kategori::find($id);
        $kategori->update($validated);

        return redirect()->route('category.category')->with('success', 'kategori berhasil diperbarui.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategori = Kategori::findOrFail($id);
        $kategori->delete();

        return redirect()->route('category.category')->with('success', 'kategori berhasil dihapus.');

    }
}
