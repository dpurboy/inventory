<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori_barang;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function index()
    {
        $barang = Barang::with('kategori')->get();
        $kategori = Kategori_barang::all();
        return view('pages.barang.barang', compact('barang', 'kategori'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_kategori_barang' => 'required',
            'nama_barang' => 'required',
            'merk' => 'required',
        ]);

        Barang::create($request->all());

        return redirect()->route('barang.index')
                         ->with('success', 'Barang berhasil ditambahkan.');
    }

    public function edit(Barang $barang)
    {
        $barangEdit = $barang;
        $barang = Barang::with('kategori')->get();
        $kategori = Kategori_barang::all();
        return view('pages.barang.barang', compact('barang', 'kategori', 'barangEdit'));
    }

    public function update(Request $request, Barang $barang)
    {
        $request->validate([
            'id_kategori_barang' => 'required',
            'nama_barang' => 'required',
            'merk' => 'required',
        ]);

        $barang->update($request->all());

        return redirect()->route('barang.index')
                         ->with('success', 'Barang berhasil diperbarui.');
    }

    public function destroy(Barang $barang)
    {
        $barang->delete();

        return redirect()->route('barang.index')
                         ->with('success', 'Barang berhasil dihapus.');
    }
}
