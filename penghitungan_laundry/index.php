<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penghitungan Laundry Antar Jemput</title>
</head>
<body>
    <h2>Form Pemesanan laundry</h2>
    <form method="post" action="proses.php">
    Nama: <input type="text" name="nama" required><br><br>
    Alamat: <input type="text" name="alamat" required><br><br>
    No hp: <input type="text" name="No hp" required><br><br>
    berat cucian (kg): <input type="number" name="berat" step="0.1" required><br><br>
    jenis layanan:
    <select name="layanan">
        <option value="reguler">Reguler - Rp7000/kg</option>
        <option value="express">Express - Rp8000/kg</option>
    </select><br><br>
    <input type="submit" value="Pesan Sekarang">
    </form>
</body>
</html>