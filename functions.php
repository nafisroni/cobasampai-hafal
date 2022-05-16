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


    // function base_url($url = null) {
    //   $base_url = "http://localhost/LOGIN-FIX/";
    //   if($url != null) {
    //     return $base_url ."/". $url;
    //   }else{
    //     return $base_url;
    //   }
    // }

  function tambah($data){
    global $conn;

    $nim = htmlspecialchars( $data["nim"]);
    $username =htmlspecialchars($data["username"]);
    $password =htmlspecialchars($data["password"]);
    $email = htmlspecialchars($data["email"]);
    


   // querry insert
    $query = "INSERT INTO login
              VALUES
              ('', '$nim', '$username', '$password', '$email')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
  }

  function masuk($data){
    global $conn;
    $jenispc = htmlspecialchars($data["jenispc"]);
    $spek = htmlspecialchars($data["spek"]);
    $query = "INSERT INTO tb_pc
              VALUES
              ('', '$jenispc', '$spek')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
  }

  function upload(){
    $namaFile=$_FILES['gambar']['name'];
    $ukuranFile=$_FILES['gambar']['size'];
    $error=$_FILES['gambar']['error'];
    $tmpName=$_FILES['gambar']['tmp_name'];
    
    // cek apakah tidak ada gambar yang di upload
    if($error === 4){
      echo "<script>
              alert('pilih gambar sek!');
            </script>";
        return false;
    }
  
    // Cek hanya gambar yang di upload
    $ekstensiGambarValid=['jpg', 'jpeg','png'];
    $ekstensiGambar=explode('.', $namaFile);
    $ekstensiGambar=strtolower(end($ekstensiGambar));
    if( !in_array($ekstensiGambar, $ekstensiGambarValid)) {
      echo "<script>
              alert(Bukan file yang benar!');
            </script>";
        return false;
    }

    // cek ukuran file
    if( $ukuranFile > 1000000){
      echo "<script>
              alert(Ukuran terlalu besar!');
            </script>";
        return false;
    }

    // lolos pengecekan
    // generate nama baru
    $namaFileBaru=uniqid();
    $namaFileBaru.= '.';
    $namaFileBaru.= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/'. $namaFileBaru);
    return $namaFileBaru;

  }


  function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM login WHERE id = $id");
    return mysqli_affected_rows($conn);
  }
  function hilang($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM tb_pc WHERE id = $id");
    return mysqli_affected_rows($conn);
  }



  function ubah($data){
    global $conn;
    $id = $data["id"];
    $nim = htmlspecialchars( $data["nim"]);
    $username =htmlspecialchars($data["username"]);
    $password =htmlspecialchars($data["password"]);
    $email = htmlspecialchars($data["email"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);
    // cek user pilih gambar atau tidak?
    if($_FILES['gambar'] ['error'] === 4){
      $gambar = $gambarLama;
    } else {
      $gambar = upload();
    }

   // querry insert
    $query = "UPDATE login SET 
              nim = '$nim',
              username = '$username',
              password = '$password',
              email    = '$email',
              gambar   = '$gambar'
            WHERE id= $id
              ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
  }

  function ganti($data){
    global $conn;
    $id = $data["id"];
    $jenispc = htmlspecialchars($data["jenispc"]);
    $spek = htmlspecialchars($data["spek"]);

   // querry insert
    $query = "UPDATE tb_pc SET 
              jenispc = '$jenispc',
              spek = '$spek'
            WHERE id= $id
              ";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
  }

  function cari($keyword) {
    $query = "SELECT * FROM login
              WHERE 
              username LIKE '%$keyword%' OR nim LIKE '%$keyword%' OR email LIKE '%$keyword%'  OR password LIKE '%$keyword%' 
              ";
    return query($query);
  }
  function cariini($keyword) {
    $query = "SELECT * FROM tb_pc
              WHERE 
              username LIKE '%$keyword%' OR jenispc LIKE '%$keyword%' OR spek LIKE '%$keyword%' 
              ";
    return query($query);
  }
  ?>