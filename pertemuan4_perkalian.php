<!DOCTYPE html>
<html>

<body>

  <h1>Latihan Pertemuan 4 E dan F</h1>

  <?php
  echo "Perintah break jika digunakan untuk 'menghentikan paksa' proses perulangan yang berlangsung, perintah continue hanya akan menghentikan perulangan yang saat ini terjadi 1 iterasi saja.";
  ?>
  <br /><br />
  <?php
  $bil1 = 12;
  for ($b = 15; $b <= 45; $b+=2) {
    $total = $bil1 * $b;
    echo "<p> $bil1 x $b = $total";
  }
  ?>

</body>

</html>