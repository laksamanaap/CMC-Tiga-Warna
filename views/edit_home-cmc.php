<?php
include 'koneksi.php';

$data = mysqli_query($conn, "SELECT * FROM home_cmc");
$r = mysqli_fetch_array($data);


$judul = $r['judul'];
$isi = $r['isi'];
$isi2 = $r['isi2'];
$isi3 = $r['isi3'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <a href="kelola_destinasidantujuanwisata.php">Kembali</a>
        <h2>Edit Data</h2>
        <table>
            <tr>
                <td>Judul</td>
                <td>:</td>
                <td><input type="text" name="judul" value="<?php echo $judul ?>"></td>
            </tr>
            <tr>
                <td>Fasilitas</td>
                <td>:</td>
                <td>
                <input type="text" name="isi" value="<?php echo $isi ?>">
                </td>
            </tr>
            <tr>
                <td>Isi</td>
                <td>:</td>
                <td>
                <input type="text" name="isi2" value="<?php echo $isi2 ?>">
                </td>
            </tr>
            <tr>
                <td>Isi</td>
                <td>:</td>
                <td>
                <input type="text" name="isi3" value="<?php echo $isi3 ?>">
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="Submit" name="kirim" value="Update"></td>
            </tr>
        </table>
    </form>
<?php

include 'koneksi.php';

if(isset($_POST['kirim'])) {
    $judul = $_POST['judul'];
    $isi = $_POST['isi'];
    $isi2 = $_POST['isi2'];
    $isi3 = $_POST['isi3'];
    
    $update = mysqli_query($conn, "UPDATE home_cmc SET 
    judul = '".$judul."',
    isi = '".$isi."',
    isi2 = '".$isi2."',
    isi3 = '".$isi3."'
    ");
    if($update) {
        header ('location: kelola_homecmc.php');
    } else {
        echo "Gagal Update!";
    }
    
}
?>

</body>
</html>
