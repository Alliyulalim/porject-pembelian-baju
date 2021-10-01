<?php
class database
{
    public $host = "localhost", $user = "root", $pass = "", $db = "jual_pakaian";
    public $koneksi;

    public function __construct()
{

$this->koneksi = mysqli_connect(
    $this->host,
    $this->user,
    $this->pass,
    $this->db
);
if ($this->koneksi){
}else{
    echo "Koneksi Database Gagal";
}
}
}
include "pembeli.php";
include "supplier.php"; 

$db = new database();
?>
