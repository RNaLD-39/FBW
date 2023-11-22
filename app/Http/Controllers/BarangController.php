<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class BarangController extends Controller
{
    public function showForm()
    {
        return view('form_barang');
    }

    public function process(Request $request)
    {


        // Buat instance model Barang
        $barang = new Barang();
        $barang->kode_barang = $request->kode_barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->jenis_varian = $request->jenis_varian;
        $barang->qty = $request->qty;
        $barang->harga_jual = $request->harga_jual;

        // Simpan data ke database
        $barang->save();

        $totalHarga = $request->qty * $request->harga_jual;
        $diskon = 0;

        if ($totalHarga >= 500000) {
            $diskon = 50;
        } elseif ($totalHarga >= 200000) {
            $diskon = 20;
        } elseif ($totalHarga >= 100000) {
            $diskon = 10;
        }

        $potongan = ($diskon / 100) * $totalHarga;
        $hargaSetelahDiskon = $totalHarga - $potongan;

        return view('result_barang', compact('barang', 'totalHarga', 'potongan', 'hargaSetelahDiskon'));
    }
    public function utama()
    {
        return view('utama');
    }

    public function content()
    {
        return view('content');
    }
}
