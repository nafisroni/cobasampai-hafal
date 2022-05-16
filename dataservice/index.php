<?php  
	include "koneksi.php";

	// querynya
	$result = mysqli_query($conn, "SELECT mengontrol.*, data_admin.nama as nama_admin, tb_pc.jenispc as nama_pc FROM mengontrol
							LEFT JOIN data_admin ON data_admin.id = mengontrol.id_admin
							LEFT JOIN tb_pc ON tb_pc.id = mengontrol.id_pc");

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
    <link rel="shortcut icon" href="../img/video-game.png" />
    <!-- css -->
  <title>ADMIN-WARNET</title>
</head>
<body>
<div class="container rounded bg-white mt-2 mb-2">
      <div class="row">
          <div class="profil bg-dark text-center border-right mb-3">
              <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="../img/google.png"><span class="mt-2 name font-weight-bold text-white">Admin - Nafis</span><span class="text-white text-bold">superadmin warnet</span><span> </span></div>
          </div>
          <div class="sidebar bg-dark mx-auto col-md-3 border-right">
            <div class="d-flex flex-column flex-shrink-0 p-3 text-white" style="height: auto; width: 280px">
              <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap" /></svg>
                <span class="fs-3 ms-2">MENU BAR</span>
              </a>
              <hr />
              <ul class="nav nav-pills flex-column mb-auto">
                <li class="text-start">
                  <a href="../index.php" class="nav-link text-white mb-4" > 
                    Beranda
                  </a>
                </li>
                <li class="text-start nav-item">
                  <a href="../pc/data.php" class="nav-link text-white mb-4">
                    Data PC
                  </a>
                </li>
                <li class="text-start nav-item">
                  <a href="../datamember/data.php" class="nav-link text-white mb-4">
                    Data Member
                  </a>
                </li>
                <li class="text-start" >
                  <a href="../databilling/data.php" class="nav-link text-white mb-4" >
                    Data Billing
                  </a>
                </li>
                <li class="text-start">
                  <a href="#" class="nav-link active bg-light text-dark mb-4">
                  Service PC
                  </a>
                </li>
                <li class="text-start">
                  <a href="../dataadmin/data.php" class="nav-link text-white mb-4">
                  Data Admin
                  </a>
                </li>
              </ul>
            </div>        
          </div>
          <div class="col-md-9 border-right">
          <div class="p-3 py-5 ">
          <h2 class="text-center border-bottom">Service - CRUD</h2>
          <a href="tambah.php" class="btn btn-success">Tambah data</a>
          <form action="" method="post">
          <br>
          <input type="text" name="keyword" size="35" autofocus placeholder="masukan pencarian..." autocomplete="off">
          <button class="btn btn-dark" type="submit" name="cariini" >Cari!</button>
          </form>
          <br>
          <table class="table table-dark table-hover text-center" border="1" cellpadding="10" cellspacing="0">
					<tr>
						<th>No</th>
						<th>Kondisi</th>
						<th>Admim</th>
						<th>Pc</th>
						<th>Aksi</th>
					</tr>

					<?php $i = 1; ?>
					<?php  while($row = mysqli_fetch_assoc($result) ) : ?>	
					<tr>
						<td><?php echo $i ?></td>
						<td><?php echo $row['kondisi']; ?></td>
						<td><?php echo $row['nama_admin']; ?></td>
						<td><?php echo $row['nama_pc']; ?></td>
						<td>
							<a class="text-warning" href="ubah.php?op=ubah&id_admin=<?php echo $row['id_admin']; ?>&id_pc=<?php echo $row['id_pc']; ?>" >Edit</a> |
							<a class="text-danger" href="hapus.php?op=hapus&id_admin=<?php echo $row['id_admin']; ?>&id_pc=<?php echo $row['id_pc']; ?>">Hapus</a>
						</td>
					</tr>
				<?php $i++; ?>
				<?php endwhile; ?>
          </table>
          </div>
          </div>
      </div>
            </div>
</body>
</html>