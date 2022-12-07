<?php
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data penginapan</title>
    <style>
@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

html {
font-family: 'Poppins';  
background:#c1efde;
}

table, tr, td {
font-family: 'Poppins';
background:white;

}

h2 {
    display:flex;
    align-items:center;
    justify-content:center;
}

table {
    width:550px;
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


.container {
margin-left:auto;
margin-right:auto;
width:600px;
height:450px;
background:white;
box-shadow: 0 6px 8px rgba(0,0,0,0.11),
0 10px 17px rgba(0, 0, 0, 0.48);
}


 

    </style>
</head>
<body>
    <div class="container">
    <p align="center"><a class="#" href="kelola_destinasidantujuanwisata.php">Kembali</a></p>
    <h2>Tambah Data Penginapan</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <table align="center">
                <tr>
                    <td>Judul</td>
                    <td>:</td>
                    <td><input type="text" name="judul"></input></td>
                </tr>
                <tr>
                    <td>Fasilitas</td>
                    <td>:</td>
                    <td><textarea name="fasilitas"></textarea></td>
                </tr>
                <tr>
                    <td>Isi</td>
                    <td>:</td>
                    <td><textarea name="isi"></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="kirim" value="tambah"></td>
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
    
    $insert = mysqli_query($conn, "INSERT INTO tb_tempatpenginapan VALUES (
    NULL,
    '$judul',
    '$fasilitas',
    '$isi')");

    if($insert){
        header('location: kelola_tempatpenginapan.php');
    } else {
        echo "gagal tambah data";
    }
}
?>

</body>
</html>
