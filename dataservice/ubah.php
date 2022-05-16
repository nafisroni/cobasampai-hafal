<?php 	 
		include "koneksi.php";

	if (isset($_GET['op'])) {
		$op = $_GET['op'];
	}else{
		$op = "";
	}

	if($op == 'ubah'){
		$id_admin  = $_GET['id_admin'];
		$id_pc  = $_GET['id_pc'];
		$sql1 = "SELECT * FROM  mengontrol WHERE id_admin = '$id_admin' AND id_pc = '$id_pc' ";
		$q1 =  mysqli_query($conn, $sql1);
		$r1 = mysqli_fetch_assoc($q1);
		$kondisi = $r1['kondisi'];
		$id_admin = $r1['id_admin'];
		$id_pc = $r1['id_pc'];
	}
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
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ubah Data Peminjam</title>
</head>
<body>
	<center>
		<h1>Ubah Data Peminjam</h1>
		<form action="" method="post">
			<table>
				<tr>
					<td>Kondisi</td>
					<td><input type="text" name="kondisi" required value="<?php echo $kondisi; ?>"></td>
				</tr>
				<tr>
					<td>Admin</td>
					<td><input name="id_admin" readonly required value="<?php echo $id_admin; ?>"></td>
				</tr>
				<tr>
					<td>Pc</td>
					<td><input name="id_pc" readonly required value="<?php echo $id_pc; ?>"></td>
				</tr>
				<tr>
					<td>
						<button type="submit" name="submit">Ubah Data</button>
					</td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>