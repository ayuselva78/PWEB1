<h3>Penelusuran Alumni</h3>
<hr>
<form method="GET" action="">
    <input type="hidden" name="menu" value="penelusuran">
    <div class="mb-3">
        <label for="search" class="form-label">Cari Alumni</label>
        <input type="text" class="form-control" id="search" name="search" placeholder="Masukkan nama atau tahun lulus">
    </div>
    <button type="submit" class="btn btn-primary">Cari</button>
</form>

<?php
include 'Latihan_09_config.php';

if (isset($_GET['search'])) {
    $search = $_GET['search'];
    $sql = "SELECT * FROM alumni WHERE nama LIKE '%$search%' OR tahun_lulus LIKE '%$search%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table class='table table-bordered'>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Tahun Lulus</th>
                    <th>Jurusan</th>
                    <th>Foto</th>
                </tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row['id'] . "</td>
                    <td>" . $row['nama'] . "</td>
                    <td>" . $row['tahun_lulus'] . "</td>
                    <td>" . $row['jurusan'] . "</td>
                    <td><img src='" . $row['foto'] . "' width='50'></td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "<div class='alert alert-danger'>Data tidak ditemukan.</div>";
    }
}
$conn->close();
?>