<?php
include '../database.php';
$pembeli = new pembeli();

if(isset($_POST['save'])){
    $aksi = $_POST['aksi'];
    $id   = @$_POST['id'];
    $nama_pembeli = $_POST['nama_pembeli'];
    $jk = $_POST['jk'];
    $no_telp = $_POST['no_telp'];
    $alamat = $_POST['alamat'];

    if ($aksi == "create"){
        $pembeli->create($nama_pembeli,$jk,$no_telp,$alamat);
        header("location:index.php");
    }
    else if ($aksi == "update") {
        $pembeli->update($id, $nama_pembeli, $jk,$no_telp,$alamat);
        header("location:index.php");
    }
    else if ($aksi == "delete"){
        $pembeli->delete($id);
        header("location:index.php");
    }
}
?>