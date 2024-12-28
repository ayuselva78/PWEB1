<?php
include 'Latihan_09_config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $pesan = $_POST['pesan'];

    $sql = "INSERT INTO buku_tamu (nama, pesan) VALUES ('$nama', '$pesan')";
    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>Pesan berhasil ditambahkan.</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }
    $conn->close();
}
?>

<div class="container mt-5">
    <h2 class="mb-4">Buku Tamu</h2>
    <!-- Form tambah pesan -->
    <form method="POST" action="">
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" required>
        </div>
        <div class="mb-3">
            <label for="pesan" class="form-label">Pesan</label>
            <textarea class="form-control" id="pesan" name="pesan" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim</button>
    </form>

    <hr>
    <h3>Daftar Pesan</h3>
    <?php
    $sql = "SELECT * FROM buku_tamu ORDER BY id DESC";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<ul class='list-group'>";
        while ($row = $result->fetch_assoc()) {
            echo "<li class='list-group-item'><strong>" . $row['nama'] . ":</strong> " . $row['pesan'] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Belum ada pesan.</p>";
    }
    ?>
</div>
