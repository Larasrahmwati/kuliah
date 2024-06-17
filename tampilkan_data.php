<?php
include 'koneksi.php';

$proses = mysqli_query($koneksi,"SELECT * FROM mahasiswa") 
or die (mysqli_error($koneksi));
$query = "SELECT * FROM mahasiswa";
$result = mysqli_query($koneksi, $query);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>
            <tr>
                <th>NPM</th>
                <th>Nama</th>
                <th>Prodi</th>
            </tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['npm']}</td>
                <td>{$row['nama']}</td>
                <td>{$row['prodi']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada data yang ditemukan";
}

mysqli_close($koneksi);
?>
