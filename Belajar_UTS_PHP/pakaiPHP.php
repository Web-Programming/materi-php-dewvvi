<?php
$pesanMasuk = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = htmlspecialchars($_POST["nama"]);
    $email = htmlspecialchars($_POST["email"]);
    $pesan = htmlspecialchars($_POST["pesan"]);

    $pesanMasuk = "Pesan berhasil dikirim, terima kasih $nama!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Nyawit Raharja</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
.bg-utama {
    background: url('sawit.jpg') center/cover no-repeat;
    height: 100vh;
}

.lapisan-gelap {
    background: rgba(0,0,0,0.6);
    height: 100%;
}

.gambar-kartu {
    height: 200px;
    object-fit: cover;
}
</style>

</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-success">
    <div class="container">
        <a class="navbar-brand fw-bold" href="#">RAHARJA SAWIT</a>

        <div>
            <a class="nav-link d-inline text-white" href="#">Beranda</a>
            <a class="nav-link d-inline text-white" href="#">Tentang</a>
            <a class="nav-link d-inline text-white" href="#">Hasil</a>
            <a class="nav-link d-inline text-white" href="#">Kontak</a>
        </div>
    </div>
</nav>

<!-- BAGIAN ATAS -->
<section class="bg-utama">
    <div class="lapisan-gelap d-flex align-items-center">
        <div class="container text-center text-white">
            <h1 class="display-3 fw-bold">Nyawit Raharja</h1>
            <p class="lead">Mendedikasikan hidup untuk kelapa sawit berkelanjutan</p>
            <button class="btn btn-warning" onclick="klikTombol()">Kenali Saya Lebih Dekat</button>
        </div>
    </div>
</section>

<!-- TENTANG -->
<section class="container my-5">
    <div class="row align-items-center">

        <!-- GAMBAR -->
        <div class="col-md-5 text-center mb-3">
            <img src="profil.jpg" class="img-fluid rounded-pill" alt="profil">
        </div>

        <!-- TEKS -->
        <div class="col-md-7">
            <h2>Siapa Nyawit Raharja?</h2>
            <p>
                Petani sawit berpengalaman dengan sistem pertanian modern dan berkelanjutan.
            </p>

            <div class="row text-center mt-4">
                <div class="col-4">
                    <h4>50+</h4>
                    <p>Hektar Lahan</p>
                </div>
                <div class="col-4">
                    <h4>100%</h4>
                    <p>Organik Parsial</p>
                </div>
                <div class="col-4">
                    <h4>25 Thn</h4>
                    <p>Pengalaman</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- HASIL -->
<section class="container my-5">
    <h2 class="text-center mb-4">Dokumentasi & Hasil Panen</h2>

    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="1.jpg" class="card-img-top gambar-kartu">
                <div class="card-body text-center">
                    <h5>Pembibitan Unggul</h5>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="2.jpg" class="card-img-top gambar-kartu">
                <div class="card-body text-center">
                    <h5>Pemeliharaan Intensif</h5>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card">
                <img src="3.jpg" class="card-img-top gambar-kartu">
                <div class="card-body text-center">
                    <h5>Panen Raya TBS</h5>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- KONTAK -->
<section class="container my-5">
    <h2 class="text-center">Hubungi Nyawit</h2>

    <?php if($pesanMasuk) echo "<div class='alert alert-success'>$pesanMasuk</div>"; ?>

    <form method="POST" onsubmit="return cekForm()">
        <input type="text" name="nama" class="form-control mb-2" placeholder="Nama">
        <input type="email" name="email" class="form-control mb-2" placeholder="Email">
        <textarea name="pesan" class="form-control mb-2" placeholder="Pesan"></textarea>
        <button class="btn btn-success">Kirim</button>
    </form>
</section>

<!-- FOOTER -->
<footer class="bg-dark text-white text-center p-3">
    © 2026 Nyawit Raharja | All Rights Reserved | <br>
    <a href="terms.php" class="text-warning">Terms of Use</a>
</footer>

<!-- JS -->
<script>
function klikTombol(){
    alert("Terima kasih sudah mengunjungi website kami!");
}

function cekForm(){
    let nama = document.querySelector('[name="nama"]').value;
    if(nama == ""){
        alert("Nama harus diisi!");
        return false;
    }
    return true;
}
</script>

</body>
</html>