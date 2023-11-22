@extends('utama')
<h2>Detail Barang</h2>
<p>Kode Barang: {{ $barang->kode_barang }}</p>
<p>Nama Barang: {{ $barang->nama_barang }}</p>
<p>Jenis Varian: {{ $barang->jenis_varian }}</p>
<p>Qty: {{ $barang->qty }}</p>
<p>Harga Jual: {{ $barang->harga_jual }}</p>

<h2>Ringkasan Pembelian</h2>
<p>Total Harga: {{ $totalHarga }}</p>
<p>Potongan Harga: {{ $potongan }}</p>
<p>Harga Setelah Diskon: {{ $hargaSetelahDiskon }}</p>
