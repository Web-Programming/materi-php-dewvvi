/* ============================================
   script.js — Template Kebun Sawit
   Logika simpel, mudah dipahami pemula
   ============================================ */


/* ── 1. SMOOTH SCROLL ───────────────────────
   Saat klik link navbar (misal #about),
   halaman tidak loncat tapi scroll halus
─────────────────────────────────────────── */
var semuaLink = document.querySelectorAll('a[href^="#"]');

semuaLink.forEach(function(link) {
  link.addEventListener('click', function(e) {
    var target = document.querySelector(this.getAttribute('href'));
    if (target) {
      e.preventDefault();
      target.scrollIntoView({ behavior: 'smooth' });
    }
  });
});


/* ── 2. TOMBOL KIRIM PESAN ──────────────────
   Cek apakah semua kolom sudah diisi.
   Kalau belum → muncul border merah.
   Kalau sudah → tampilkan pesan sukses.
─────────────────────────────────────────── */
var tombolKirim = document.getElementById('btnKirim');

tombolKirim.addEventListener('click', function() {

  // Ambil nilai dari setiap input
  var nama  = document.getElementById('inputNama').value;
  var email = document.getElementById('inputEmail').value;
  var pesan = document.getElementById('inputPesan').value;

  // Cek apakah ada yang kosong
  if (nama === '' || email === '' || pesan === '') {

    // Tandai input yang kosong dengan border merah
    if (nama === '')  document.getElementById('inputNama').style.borderColor  = 'red';
    if (email === '') document.getElementById('inputEmail').style.borderColor = 'red';
    if (pesan === '') document.getElementById('inputPesan').style.borderColor = 'red';

  } else {

    // Semua terisi → tampilkan pesan sukses
    document.getElementById('pesanSukses').style.display = 'block';

    // Kosongkan semua input setelah kirim
    document.getElementById('inputNama').value  = '';
    document.getElementById('inputEmail').value = '';
    document.getElementById('inputPesan').value = '';

    // Kembalikan border ke normal
    document.getElementById('inputNama').style.borderColor  = '';
    document.getElementById('inputEmail').style.borderColor = '';
    document.getElementById('inputPesan').style.borderColor = '';

    // Sembunyikan pesan sukses lagi setelah 4 detik
    setTimeout(function() {
      document.getElementById('pesanSukses').style.display = 'none';
    }, 4000);

  }

});
