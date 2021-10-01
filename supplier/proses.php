<?php
include '../database.php';
$supplier = new supplier();

if(isset($_POST['save'])){
    $aksi = $_POST['aksi'];
    $id_supplier   = @$_POST['id_supplier'];
    $nama_supplier = $_POST['nama_supplier'];
    $no_tlp = $_POST['no_tlp'];
    $alamat = $_POST['alamat'];

    if ($aksi == "create"){
        $supplier->create($nama_supplier,$no_tlp,$alamat);
        header("location:index.php");
    }
    else if ($aksi == "update") {
        $supplier->update($id_supplier, $nama_supplier,$no_tlp,$alamat);
        header("location:index.php");
    }
    else if ($aksi == "delete"){
        $supplier->delete($id_supplier);
        header("location:index.php");
    }
}
?>