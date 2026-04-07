<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi dasar php form - post</title>
</head>
<body>
    <h2>Contoh form post</h2>
    <form action="proses.php" method="POST">
        <label for="nama">Nama</label>
        <input id= "nama" name = "nama" type="text" placeholder = "Nama anda"> <br>
        <label for="email">Email</label>
        <input id= "email" name = "email" type="email" placeholder = "Nama@email.com"> <br>
         <label for="pesan">Pesan</label>
         <textarea name="pesan" id="pesan" rows = "4" placeholder = "Isi pesan anda"></textarea><br>
         <button type = "submit">Kirim (POST)</button>
    </form>
</body>
</html>