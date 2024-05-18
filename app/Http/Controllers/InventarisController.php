<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\DetailBarang;
use App\Models\Kategori_barang;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class InventarisController extends Controller
{
    public function index(Request $request)
    {
        $barang = Barang::with('kategori')
            ->withCount(['detail_barang as barang_b' => function ($query) {
                $query->where('status_barang', 'B');}])
            ->withCount(['detail_barang as barang_r' => function ($query) {
                $query->where('status_barang', 'R');}])
            ->withCount(['detail_barang as barang_p' => function ($query) {
                $query->where('status_barang', 'P');
            }])
            ->withCount(['detail_barang as barang_d' => function ($query) {
                $query->where('status_barang', 'D');
            }])->get(); 
        return view('pages.inventaris.index', compact('barang'));
    }

}
