<?php
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$Nohp = $_POST['Nohp'];
$berat = $_POST['berat'];
$layanan = $_POST['layanan'];


if ($berat < 5){
    echo "<h3>Maaf, minimal berat cucian untuk layanan antar jemput adalah 5 kg.</h3>";
    echo "<a href='index.php'>Kembali ke form</a>";
    exit;
}

echo "<h2>Rincian Pemesanan</h2>";
echo "Nama: $nama<br>";
echo "Alamat: $alamat<br>";
echo "No HP: $nohp<br>";
echo "Berat Cucian: $berat kg<br>";
echo "Jenis Layanan: $layanan<br>";
echo "Total Harga: Rp " . number_format($total, 0, ',', '.') . "<br>";
echo "<p>Terima kasih, pesanan Anda akan segera dijemput.</p>";


?>