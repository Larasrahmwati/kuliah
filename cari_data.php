<?php
include 'koneksi.php';

$npm = isset($_GET['npm']) ? mysqli_real_escape_string($koneksi, $_GET['npm']) : '';
$nama = isset($_GET['nama']) ? mysqli_real_escape_string($koneksi, $_GET['nama']) : '';
$prodi = isset($_GET['prodi']) ? mysqli_real_escape_string($koneksi, $_GET['prodi']) : '';

$query = "SELECT * FROM mahasiswa WHERE 1=1";

if (!empty($npm)) {
    $query .= " AND npm LIKE '%$npm%'";
}
if (!empty($nama)) {
    $query .= " AND nama LIKE '%$nama%'";
}
if (!empty($prodi)) {
    $query .= " AND prodi LIKE '%$prodi%'";
}

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
