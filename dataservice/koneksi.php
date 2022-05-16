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
  
      $kondisi = htmlspecialchars( $data["kondisi"]);
      $idadmin =htmlspecialchars($data["id_admin"]);
      $idpc =htmlspecialchars($data["id_pc"]);
      $email = htmlspecialchars($data["email"]);
      
  
  
     // querry insert
      $query = "INSERT INTO mengontrol
                VALUES
                ('$kondisi', '$idadmin', '$idpc')";
      mysqli_query($conn, $query);
      return mysqli_affected_rows($conn);
    }

    function ubah($data){
      global $conn;
      $kondisi = $data["kondisi"];
      $idadmin = htmlspecialchars($data["id_admin"]);
      $idpc = htmlspecialchars($data["id_pc"]);
  
     // querry insert
      $query = "UPDATE mengontrol SET 
                kondisi = '$kondisi',
                id_admin = '$idadmin,
                id_pc = '$idpc
              WHERE id= $idadmin
                ";
      mysqli_query($conn, $query);
      return mysqli_affected_rows($conn);
    }

?>