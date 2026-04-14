<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pencatatan Keuangan</title>
</head>
<body>
    <h2>Form Pencatatan Keuangan</h2>
    <form action="proses_keuangan.php" method="POST">
        <label for="tanggalTransaksi">Tanggal Transaksi</label>
        <input id= "tanggalTransaksi" name = "tanggalTransaksi" type="date"><br>

        <label for="jenisTransaksi">Jenis Transaksi</label>
        <select name="jenisTransaksi" id="jenisTransaksi">
            <option value="Pilih" selected>pilih</option>
            <option value="Pemasukan">Pemasukan</option>
            <option value="Pengeluaran">Pengeluaran</option>
        </select><br>

         <label for="nominal">Nominal</label>
         <input name="nominal" id="nominal"  type="number" placeholder = "nominal anda ... "><br>

         <label for="keterangan">Keterangan</label>
         <textarea name="keterangan" id="keterangan" rows = "5" placeholder = "Isi keterangan...."></textarea> <br>


         <button type = "submit">Simpan Data</button>
    </form>
</body>
</html>