<?php
include 'koneksi.php';

$data = mysqli_query($conn, "SELECT * FROM tb_gambartempatpenginapan WHERE id_gambar = '".$_GET['id']."'");
$r = mysqli_fetch_array($data);

$nama = $r['nama'];
$file = $r['file'];


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

         html {
    font-family: 'Poppins';  
    background:#c1efde;
  }

  table, tr, td {
  font-family: 'Poppins';
}

.container {
    margin-left:auto;
    margin-right:auto;
    width:500px;
    height:350px;
    background:white;
    box-shadow: 0 6px 8px rgba(0,0,0,0.11),
      0 10px 17px rgba(0, 0, 0, 0.48);
}

input[type=submit] {
    margin-top:10px;
    height: 32px;
    width:120px;
    background: #5CC69F;
    border-radius: 20px;
    color: white;
    font-weight: light;
    border: 2px solid #52B18E;
    transition: 0.3s;
    font-family:'Poppins';    
}


a {
    margin-top:20px;
    display:flex;
    align-items:center;
    justify-content:center;
}
    </style>
</head>
<body>
    <div class="container">

        <form action="" method="post" enctype="multipart/form-data">
            <a href="kelola_gambardestinasidantujuanwisata.php">Kembali</a>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" value="<?php echo $nama ?>"></td>
                </tr>
                <tr>
                    <td>File</td>
                    <td>:</td>
                    <td>
                    <input type="hidden" name="img" value="<?php echo $file ?>">
                    <input type="file" name="gambar">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><img src="../img/<?php echo $file?>" width="300px" height="200px"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="Submit" name="kirim" value="Update"></td>
                </tr>
            </table>
        </form>
    </div>
<?php

include 'koneksi.php';

if(isset($_POST['kirim'])) {
    $nama = $_POST['nama'];
    $nama_file = $_FILES['gambar']['name'];
    $source = $_FILES['gambar']['tmp_name'];
    $folder = '../img_penginapan/';

    if($nama_file != '') {
        move_uploaded_file($source, $folder.$nama_file);
        $update = mysqli_query($conn, "UPDATE tb_gambartempatpenginapan SET 
        nama = '".$nama."',
        file = '".$nama_file."'
        WHERE id_gambar = '".$_GET['id']."'
        ");
        if($update) {
            header ('location: kelola_gambartempatpenginapan.php');
        } else {
            echo "Gagal Update!";
        }
    } else {
        $update = mysqli_query($conn, "UPDATE tb_gambartempatpenginapan SET 
        nama = '".$nama."'
        WHERE id_gambar = '".$_GET['id']."'
        ");
        if($update) {
            echo "Berhasil Update!";
        } else {
            echo "Gagal Update!";
        }
    }
}
?>

</body>
</html>
