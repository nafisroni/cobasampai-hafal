<?php 
    //koneksi to database
    $conn = mysqli_connect("localhost","root","", "tutorial");


    function query($query) {
      global $conn;
      $result = mysqli_query($conn, $query);
      $rows = [];
      while($row = mysqli_fetch_assoc($result)) {
        $rows[] =$row;
      }
      return $rows;
    }
    
    function tambah($data){
      global $conn;
  
      $noktp = htmlspecialchars( $data["noktp"]);
      $nohp =htmlspecialchars($data["nohp"]);
      $name =htmlspecialchars($data["name"]);
      $tugas = htmlspecialchars($data["tugas"]);
      
  
  
     // querry insert
      $query = "INSERT INTO data_admin
                VALUES
                ('', '$noktp', '$nohp', '$name', '$tugas')";
      mysqli_query($conn, $query);
      return mysqli_affected_rows($conn);
    }

    function hapus($id) {
      global $conn;
      mysqli_query($conn, "DELETE FROM data_admin WHERE id = $id");
      return mysqli_affected_rows($conn);
    }
?>