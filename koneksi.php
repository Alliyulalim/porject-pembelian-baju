<?php
/* nama server kita */
$servername = "localhost";

/* nama database kita */
$database = "jual_pakaian"; 

/* nama user yang terdaftar pada database (default: root) */
$username = "root";

/* password yang terdaftar pada database (default : "") */ 
$password = ""; 

/* membuat koneksi */
$conn = mysqli_connect($servername, $username, $password, $database);

/* mengecek koneksi */
if (!$conn) {
    die("Maaf koneksi anda gagal : " . mysqli_connect_error());
}else{
   echo "<h1>Yes! Koneksi Berhasil..</h1>";
}


/* ============================
      NANTI KODE NYA DISINI 
   ============================*/
   

/* menutup koneksi */
mysqli_close($conn);
?>