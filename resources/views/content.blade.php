@extends('utama')

@section('content')
<div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Selamat Datang di Input Barang</h4>
        <p class="card-description">
          Inputkan dibawah sini
        </p>
        <form action="{{ url('/process-barang') }}" method="post"  class="forms-sample">
            @csrf
          <div class="form-group">
            <label for="kode_barang">Kode Barang</label>
            <input type="text" class="form-control" name="kode_barang" placeholder="Kode Barang" required>
          </div>
          <div class="form-group">
            <label for="nama_barang">Nama Barang</label>
            <input type="text" class="form-control" name="nama_barang" placeholder="Nama Barang" required>
          </div>
          <div class="form-group">
            <label for="jenis_varian">Jenis Varian</label>
            <input type="text" class="form-control" name="jenis_varian" placeholder="Jenis Varian" required>
          </div>
          <div class="form-group">
            <label for="qty">Qty</label>
            <input type="number" class="form-control" name="qty" placeholder="qty">
          </div>
          <div class="form-group">
            <label for="harga_jual">Harga Jual</label>
            <input type="text" class="form-control" name="harga_jual" placeholder="Harga Jual">
          </div>
          <button type="submit" class="btn btn-primary me-2">Proses</button>
          <button class="btn btn-light">Cancel</button>
        </form>
      </div>
    </div>
  </div>
@endsection
