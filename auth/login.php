<?php 
  require 'functions.php';
  $tb_billing = query("SELECT * FROM tb_billing ORDER BY jenisbilling");

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <link rel="shortcut icon" href="<?=base_url('/img/google.png')?>"/>
    <!-- css -->
  <title>ADMIN-WARNET</title>
</head>
<body>
  <div class="container">
    <div class="row ">
      <?php 
        if(isset ($_POST['login'])) {
          $username = trim(mysqli_real_escape_string($conn, $_POST['username']));
          $password = trim(mysqli_real_escape_string($conn, $_POST['password']));
          //kalau ada sha1 ditulis di depan trim
          $sql_login = mysqli_query($conn, "SELECT * FROM login WHERE username = '$user' AND password '$password'") or die (mysqli_error($conn));
          echo mysqli_num_rows($sql_login);
        }
      ?>
        <form action="" method="POST" class="d-flex justify-content-center" style="margin-top: 200px;">
          <div class="col form-outline mb-4">
          <label class="form-label" for="">Username</label>
          <input type="username" name="username" id="username" class="form-control form-control-lg" />
          </div>
          <!-- Password input -->
          <div class="col form-outline mb-4">
          <label class="form-label" for="">Password</label>
          <input type="password" name="password" id="password" class="form-control form-control-lg" />
          </div>         
        </form>
        <div class="col">
          <button type="submit" name="login" value="login" class="btn btn-primary">Login</button>
          </div>
    </div>
  </div>
</body>
</html>