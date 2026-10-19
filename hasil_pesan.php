
<?php
if (!isset($_POST["tombol_kirim"])) {
    header("Location: form_pesan.php");
    exit;
}

$nama = $_POST["nama"];
$kelas = $_POST["kelas"];
$pesan = $_POST["pesan"];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pesan</title>
<style>
html { background-color: #f1f5f9; }

body { font-family: Arial, sans-serif;
    max-width: 520px;
    margin: 40px auto;
    padding: 28px 32px;
    background-color: white;
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.08); }

h1 { font-size: 26px; }

.baris { padding: 12px 0;
    border-bottom: 1px solid #e5e7eb; }

a { display: inline-block;
    margin-top: 20px;
    background-color: #2563eb;
    color: white;
    padding: 10px 15px;
    border-radius: 5px;
    text-decoration: none;
    font-size: 14px; }
</style>
</head>
<body>
    <div class="wadah">
        <h1>Hasil Pesan Mahasiswa</h1>
        <div class="baris"> <b>Nama</b> : <?= $nama ?> </div>
        <div class="baris"> <b>Kelas</b> : <?= $kelas ?> </div>
        <div class="baris"> <b>Pesan / Kesan</b> : <?= $pesan ?> </div>
        <a href="index.php">Kembali ke Daftar Mahasiswa</a>
    </div>
</body>
</html>
