<?php
include 'koneksi.php';

$data = mysqli_query($conn, "SELECT * FROM tb_tempatpenginapan WHERE id_tempatpenginapan = '".$_GET['id']."'");
$r = mysqli_fetch_array($data);


$judul = $r['judul'];
$fasilitas = $r['fasilitas'];
$isi = $r['isi'];


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
                <a href="kelola_tempatpenginapan.php">Kembali</a>
                <h2 align="center">Edit Data</h2>
                <table align="center">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="judul" value="<?php echo $judul ?>"></td>
                    </tr>
                    <tr>
                        <td>Fasilitas</td>
                        <td>:</td>
                        <td>
                        <input type="text" name="fasilitas" value="<?php echo $fasilitas ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Isi</td>
                        <td>:</td>
                        <td>
                        <input type="text" name="isi" value="<?php echo $isi ?>">
                        </td>
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
    $judul = $_POST['judul'];
    $fasilitas = $_POST['fasilitas'];
    $isi = $_POST['isi'];
    
    $update = mysqli_query($conn, "UPDATE tb_tempatpenginapan SET 
    judul = '".$judul."',
    fasilitas = '".$fasilitas."',
    isi = '".$isi."'
    WHERE id_tempatpenginapan = '".$_GET['id']."'
    ");
    if($update) {
        header ('location: kelola_tempatpenginapan.php');
    } else {
        echo "Gagal Update!";
    }
    
}
?>

</body>
</html>
