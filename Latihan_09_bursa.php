<h3>Tambah Lowongan</h3>
<hr>
<form method="POST" action="">
    <div class="mb-3">
        <label for="nama_perusahaan" class="form-label">Nama Perusahaan</label>
        <input type="text" class="form-control" id="nama_perusahaan" name="nama_perusahaan" placeholder="Nama perusahaan" required>
    </div>
    <div class="mb-3">
        <label for="posisi" class="form-label">Posisi</label>
        <input type="text" class="form-control" id="posisi" name="posisi" placeholder="Posisi pekerjaan" required>
    </div>
    <div class="mb-3">
        <label for="deskripsi" class="form-label">Deskripsi</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" placeholder="Deskripsi pekerjaan" rows="5" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>

<?php
include 'Latihan_09_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama_perusahaan = $_POST['nama_perusahaan'];
    $posisi = $_POST['posisi'];
    $deskripsi = $_POST['deskripsi'];

    $sql = "INSERT INTO bursa_kerja (nama_perusahaan, posisi, deskripsi) VALUES ('$nama_perusahaan', '$posisi', '$deskripsi')";
    if ($conn->query($sql) === TRUE) {
        echo "<div class='alert alert-success'>Lowongan berhasil ditambahkan!</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . $conn->error . "</div>";
    }
    $conn->close();
}
?>