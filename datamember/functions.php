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
  
      $nohp = htmlspecialchars( $data["nohp"]);
      $username =htmlspecialchars($data["username"]);
      $jenisbilling =htmlspecialchars($data["jenisbilling"]);
      $durasibilling = htmlspecialchars($data["durasibilling"]);
      $inputer = htmlspecialchars($data["inputer"]);
  
  
     // querry insert
      $query = "INSERT INTO data_member
                VALUES
                ('', '$nohp', '$username', '$jenisbilling', '$durasibilling','$inputer')";
      mysqli_query($conn, $query);
      return mysqli_affected_rows($conn);
    }

    function ubah($data){
      global $conn;
      $id = $data["id"];
      $username = htmlspecialchars($data["username"]);
      $jenisbilling = htmlspecialchars($data["jenisbilling"]);
      $inputer = htmlspecialchars($data["inputer"]);
  
     // querry insert
      $query = "UPDATE data_member SET 
                username = '$username',
                jenisbilling = '$jenisbilling',
                inputer = '$inputer'
              WHERE id= $id
                ";
      mysqli_query($conn, $query);
      return mysqli_affected_rows($conn);
    }


    function hapus($id) {
      global $conn;
      mysqli_query($conn, "DELETE FROM data_member WHERE id = $id");
      return mysqli_affected_rows($conn);
    }
?>