<?php
namespace App\Http\Controllers;

use App\Models\Kategori_barang;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori_barang::all();
        return view('pages.kategori.kategori', compact('kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori' => 'required',
        ]);

        Kategori_barang::create($request->all());

        return redirect()->route('kategori.index')
                         ->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function show(Kategori_barang $kategori)
    {
        return view('pages.kategori.show', compact('kategori'));
    }

    public function edit(Kategori_barang $kategori)
    {
        $kategoriEdit = $kategori;
        $kategori = Kategori_barang::all();
        return view('pages.kategori.kategori', compact('kategori', 'kategoriEdit'));
        // return view('pages.kategori.edit', compact('kategori'));
    }

    public function update(Request $request, Kategori_barang $kategori)
    {
        $request->validate([
            'kategori' => 'required',
        ]);

        $kategori->update($request->all());

        return redirect()->route('kategori.index')
                         ->with('success', 'Kategori berhasil diperbarui.');
    }

    public function destroy(Kategori_barang $kategori)
    {
        $kategori->delete();

        return redirect()->route('kategori.index')
                         ->with('success', 'Kategori berhasil dihapus.');
    }
}
