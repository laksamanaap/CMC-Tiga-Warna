<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Data</title>
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

table {
    width:550px;
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


a {
margin-top:10px;
height: 32px;
width:140px;
padding-left:10px;
padding-right:10px;
background: #5CC69F;
border-radius: 20px;
color: white;
font-weight: light;
border: 2px solid #52B18E;
transition: 0.3s;
font-family:'Poppins';
text-decoration:none;
}
    </style>
</head>
<body>
    
    <div class="container">
    <?php
    include "koneksi.php";
    $id=$_GET['id'];
    $query_lihat="SELECT * FROM tb_destinasidantujuanwisata WHERE id_destinasidantujuanwisata='$id';";
    $hasil=mysqli_query($conn,$query_lihat);
    $data=mysqli_fetch_array($hasil);
    $no=1;
    ?>
    <h3 align="center">Lihat Data</h3>
    <table border=""  align="center">
        <tr>
            <td>Judul : <?php echo $data['judul'];?></td>
        </tr>
        <tr>
            <td>Sub-Judul : <?php echo $data['subjudul']; ?></td>
        </tr>
        <tr>
            <td>Fasilitas : <?php echo $data['fasilitas']; ?></td>
        </tr>
        <tr>
            <td>Isi : <?php echo $data['isi']; ?></td>
        </tr>
        
    </table>
    <p align="center"><a href="kelola_destinasidantujuanwisata.php">Kembali Kelola</a></p>
    </div>
</body>
</html>