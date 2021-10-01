dosen/show.php
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Database pembelian</title>
</head>

<body>
    <?php
include '../database.php';
$pembeli = new pembeli();
foreach ($pembeli->show($_GET['id']) as $data) {
    $nama_pembeli = $data['nama_pembeli'];
    $jk= $data['jk'];
    $no_telp =$data['no_telp'];
    $alamat =$data['alamat'];
}
?>
    <fieldset>
        <legend>Show Data pembelian</legend>
        <table>
            <tr>
                <th>Nama Pembeli</th>
                <td><input type="text" name="nama_pembeli" value="<?php echo $nama_pembeli; ?>" readonly></td>
            </tr>
            <tr>
                <th>Jenis kelamin </th>
                <td><input type="text" name="jk" value="<?php echo $jk; ?>" readonly></td>
            </tr>
            <tr>
                <th>Nomer telepon</th>
                <td><input type="number" name="no_telp" value="<?php echo $no_telp; ?>" readonly></td>
            </tr>
            <tr>
                <th>Alamat </th>
                <td><input type="text" name="$alamat" value="<?php echo $alamat; ?>" readonly></td>
            </tr>
        </table>
    </fieldset>
</body>

</html>