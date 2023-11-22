<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Barang</title>
</head>
<body>
    <h2>Form Input Barang</h2>

    <form action="{{ url('/process-barang') }}" method="post">
        @csrf
        <label for="kode_barang">Kode Barang:</label>
        <input type="text" name="kode_barang" required>
        <br>

        <label for="nama_barang">Nama Barang:</label>
        <input type="text" name="nama_barang" required>
        <br>

        <label for="jenis_varian">Jenis Varian:</label>
        <input type="text" name="jenis_varian" required>
        <br>

        <label for="qty">Qty:</label>
        <input type="number" name="qty" required>
        <br>

        <label for="harga_jual">Harga Jual:</label>
        <input type="text" name="harga_jual" required>
        <br>

        <button type="submit">Proses</button>
    </form>
</body>
</html>
