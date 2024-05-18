<?php

namespace App\Http\Controllers;

use App\Models\DetailBarang;
use App\Models\Barang;
use Illuminate\Http\Request;

class DetailBarangController extends Controller
{
    public function index()
    {
        $detail_barang = DetailBarang::with('barang')->get();
        $barang = Barang::with('kategori')->get();
        return view('pages.detail_barang.detail_barang', compact('detail_barang', 'barang'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_barang' => 'required',
            'status_barang' => 'required|in:B,R,P,D',
        ]);

        $barang = Barang::find($request->id_barang);
        $kode_barang = $barang->kategori->kategori . '/' . $barang->merk . '/' . $barang->nama_barang . '/' . now()->format('YmdHis');

        DetailBarang::create([
            'id_barang' => $request->id_barang,
            'kode_barang' => $kode_barang,
            'status_barang' => $request->status_barang,
        ]);

        return redirect()->route('detail_barang.index')
                         ->with('success', 'Detail Barang berhasil ditambahkan.');
    }

    public function edit(DetailBarang $detail_barang)
    {
        $detailBarangEdit = $detail_barang;
        $detail_barang = DetailBarang::with('barang')->get();
        $barang = Barang::with('kategori')->get();
        return view('pages.detail_barang.detail_barang', compact('detail_barang', 'barang', 'detailBarangEdit'));
    }

    public function update(Request $request, DetailBarang $detail_barang)
    {
        $request->validate([
            'status_barang' => 'required|in:B,R,P,D',
        ]);

        $detail_barang->update([
            'status_barang' => $request->status_barang,
        ]);

        return redirect()->route('detail_barang.index')
                         ->with('success', 'Detail Barang berhasil diperbarui.');
    }

    public function destroy(DetailBarang $detail_barang)
    {
        $detail_barang->delete();

        return redirect()->route('detail_barang.index')
                         ->with('success', 'Detail Barang berhasil dihapus.');
    }
}
