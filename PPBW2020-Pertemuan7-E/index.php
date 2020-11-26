<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">

    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Nilai Akhir Mahasiswa</title>

  </head>
  <body>
    <h1>Nilai Akhir Mahasiswa</h1><br>
    <div class = "container">
      <div class="main">
        <form action="hasil.php" method="post">
          <table>

            <tr>
              <td><label for="name">Nama</label></td>
              <td><input type="text" name="nama" class="input" required></td>
            </tr>
            <tr>
              <td><label for="nim">NIM</label></td>
              <td><input type="text" name="nim" class="input" required></td>
            </tr>
            <tr>
              <td><br><label for="nilai_tugas">Nilai Tugas</label></td>
              <td><br><input type="text" name="tugas" class="input" required></td>
            </tr>
            <tr>
              <td><label for="nilai_uts">Nilai UTS</label></td>
              <td><input type="text" name="uts" class="input" required></td>
            </tr>
            <tr>
              <td><label for="nilai_uas">Nilai UAS</label></td>
              <td><input type="text" name="uas" class="input" required></td>
            </tr>
            <tr>
              <td><br><input type="submit" value="Hitung" class="Hitung"></td>
          </table>
        </form>
      </div>
    </div>
  </body>
</html>
