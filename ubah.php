<?php 
  require 'functions.php';

  // ambil data di URL
  $id = $_GET["id"];
  // query data mahasiswa
  $lgn = query("SELECT * FROM login WHERE id = $id")[0];



// cek tombol submit
  if(isset($_POST["submit"])){
    

    // cek data berhasil atau tdk
    if( ubah($_POST)>0) {
      echo "
      <script> 
        alert('data berhasil diubah!');
        document.location.href = 'index.php';
      </script>";
    } else {
      echo "
      <script> 
      alert('data gagal diubah!');
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
  <title>Ubah data | CRUD</title>
  <!-- Bootstrap CSS -->
  <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- css -->
    <link rel="stylesheet" href="style.css"/>
    <!-- Akhir css -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.3.1/css/all.min.css" rel="stylesheet" />
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="shortcut icon" href="img/logo.png" />
    <!-- css -->
</head>
<body>
<h2 class="text-center">Ubah data</h2>
<div class="container">
    <div class="row">
      <div class="d-flex justify-content-center"> 
        <form method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $lgn["id"];?>"> 
        <input type="hidden" name="gambarLama" value="<?= $lgn["gambar"];?>"> 
        <ul>
            <li>
              <label for="nim">NIM : </label>
              <input type="number" name="nim" id="nim" required value="<?= $lgn["nim"];?>" placeholder="0000000(nomer urut)">
            </li>
            <li>
            <label for="username">username : </label>
              <input type="text" name="username" id="username" required value="<?= $lgn["username"];?>">
            </li>
            <li>
            <label for="password">password : </label>
              <input type="password" name="password" id="password" required value="<?= $lgn["password"];?>">
            </li>
            <li>
            <label for="email">email : </label>
              <input type="email" name="email" id="email" required value="<?= $lgn["email"];?>">
            </li>
            <li>
            <label for="gambar">gambar : </label>
            <img src="img/<?=$lgn['gambar'];?>" alt=""> <br>
              <input type="file" name="gambar" id="gambar">
            </li>
            <li><button type="submit" name="submit">Ubah data</button></li>
          </ul>
        </form>
      </div>
    </div>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>