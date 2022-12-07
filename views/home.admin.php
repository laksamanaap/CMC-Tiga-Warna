<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="css/admin.css" />
    <title>Admin CMC Tiga Warna</title>
</head>

<body>

    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"></i>CMC Tiga Warna</div>
            <div class="list-group list-group-flush my-3">
                <a href="#" class="list-group-item list-group-item-action bg-transparent second-text active"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                        <a href="kelola_destinasidantujuanwisata.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-chart-line me-2"></i>Kelola destinasi dan tujuan wisata</a>
                <a href="kelola_gambardestinasidantujuanwisata.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-chart-line me-2"></i>Kelola gambar destinasi dan tujuan wisata</a>
                        <a href="kelola_tempatpenginapan.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-chart-line me-2"></i>Kelola tempat penginapan</a>
                        <a href="kelola_gambartempatpenginapan.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-chart-line me-2"></i>Kelola gambar tempat penginapan</a>
                        <a href="kelola_user.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-chart-line me-2"></i>Kelola User CMC Tiga Warna</a>
                        <a href="kelola_transaksidestinasidantujuanwisata.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-chart-line me-2"></i>Kelola Transaksi destinasi dan tujuan wisata</a>
                        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-chart-line me-2"></i>Kelola Transaksi tempat penginapan</a>
                        <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                        class="fas fa-chart-line me-2"></i>Kelola Home CMC</a>
                <a href="logout.php" class="list-group-item list-group-item-action bg-transparent text-danger fw-bold"><i
                        class="fas fa-power-off me-2"></i>Logout</a>
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                
            </nav>

         
<!----------------------------------------------------------------------------------------------------------------------------------->
               
<div class="box">

    
    <div class="container-fluid px-4">
                    <div class="row g-3 my-2">
                        <div class="col-md-3">
                            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                <div>
                                    <h3 class="fs-2">1.</h3>
                                    <a class="fs-5" href="kelola_destinasidantujuanwisata.php">Kelola destinasi dan tujuan wisata</a>
                                </div>
                                <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                            </div>
                        </div>
    
                        <div class="col-md-3">
                            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                <div>
                                    <h3 class="fs-2">2.</h3>
                                    <a class="fs-5" href="kelola_gambardestinasidantujuanwisata.php">Kelola gambar destinasi dan tujuan wisata</a>
                                </div>
                                <i
                                    class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                            </div>
                        </div>
    
                        <div class="col-md-3">
                            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                <div>
                                <h3 class="fs-2">3.</h3>
                                    <a class="fs-5" href="kelola_tempatpenginapan.php">Kelola tempat penginapan</a>
                                </div>
                                <i class="fas fa-truck fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                            </div>
                        </div>
    
                        <div class="col-md-3">
                            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                <div>
                                <h3 class="fs-2">4.</h3>
                                    <a class="fs-5" href="kelola_gambartempatpenginapan.php">Kelola gambar tempat penginapan</a>
                                </div>
                                <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                            </div>
                        </div>
    
                        <div class="col-md-3">
                            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                <div>
                                <h3 class="fs-2">5.</h3>
                                    <a class="fs-5" href="kelola_user.php">Kelola User CMC Tiga Warna&nbsp;
                                        
                                    </a>
                                </div>
                                <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                            </div>
                        </div>
    
                        <div class="col-md-3">
                            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                <div>
                                <h3 class="fs-2">6.</h3>
                                    <a class="fs-5" href="kelola_transaksidestinasidantujuanwisata.php">Kelola transaksi destinasi dan tujuan wisata</a>
                                </div>
                                <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                            </div>
                        </div>
    
                        <div class="col-md-3">
                            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                <div>
                                <h3 class="fs-2">7.</h3>
                                    <a class="fs-5" href="kelola_destinasidantujuanwisata.php">Kelola transaksi destinasi dan tujuan wisata</a>
                                </div>
                                <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                            </div>
                        </div>
    
                        <div class="col-md-3">
                            <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                                <div>
                                <h3 class="fs-2">8.</h3>
                                    <a class="fs-5" href="kelola_homecmc.php">Kelola Home CMC</a>
                                </div>
                                <i class="fas fa-chart-line fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                            </div>
                        </div>
    
                    </div>
    
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->
        </div>
</div>
<?php

include 'koneksi.php';

if(isset($_POST['kirim'])) {
    $nama = $_POST['nama'];
    $nama_file = $_FILES['gambar']['name'];
    $source = $_FILES['gambar']['tmp_name'];
    $folder = '../img/';

    move_uploaded_file($source, $folder.$nama_file);
    $insert = mysqli_query($conn, "INSERT INTO tb_gambardestinasidantujuanwisata VALUES (
    NULL,
    '$nama',
    '$nama_file')");

    if($insert){
        header ('location: kelola_gambardestinasidantujuanwisata.php');
    } else {
        echo "gagal upload";
    }
}
?>

</body>

</html>