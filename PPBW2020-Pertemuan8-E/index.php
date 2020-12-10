<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<script>alert('Username dan Password tidak sesuai !');</script>";
		}
	}
  ?>
    <div class="box">
      <div class="loginform">
        <h1 class="h1">Login</h1>
        <form class="login-container" action="cek_login.php" method="post">
          <label for="username">Username </label>
          <input type="text" name="username">
          <br><br>
          <label for="password">Password </label>
          <input type="password" name="password">
          <br><br>
          <button type="submit" id="button" value="Log in">Login</button>
        </form>
      </div>
    </div>
</body>
</html>