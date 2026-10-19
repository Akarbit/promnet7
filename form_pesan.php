
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesan</title>
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

label { display: block;
    margin-top: 15px;
    margin-bottom: 7px; }

input, textarea { width: 100%;
    box-sizing: border-box;
    padding: 10px;
    font-family: inherit;
    border: 1px solid #d1d5db;
    border-radius: 4px; }

button, a { display: inline-block;
    background-color: #2563eb;
    color: white;
    padding: 10px 15px;
    border: 0;
    border-radius: 5px;
    text-decoration: none;
    font-family: inherit;
    font-size: 14px;
    cursor: pointer; }

button { margin-top: 15px; }

a { background-color: #4b5563; }
</style>
</head>
<body>
    <div class="wadah">
        <h1>Form Pesan Mahasiswa</h1>
        <form action="hasil_pesan.php" method="POST">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="kelas">Kelas:</label>
            <input type="text" id="kelas" name="kelas" required>

            <label for="pesan">Pesan / Kesan:</label>
            <textarea id="pesan" name="pesan" rows="5" required></textarea>

            <button type="submit" name="tombol_kirim">Kirim</button>
            <a href="index.php">Kembali</a>
        </form>
    </div>
</body>
</html>
