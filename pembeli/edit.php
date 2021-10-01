pembeli/edit.php
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Database Pembeli</title>
</head>

<body>
    <?php
include '../database.php';
$pembeli = new pembeli();
foreach ($pembeli->edit($_GET['id']) as $data) {
    $nama_pembeli = $data['nama_pembeli'];
    $jk = $data['jk'];
    $no_telp = $data['no_telp'];
    $alamat = $data['alamat'];
}
?>
    <fieldset>
        <legend>Edit Data Pembeli</legend>
        <form action="proses.php" method="POST">
            <input type="hidden" name="aksi" value="update">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <table>
                <tr>
                    <th>Nama pembeli</th>
                    <td><input type="text" name="nama_pembeli" value="<?php echo $nama_pembeli; ?>" required></td>
                </tr>
                <tr>
                    <th>Jenis kelamin</th>
                    <td><input type="radio" name="jk" value="laki-laki<?php echo $jk; ?>" required>laki-laki</td>
                    <td><input type="radio" name="jk" value="perempuan<?php echo $jk; ?>" required>perempuan</td>
                </tr>
                <tr>
                    <th>nomer telepon</th>
                    <td><input type="number" name="no_telp" value="<?php echo $no_telp; ?>" required></td>
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