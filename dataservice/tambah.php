<?php  
		include "koneksi.php";
		$array_admin = mysqli_query($conn, "SELECT * FROM data_admin");
		$array_pc = mysqli_query($conn, "SELECT * FROM tb_pc");
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
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tambah Data Peminjam</title>
</head>
<body>
	<center>
		<h1>Tambah Data Buku</h1>
		<form action="tambah.php" method="post">
			<table>
				<tr>
					<td>Kondisi</td>
					<td><input type="text" name="kondisi"></td>
				</tr>
				<tr>
					<td>Admin</td>
					<td>
						<select name="id_admin" required>
							<option></option>
							<?php  
								while ($admin = mysqli_fetch_array($array_admin)) {
									echo "
										<option value=".$admin['id'].">".$admin['nama']."</option>
									";
								}
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td>Pc</td>
					<td>
						<select name="id_pc" required>
							<option></option>
							<?php  
								while ($pc = mysqli_fetch_array($array_pc)) {
									echo "
										<option value=".$pc['id'].">".$pc['jenispc']."</option>
									";
								}
							?>
						</select>
					</td>
				</tr>
				<tr>
					<td>
						<button type="submit" name="submit">Tambah Data</button>
					</td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>