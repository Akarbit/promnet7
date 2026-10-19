<?php

$mahasiswa = [
    [ "nim" => "25001",
        "nama" => "Arohid Maulana",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email" => "arohidmaul@upi.edu",
        "nilai" => 90],

    [ "nim" => "25002",
        "nama" => "Muhamad Firdaus Fathurahman",
        "jurusan" => "Sistem Telekomunikasi",
        "email" => "daus@upi.edu",
        "nilai" => 71],

    [ "nim" => "25332",
        "nama" => "Antono",
        "jurusan" => "Mekatronika dan Kecerdasan Buatan",
        "email" => "Anton@upi.edu",
        "nilai" => 56],

    [ "nim" => "25004",
        "nama" => "Muhammad Faris",
        "jurusan" => "Pendidikan Sistem dan Teknologi Informasi",
        "email" => "faris@upi.edu",
        "nilai" => 92],

    [ "nim" => "25005",
        "nama" => "Aurora Sintya",
        "jurusan" => "Mekatronika dan Kecerdasan Buatan",
        "email" => "rora@upi.edu",
        "nilai" => 58] ];

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
<style>
    body { font-family: Arial, sans-serif;
    background: #f1f5f9;
    color: #222;
    margin: 0;
    padding: 40px 20px; }

    .dalam { max-width: 1100px;
    margin: 0 auto;
    background: white;
    padding: 28px 24px;
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.08); }

    .head { display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 45px; }

    h1 { margin: 0 0 8px;
    font-size: 26px; }

    .sub { margin: 0;
    font-size: 16px; }

    .tombol { display: inline-block;
    padding: 10px 15px;
    background: #2563eb;
    color: white;
    text-decoration: none;
    border-radius: 5px;
    font-size: 14px; }

    .tabel_luar { width: 100%;
    overflow-x: auto; }

    .table { width: 100%;
    border-collapse: collapse;
    font-size: 15px; }

    th { background: #eaf0ff;
    text-align: left;
    padding: 13px 10px;
    border: 1px solid #e5e7eb; }

    td { padding: 13px 10px;
    border: 1px solid #e5e7eb; }

    .lulus { color: #15803d;
    font-weight: bold; }

    .tidak-lulus { color: #dc2626;
    font-weight: bold; }

    .catatan { margin-top: 25px;
    font-size: 14px;
    line-height: 1.8; }
</style>
</head>
<body>
    <div class="dalam">
    <div class="head">
    <div>
        <h1>Daftar Mahasiswa</h1>
        <p class="sub">Mini Website Basic PHP</p>
    </div>
        <a class="tombol" href="form_pesan.php">Isi Form Pesan</a>
    </div>

<div class="tabel_luar">
    <table class="table">
        <thead>
            <tr>
<th>No.</th>
<th>NIM</th>
<th>Nama</th>
<th>Jurusan</th>
<th>Email</th>
<th>Nilai</th>
<th>Grade</th>
<th>Status</th>
<th>Detail</th>
            </tr>
        </thead>
<tbody>


<?php
$no = 1;

foreach ($mahasiswa as $data) :
    if ($data["nilai"] >= 80) {
        $grade = "A";
    }
    elseif ($data["nilai"] >= 70) {
        $grade = "B";
    }
    elseif ($data["nilai"] >= 60) {
        $grade = "C";
    }
    else {
        $grade = "D";
    }

    if ($data["nilai"] >= 70) {
        $status = "Lulus";
        $kelas = "lulus";
    }
    else {
        $status = "Tidak Lulus";
        $kelas = "tidak-lulus";
    }
?>

<tr>
    <td><?= $no ?></td>
    <td><?= $data["nim"] ?></td>
    <td><?= $data["nama"] ?></td>
    <td><?= $data["jurusan"] ?></td>
    <td><?= $data["email"] ?></td>
    <td><?= $data["nilai"] ?></td>
    <td><?= $grade ?></td>
    <td class="<?= $kelas ?>"><?= $status ?></td>
    <td>
        <a class="tombol" href="detail.php?nim=<?= $data["nim"] ?>&nama=<?= $data["nama"] ?>&jurusan=<?= $data["jurusan"] ?>&email=<?= $data["email"] ?>&nilai=<?= $data["nilai"] ?>&grade=<?= $grade ?>&status=<?= $status ?>">Lihat Detail</a>
    </td>
</tr>

<?php
    $no++;
endforeach;
?>
</table>
</div>

<div class="catatan">
    <strong>Ketentuan Grade:</strong>
    nilai 80 ke atas = A, 70 ke atas = B,
    60 ke atas = C, di bawah 60 = D.
    <br>
    <strong>Ketentuan Status:</strong>
    nilai 70 ke atas = Lulus,
    di bawah 70 = Tidak Lulus.
</div>
</div>
</body>
</html>
