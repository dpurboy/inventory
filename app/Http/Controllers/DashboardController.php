<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\DetailBarang;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Request $request)
    {    
        $jml_barang_b = DetailBarang::where('status_barang','=','B')->count();
        $jml_barang_r = DetailBarang::where('status_barang','=','R')->count();
        $jml_barang_p = DetailBarang::where('status_barang','=','P')->count();
        $jml_barang_d = DetailBarang::where('status_barang','=','D')->count();

        $barang_b = DetailBarang::selectRaw('barangs.nama_barang, COUNT(detail_barangs.id) as jml')
                    ->leftJoin('barangs','barangs.id','detail_barangs.id_barang')
                    ->where('status_barang','=','B')
                    ->groupBy('barangs.nama_barang')->get();
        
        $series_b = [];
        $labels_b = [];

        foreach ($barang_b as $barang) {
            array_push($series_b, $barang->jml);
            array_push($labels_b, $barang->nama_barang);
        }

        $barang_r = DetailBarang::selectRaw('barangs.nama_barang, COUNT(detail_barangs.id) as jml')
                    ->leftJoin('barangs','barangs.id','detail_barangs.id_barang')
                    ->where('status_barang','=','R')
                    ->groupBy('barangs.nama_barang')->get();
        
        $series_r = [];
        $labels_r = [];

        foreach ($barang_r as $barang) {
            array_push($series_r, $barang->jml);
            array_push($labels_r, $barang->nama_barang);
        }

        $barang_p = DetailBarang::selectRaw('barangs.nama_barang, COUNT(detail_barangs.id) as jml')
                    ->leftJoin('barangs','barangs.id','detail_barangs.id_barang')
                    ->where('status_barang','=','P')
                    ->groupBy('barangs.nama_barang')->get();

        $series_p = [];
        $labels_p = [];

        foreach ($barang_p as $barang) {
            array_push($series_p, $barang->jml);
            array_push($labels_p, $barang->nama_barang);
        }

        $barang_d = DetailBarang::selectRaw('barangs.nama_barang, COUNT(detail_barangs.id) as jml')
                    ->leftJoin('barangs','barangs.id','detail_barangs.id_barang')
                    ->where('status_barang','=','D')
                    ->groupBy('barangs.nama_barang')->get();
        
        $series_d = [];
        $labels_d = [];

        foreach ($barang_d as $barang) {
            array_push($series_d, $barang->jml);
            array_push($labels_d, $barang->nama_barang);
        }

        $result = [
            'series_b' => $series_b,
            'labels_b' => $labels_b,
            'series_r' => $series_r,
            'labels_r' => $labels_r,
            'series_p' => $series_p,
            'labels_p' => $labels_p,
            'series_d' => $series_d,
            'labels_d' => $labels_d,
        ];
        
        return view('dashboard', compact('jml_barang_b', 
                                        'jml_barang_r', 
                                        'jml_barang_p', 
                                        'jml_barang_d',
                                        'result'));
    }
}
