
<?php
$wajib = ["nim","nama","jurusan","email","nilai","grade","status"];

foreach ($wajib as $item) {
    if (!isset($_GET[$item])) {
        header("Location: index.php");
        exit; }}

$nim = $_GET["nim"];
$nama = $_GET["nama"];
$jurusan = $_GET["jurusan"];
$email = $_GET["email"];
$nilai = $_GET["nilai"];
$grade = $_GET["grade"];
$status = $_GET["status"];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
<style>
    body { font-family: Arial, sans-serif;
    background: #f1f5f9;
    color: #222;
    margin: 0;
    padding: 40px 20px; }

    .dalam { max-width: 650px;
    margin: auto;
    background: white;
    padding: 28px;
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.08); }

    h1 { margin-top: 0;
    font-size: 26px; }

    .baris { padding: 13px 10px;
    border: 1px solid #e5e7eb; }

    .tombol { display: inline-block;
    margin-top: 20px;
    padding: 10px 15px;
    background: #2563eb;
    color: white;
    text-decoration: none;
    border-radius: 5px; }
</style>
</head>
<body>
    <div class="dalam">
        <h1>Detail Mahasiswa</h1>
        <div class="baris"> <b>NIM</b> : <?= $nim ?> </div>
        <div class="baris"> <b>Nama</b> : <?= $nama ?> </div>
        <div class="baris"> <b>Jurusan</b> : <?= $jurusan ?> </div>
        <div class="baris"> <b>Email</b> : <?= $email ?> </div>
        <div class="baris"> <b>Nilai</b> : <?= $nilai ?> </div>
        <div class="baris"> <b>Grade</b> : <?= $grade ?> </div>
        <div class="baris"> <b>Status</b> : <?= $status ?> </div>
        <a class="tombol" href="index.php">Kembali</a>
    </div>
</body>
</html>
