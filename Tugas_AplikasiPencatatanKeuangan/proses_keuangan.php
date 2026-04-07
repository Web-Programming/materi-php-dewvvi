<?php
$tanggalTransaksi = '';
$jenisTransaksi = '';
$nominal = '';
$keterangan = '';
$postErrors = [];
$postSuccess = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tanggalTransaksi = trim($_POST['tanggalTransaksi'] ?? '');
    $jenisTransaksi = trim($_POST['jenisTransaksi'] ?? '');
    $nominal = trim($_POST['nominal'] ?? '');
    $keterangan = trim($_POST['keterangan'] ?? '');
    // VALIDASI SEDERHANA
    if ($tanggalTransaksi === '') {
        $postErrors[]= 'Tanggal transaksi wajib diisi.';
    }
    if ($jenisTransaksi === '') {
        $postErrors[]= 'harus dipilih';
    } elseif ($jenisTransaksi != 'Pemasukan' && $jenisTransaksi != 'Pengeluaran' ) {
        $postErrors[]= 'pilihan tidak sesuai';
    }
    if ($nominal === '') {
        $postErrors[]= 'nominal wajib diisi.';
    } elseif (!filter_var($nominal, FILTER_VALIDATE_FLOAT)) {
        $postErrors[]= 'format nominal tidak valid.';
    }
    if ($keterangan === '') {
        $postErrors[]= 'keterangan wajib diisi.';
    }
    if (empty($postErrors)) {
        $postSuccess = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Keuangan</title>
</head>
<body>
    <h2>Catatan Proses Keuangan</h2>
    <?php if (!empty($postErrors)) : ?>
        <div class = "error">
            <strong>Validasi gagal</strong>
            <ul>
                <?php foreach ($postErrors as $error) :?>
                    <li><?=htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></li>
                <?php endforeach; ?>
            </ul>
        </div>

    <?php endif; ?>
    <?php if ($postSuccess) : ?>
            <div class = "success">data berhasil dikirim dengan method post</div>
            <div class = "result">
                <strong>hasil post</strong><br>
                Tanggal : <?= htmlspecialchars($tanggalTransaksi, ENT_QUOTES, 'UTF-8')?> <br>
                Jenis : <?= htmlspecialchars($jenisTransaksi, ENT_QUOTES, 'UTF-8')?> <br>
                Nominal : <?= htmlspecialchars($nominal, ENT_QUOTES, 'UTF-8')?> <br>
                Keterangan : <?= htmlspecialchars($keterangan, ENT_QUOTES, 'UTF-8')?> <br>
            </div>
    <?php endif; ?>
    <a href="form_keuangan.php">Kembali ke Form</a>
</body>
</html>
