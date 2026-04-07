<?php
$nama = '';
$email = '';
$pesan = '';
$postErrors = [];
$postSuccess = false;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = trim($_POST['nama'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $pesan = trim($_POST['pesan'] ?? '');
    // VALIDASI SEDERHANA
    if ($nama === '') {
        $postErrors[]= 'Nama wajib diisi.';
    }
    if ($email === '') {
        $postErrors[]= 'email wajib diisi.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $postErrors[]= 'format email tidak valid.';
    }
    if ($pesan === '') {
        $postErrors[]= 'pesan wajib diisi.';
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
    <title>Materi dasar php form - post</title>
</head>
<body>
    <h2>Contoh form post</h2>
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
            <div class = "success">date berhasil dikirim dengan method post</div>
            <div class = "result">
                <strong>hasil post</strong><br>
                Name : <?= htmlspecialchars($nama, ENT_QUOTES, 'UTF-8')?> <br>
                Email : <?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8')?> <br>
                Pesan: <?= htmlspecialchars($pesan, ENT_QUOTES, 'UTF-8')?> <br>
            </div>
    <?php endif; ?>
    <a href="index2.php">kembali ke form</a>
</body>
</html>
