<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Pencarian</title>
</head>
<body>
    <form action="cari_data.php" method="GET">
        <label for="id">NPM:</label>
        <input type="text" id="id" name="npm">
        <label for="nama_mahasiswa">Nama Belakang:</label>
        <input type="text" id="nama_mahasiswa" name="nama">
        <label for="prodi">Prodi:</label>
        <input type="text" id="prodi" name="prodi">
        <button type="submit">Cari</button>
    </form>
</body>
</html>
