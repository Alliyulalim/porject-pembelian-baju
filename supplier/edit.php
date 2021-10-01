pembeli/edit.php
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Database Supplier</title>
</head>

<body>
    <?php
include '../database.php';
$supplier = new supplier();
foreach ($supplier->edit($_GET['id']) as $data) {
    $nama_supplier = $data['nama_supplier'];
    $no_tlp = $data['no_tlp'];
    $alamat = $data['alamat'];
}
?>
    <fieldset>
        <legend>Edit Data Pembeli</legend>
        <form action="proses.php" method="POST">
            <input type="hidden" name="aksi" value="update">
            <input type="hidden" name="id_supplier" value="<?php echo $id_supplier; ?>">
            <table>
                <tr>
                    <th>Nama pembeli</th>
                    <td><input type="text" name="nama_supplier" value="<?php echo $nama_supplier; ?>" required></td>
                </tr>
                <tr>
                    <th>nomer telepon</th>
                    <td><input type="number" name="no_tlp" value="<?php echo $no_tlp; ?>" required></td>
                </tr>
                <tr>
                    <th>Alamat</th>
                    <td><input type="text" name="alamat" value="<?php echo $alamat; ?>" required></td>
                </tr>
 
                <tr>
                    <th><input type="submit" name="save" value="Simpan"></th>
                </tr>
            </table>
        </form>
    </fieldset>
</body>

</html>