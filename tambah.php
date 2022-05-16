<?php 
  require 'functions.php';
// cek tombol submit
  if(isset($_POST["submit"])){


    

    // cek data berhasil atau tdk
    if( tambah($_POST)>0) {
      echo "
      <script> 
        alert('data berhasil di tambahkan!');
        document.location.href = 'index.php';
      </script>";
    } else {
      echo "
      <script> 
      alert('data gagal di tambahkan!');
      document.location.href = 'index.php';
    </script>";
    }

  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah data | CRUD</title>
</head>
<body>
  
  <h2>Tambah data</h2>
  <form action="" method="post" enctype="multipart/form-data">
    <ul>
      <li>
        <label for="nim">NIM : </label>
        <input type="number" name="nim" id="nim" required placeholder="0000000">
      </li>
      <li>
      <label for="username">username : </label>
        <input type="text" name="username" id="username" required>
      </li>
      <li>
      <label for="password">password : </label>
        <input type="password" name="password" id="password" required>
      </li>
      <li>
      <label for="email">email : </label>
        <input type="email" name="email" id="email" required>
      </li>
      <li><button type="submit" name="submit">Tambah data</button></li>
    </ul>
  
  </form>
</body>
</html>