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
  
      $jenisbilling = htmlspecialchars( $data["jenisbilling"]);
      $hargabilling =htmlspecialchars($data["hargabilling"]);
      $durasibilling =htmlspecialchars($data["durasibilling"]);
  
     // querry insert
      $query = "INSERT INTO tb_billing
                VALUES
                ('', '$jenisbilling', '$hargabilling', '$durasibilling')";
      mysqli_query($conn, $query);
      return mysqli_affected_rows($conn);
    }

    ?>