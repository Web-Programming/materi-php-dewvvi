// Fungsi ketika tombol hero diklik
function klikTombol(){
    alert("Terima kasih sudah mengunjungi website kami!");
}

// Fungsi validasi form kontak
function kirimForm(event){

    // Mencegah reload halaman
    event.preventDefault();

    // Ambil nilai input nama
    let nama = document.getElementById("nama").value;

    // Validasi sederhana (tidak boleh kosong)
    if(nama === ""){
        alert("Nama harus diisi!");
        return false;
    }

    // Notifikasi sukses
    alert("Pesan berhasil dikirim!");

    // Reset form setelah dikirim
    document.getElementById("formKontak").reset();

    return false;
}