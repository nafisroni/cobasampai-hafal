<?php 
  require 'functions.php';
// cek tombol submit
  if(isset($_POST["submit"])){


    

    // cek data berhasil atau tdk
    if( tambah ($_POST)>0) {
      echo "
      <script> 
        alert('data berhasil di tambahkan!');
        document.location.href = 'data.php';
      </script>";
    } else {
      echo "
      <script>  
      alert('data gagal di tambahkan!');
      document.location.href = '#';
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
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Script sidebar -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script> 

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="shortcut icon" href="img/logo.png" />
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
<div class="container px-5 my-5">
        <div class="d-flex justify-content-md-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Tambah Data Member Warnet</h1>
        </div>
        <hr>
      <table class="table table-warning table-hover" cellpadding="10" cellspacing="0">
                <tr>
                    <td width="20%">Nohp</td>
                    <td width="30px">:</td>
                    <td><input type="text" name="nohp" id="nohp" class="form-control" /></td>
                </tr>
                <tr>  
                    <td>Username</td>
                    <td>:</td>
                    <td><input type="text" name="username" id="username" class="form-control" /></td>
                </tr>
                <tr>  
                    <td>Jenis billing</td>
                    <td>:</td>
                    <td><input type="text" name="jenisbilling" id="jenisbilling" class="form-control" /></td>
                </tr>
                <tr>  
                    <td>Durasi Billing</td>
                    <td>:</td>
                    <td><input type="text" name="durasibilling" id="durasibilling" class="form-control" /></td>
                </tr>
                <tr>  
                    <td>Inputer</td>
                    <td>:</td>
                    <td><input type="text" name="inputer" id="inputer" class="form-control" /></td>
                </tr>
    </table> 
    <button class="btn btn-success" type="submit" name="submit">Tambah data</button>
</div>
</body>
</html>