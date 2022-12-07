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
    $query_lihat="SELECT * FROM tb_transaksidestinasidantujuanwisata WHERE id_transaksidestinasidantujuanwisata='$id';";
    $hasil=mysqli_query($conn,$query_lihat);
    $data=mysqli_fetch_array($hasil);
    $no=1;
    ?>
    <h3 align="center">Lihat Data</h3>
    <table border=""  align="center">
        <tr>
            <td>No : <?php echo $data['id_transaksidestinasidantujuanwisata'];?></td>
        </tr>
        <tr>
            <td>Nama Depan : <?php echo $data['nama_depan']; ?></td>
        </tr>
        <tr>
            <td>Nama Belakang : <?php echo $data['nama_belakang']; ?></td>
        </tr>
        <tr>
            <td>Alamat email : <?php echo $data['alamat_email']; ?></td>
        </tr>
        <tr>
            <td>Tanggal Check-in : <?php echo $data['tanggal_checkin']; ?></td>
        </tr>
        <tr>
            <td>Tanggal Check-out : <?php echo $data['tanggal_checkout']; ?></td>
        </tr>
        <tr>
            <td>Jam pemesanan : <?php echo $data['jam_pemesanan']; ?></td>
        </tr>
        <tr>
            <td>Catatan : <?php echo $data['catatan']; ?></td>
        </tr>
        <tr>
            <td>Paket : <?php echo $data['paket']; ?></td>
        </tr>
        
    </table>
    <p align="center"><a href="kelola_transaksidestinasidantujuanwisata.php">Kembali Kelola</a></p>
    </div>
</body>
</html>