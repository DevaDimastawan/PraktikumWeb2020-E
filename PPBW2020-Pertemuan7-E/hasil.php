<?php
$nama = $_POST['nama'];
$nim = $_POST['nim'];

$tugas = $_POST['tugas'];
$uts = $_POST['uts'];
$uas = $_POST['uas'];

$nilai_tugas = $tugas *0.2;
$nilai_uts   = $uts *0.4;
$nilai_uas   = $uas *0.4;

$nilai_akhir = $nilai_tugas + $nilai_uts + $nilai_uas;

if ($nilai_akhir>=80) {
  $nilai_predikat = ("A");
  $ket = ("Anda Dinyatakan Lulus Dengan Predikat A");
}
else if ($nilai_akhir>=70) {
  $nilai_predikat = ("B");
  $ket =("Anda Dinyatakan Lulus Dengan Predikat B");
}
else if ($nilai_akhir>=60) {
  $nilai_predikat = ("C");
  $ket = ("Anda Dinyatakan Lulus Dengan Predikat C");
}
else if ($nilai_akhir<60) {
  $nilai_predikat = ("D");
  $ket = ("Anda Dinyatakan Tidak Lulus");
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Nilai Akhir Mahasiswa</title>
  </head>
  <body>
  <div class="heading">
  <h1>Nilai Akhir Mahasiswa</h1><br>
  </div>
    <div class = "hasil">
      <div class="main-hasil">
        <form action="index.php" method="get">
          <table>
            <tr>
              <td><label for="name">Nama</label></td>
              <td><input type="text" name="nama" class="input" value="<?php echo $nama ?>" readonly></td>
            </tr>
            <tr>
              <td><label for="nim">NIM</label></td>
              <td><input type="text" name="nim" class="input" value="<?php echo $nim ?>" readonly></td>
            </tr>
              <td><br><label for="nilai_tugas">Nilai Tugas</label></td>
              <td><br><input type="text" name="tugas" class="input" value="<?php echo $tugas ?>" readonly></td>
            </tr>
            <tr>
              <td><label for="nilai_uts">Nilai UTS</label></td>
              <td><input type="text" name="uts" class="input" value="<?php echo $uts ?>" readonly></td>
            </tr>
            <tr>
              <td><label for="nilai_uas">Nilai UAS</label></td>
              <td><input type="text" name="uas" class="input" value="<?php echo $uas ?>" readonly></td>
            </tr>
            <tr>
              <td><br><label for="$nilai_akhir">Nilai Akhir</label></td>
              <td><br><input type="text" name="uas" class="input" value="<?php echo $nilai_akhir ?>" readonly></td>
            </tr>
            <tr>
              <td><label for="$nilai_predikat">Predikat</label></td>
              <td><input type="text" name="predikat" class="input" value="<?php echo $nilai_predikat ?>"  readonly></td>
            </tr>
          </table>
          <br>
            <center><b><?php echo $ket?></b></center>
        </form>
      </div>
    </div>
  </body>
</html>
