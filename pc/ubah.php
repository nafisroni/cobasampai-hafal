<?php 
  require '../functions.php';

  // ambil data di URL
  $id = $_GET["id"];
  // query data warnet
  $lgn = query("SELECT * FROM tb_pc WHERE id = $id")[0];



// cek tombol submit
  if(isset($_POST["submit"])){
    

    // cek data berhasil atau tdk
    if( ganti($_POST)>0) {
      echo "
      <script> 
        alert('data berhasil diubah!');
        document.location.href = 'data.php';
      </script>";
    } else {
      echo "
      <script> 
      alert('data gagal diubah!');
      document.location.href = 'data.php';
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Script sidebar -->
    <script src="https://kit.fontawesome.com/a076d05399.js"></script> 

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" />
    <link rel="shortcut icon" href="img/logo.png" />
</head>
<body>
<form action="" method="POST" enctype="multipart/form-data">
  <input type="hidden" name="id" value="<?= $lgn["id"];?>"> 
    <div class="container px-5 my-5">
            <div class="d-flex justify-content-md-center flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Ubah Data PC Warnet</h1>
            </div>
          <table class="table table-warning table-hover" cellpadding="10" cellspacing="0">
                    <tr>
                        <td width="20%">Jenis PC</td>
                        <td width="30px">:</td>
                        <td><input type="text" name="jenispc" id="jenispc" required value="<?= $lgn["jenispc"];?>" /></td>
                    </tr>
                    <tr>  
                        <td>spesifikasi</td>
                        <td>:</td>
                        <td><input type="text" name="spek" id="spek"required value="<?= $lgn["spek"];?>" /></td>
                    </tr>
        </table> 
        <button class="btn btn-success" type="submit" name="submit">Ubah data</button>
    </div>
</form>
</body>
</html>