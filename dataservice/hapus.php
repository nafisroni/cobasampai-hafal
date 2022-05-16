<?php  
	include "koneksi.php";
	$id_admin = $_GET["id_admin"];
	$id_pc = $_GET["id_pc"];
	$query = "DELETE FROM mengontrol WHERE id_admin = '$id_admin' AND id_pc = '$id_pc' ";
	$result = mysqli_query($conn, $query);

	if($result){
			echo "<script>alert('Data berhasil dihapus');window.location='index.php'</script>";
	}else{
			echo "<script>alert('Data gagal dihapus');window.location='index.php'</script>";
	}
?>