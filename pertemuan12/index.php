<?php
// contoh get
$keyword = trim($_GET['keyword']??'');
$kategori = trim($_GET['kategori']??'semua');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi dasar PHP form -get</title>
</head>
<body>
    <h2> 1) Contoh form get</h2>
    <form method = "GET" action="">
        <label for="keyword">keyowrd pencarian</label>
        <input id="keyword" name = "keyword" type = "text"
        value ="<?=htmlspecialchars($keyword, ENT_QUOTES, "UTF-8")?>"
        placeholder = "contoh: laptop">
        
        <label for="kategori">Kategori</label>
        <select name="kategori" id="kategori">
            <option value="semua" <?= $kategori === 'semua' ? 'selected' : '' ?>>semua</option>
            <option value="Elektronik" <?= $kategori === 'Elektronik' ? 'selected' : '' ?>>Elektronik</option>
            <option value="Pakaian" <?= $kategori === 'Pakaian' ? 'selected' : '' ?>>Pakaian</option>
            <option value="Makanan" <?= $kategori === 'Makanan' ? 'selected' : '' ?>>Makanan</option>
        </select>
        <button type = "submit">Cari</button>
    </form>
    <?php if (isset($_GET['keyword']) || isset($_GET['kategori'])) : ?>
        <div class = "result">
            <strong>Hasil get : </strong> <br>
            keyword: <?= htmlspecialchars($keyword, ENT_QUOTES, 'UTF-8') ?> <br>
            kategori: <?= htmlspecialchars($kategori, ENT_QUOTES, 'UTF-8') ?>
        </div>
    <?php endif; ?>

    <h2>2) <a href="index2.php">contoh form post</a></h2>
</body>
</html>
