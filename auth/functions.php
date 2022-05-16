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


    function base_url($url = null) {
      $base_url = "http://localhost/LOGIN-FIX/";
      if($url != null) {
        return $base_url ."/". $url;
      }else{
        return $base_url;
      }
    }
?>