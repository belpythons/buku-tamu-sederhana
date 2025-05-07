<?php
include 'db.php';

$sql = "SELECT * FROM buku_tamu ORDER BY waktu DESC";
$result = $conn->query($sql);

echo "<h2>Daftar Buku Tamu Rumah Sakit</h2>";

if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    echo "<b>Nama:</b> " . htmlspecialchars($row["nama"]). "<br>";
    echo "<b>Email:</b> " . htmlspecialchars($row["email"]). "<br>";
    echo "<b>Pesan:</b> " . nl2br(htmlspecialchars($row["pesan"])). "<br>";
    echo "<small>Waktu: " . $row["waktu"]. "</small><br><hr>";
  }
} else {
  echo "Belum ada tamu.";
}

echo "ingin kembali untuk mendaftarkan tamu? <a href='index.html'>daftar tamu</a>";

$conn->close();
?>