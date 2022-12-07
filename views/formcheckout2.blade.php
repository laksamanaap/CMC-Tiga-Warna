<?php
include 'koneksi.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Title Icon -->
    <link rel="icon" type="image/x-icon" href="assets/cmclogo.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- Personal CSS-->
    <link rel="stylesheet" href="css/checkout1.css">
    <title>Halaman Transaksi</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    
  </head>
  <body>

  <?php
session_start();
if (isset($_SESSION['level']) && isset($_SESSION['username'])) {
    if ($_SESSION['level'] == "user") {
    } elseif ($_SESSION['level'] == "admin") {
      header('Location: home.admin.php');
    }
    if (!isset($_SESSION['level'])) {
        echo "Anda tidak boleh mengakses halaman ini tanpa : ";
        echo "<a href='..\login.php'>Login</a>";
        echo "<a href='..\register.php'>Register</a>";
    }
    
}
else {
header('Location: loginform.php');
}
?>

    <!--  Form Pemesanan  --->
    <div class="container-2 d-lg-flex mt-5">
        <div class="box-1" style="background-color:#e5e5e5;">
            <div class="box-inner-1 pb-3 mb-3 ">
                <div class="d-flex justify-content-between mb-3 userdetails">
                    <p class="fw-bold">Paket Tanam Mangrove</p>
                    <p class="price fw-lighter ">Rp.815.000</p>
                  </div>
                  <div id="my" class="carousel slide carousel-fade img-details" data-bs-ride="carousel"
                    data-bs-interval="2000">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#my" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#my" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#my" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="assets/img/tanam_mangrove/tanam-mangroove.jpeg"
                                class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                            <img src="assets/img/tanam_mangrove/tanam-mangrove-2.jpg"
                                class="d-block w-100">
                        </div>
                        <div class="carousel-item">
                        <img src="assets/img/tanam_mangrove/tanam-mangrove-3.jpg"
                                class="d-block w-100">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#my" data-bs-slide="prev">
                        <div class="icon">
                            <span class="fas fa-arrow-left"></span>
                        </div>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    
                    <button class="carousel-control-next" type="button" data-bs-target="#my" data-bs-slide="next">
                        <div class="icon">
                            <span class="fas fa-arrow-right"></span>
                        </div>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
                <div class="text-container my-3">
                    <p>Wisatawan akan diajak melihat indahnya terumbu karang dan berbagai jenis ikan!</p><br>
                    <p>Paket ini mengajak wisatawan untuk diving di pantai tiga warna yang mana area tersebut merupakan marine protect area (MPA). Saat diving wisatawan akan disuguhkan oleh keindahan bawah laut yang sangat luar biasa indahnya, pada area ini terdapat beraneka ragam jenis ikan dan terumbu karang. Saat diving wisatawan akan dipandu oleh seorang tour guide proffesional yang tentunya ahli dibidangnya.</p>
                </div>
                
                <div>
                    <label for="one" class="box py-2 first">
                        <div class="d-flex align-items-start">
                            <div class="course">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="fw-bold">
                                      Fasilitas #1
                                    </span>
                              
                                </div>
                                <span> Perlengkapan Scuba Sheet (Tabung selam, Masker, Regulator, Fins, Weight Beld)</span>
                            </div>
                          </div>
                    </label>
                    <label for="two" class="box py-2 second mt-3">
                      <div class="d-flex">
                        
                            <div class="course">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                    <span class="fw-bold">
                                        Fasilitas #2
                                    </span>
                                </div>
                                <span> Perahu dengan nahkoda yang berpengalaman dan tau akan medan laut</span>
                            </div>
                        </div>
                    </label>
                    <label class="box py-2 third mt-3">
                        <div class="d-flex">

                            <div class="course">
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                  <span class="fw-bold">
                                        Fasilitas #3
                                    </span>
                                  
                                </div>
                                <span> Makan Siang,  Snack, Kelapa muda</span>
                            </div>
                        </div>
                      </label>
                </div>
            </div>
        </div>
        <div class="box-2">
            <div class="box-inner-2">
                <div>
                    <p class="fw-bold">Detail Pembayaran</p>
                    <p class="dis mb-3">Selesaikan pembelian Anda dengan memberikan rincian pembayaran Anda</p>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <p class="dis fw-bold mb-2">Email address</p>
                        <input name="alamat_email" class="form-control" type="email" placeholder="example@gmail.com" required="">
                    </div>
                    <div class="my-3 cardname">
                            <p class="dis fw-bold mb-2">Nama Depan</p>
                            <input name="nama_depan" class="form-control" type="text" placeholder="Laksamana" required="">
                        </div>
                        <div class="my-3 cardname">
                            <p class="dis fw-bold mb-2">Nama Belakang</p>
                            <input name="nama_belakang"  class="form-control" type="text" placeholder="AryaPutra" required="">
                        </div>
                        <div class="my-3 cardname">
                            <p class="dis fw-bold mb-2">Tanggal Check-in</p>
                            <input name="tanggal_checkin" class="form-control" type="date" required="">
                        </div>
                        <div class="my-3 cardname">
                            <p class="dis fw-bold mb-2">Tanggal Check-out</p>
                            <input name="tanggal_checkout" class="form-control" type="date" required="">
                        </div>
                        <div class="my-3 cardname">
                            <p class="dis fw-bold mb-2">Jam Pesan</p>
                            <input name="jam_pesan" class="form-control" type="time" required="">
                        </div>
                        <div class="my-3 cardname">
                            <textarea name="catatan" class="dis fw-bold mb-2">Catatan (Opsional)</textarea>
                        </div>
                            </div>
                            <div class="d-flex flex-column dis">
                              <div class="d-flex align-items-center justify-content-between mb-2">
                                    <p>Subtotal</p>
                                    <p>815.000</p>
                                </div>
                                <div class="d-flex align-items-center justify-content-between mb-2">
                                  <p class="fw-bold">Total</p>
                                    <p class="fw-bold">815.000</p>
                                </div>                
                                <tr>
                                    <td>Bukti Pembayaran</td>
                                    <td>:</td><br>
                                    <td>BRI (005101227087503)</td><br>
                                    <td>Format File : nama_namapaket <br><b>(Laksamana AryaPutra_PaketDiving)</b></td>
                                    <td><input type="file" name="gambar"></td>
                                </tr>

                                <input class="btn btn-primary mt-3" type="submit" name="kirim" value="Pesan Sekarang!" onclick="alert('Berhasil melakukan pemesanan!.  Silahkan cek email anda secara berkala untuk konfirmasi pemesanan dari admin! ')"></input>
                                </div>
                              </div>
                            </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <?php
    include 'koneksi.php';
    

    if(isset($_POST['kirim'])) {
        $nama_depan = $_POST['nama_depan'];
        $nama_belakang = $_POST['nama_belakang'];
        $alamat_email = $_POST['alamat_email'];
        $tanggal_checkin = date('Y-m-d', strtotime($_POST['tanggal_checkin']));
        $tanggal_checkout = date('Y-m-d', strtotime($_POST['tanggal_checkout']));
        $jam_pesan = $_POST['jam_pesan'];
        $catatan = $_POST['catatan'];
        $paket = 'Paket Tanam Mangrove';
        $harga = 'Rp815.000';
        $nama_file = $_FILES['gambar']['name'];
        $source = $_FILES['gambar']['tmp_name'];
         $folder = '../img_buktitransaksidestinasidantujuanwisata/';

    move_uploaded_file($source, $folder.$nama_file);
    $insert2 = mysqli_query($conn, "INSERT INTO tb_buktitransaksidestinasidantujuanwisata VALUES (
    NULL,
    '$nama_file')");
        
    if($insert2){
        echo "<script>Berhasil melakukan pemesanan!</script>";
    } else {
        echo "<script>Gagal upload, silahkan coba lagi!</script>";
    }
}
        
        
        $insert = mysqli_query($conn, "INSERT INTO tb_transaksidestinasidantujuanwisata VALUES (
        NULL,
        '$nama_depan',
        '$nama_belakang',
        '$alamat_email',
        '$tanggal_checkin',
        '$tanggal_checkout',
        '$jam_pesan',
        '$catatan',
        '$paket'
        )");
    
        if($insert){
            echo ('');
            
        } else {
            echo "gagal melakukan pemesanan";
        }
    
    
    ?>
    
    <div class="container-pemesanan">
<form method="post"> 
            <table align="center" class="tableform">
            <div>
                <h2 align="center"><font>Detail Pemesanan</font></h2>
                <hr>
            </div>
            <div>   
            <tr>
                        <td>Nama Lengkap</td>
                        <td>&nbsp;&nbsp;:</td>
                        <td>
                        &nbsp;
                        <?php
                    if(isset($_POST['kirim'])) {
                        $nama_depan = $_POST['nama_depan'];
                        $nama_belakang = $_POST['nama_belakang'];
                        
                        echo $nama_depan ."&nbsp;$nama_belakang";
                    }
                    ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>&nbsp;&nbsp;:</td>
                        <td>
                        &nbsp;
                        <?php
                    if(isset($_POST['kirim'])) {
                        $Email = $_POST['alamat_email'];

                        echo $Email;
                    }
                    ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal check-in</td>
                        <td>&nbsp;&nbsp;:</td>
                        <td>
                        &nbsp;
                        <?php
                    if(isset($_POST['kirim'])) {
                        $tanggal_checkin = $_POST['tanggal_checkin'];

                        echo $tanggal_checkin;
                    }
                    ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal check-out</td>
                        <td>&nbsp;&nbsp;:</td>
                        <td>
                        &nbsp;
                        <?php
                    if(isset($_POST['kirim'])) {
                        $tanggal_checkout = $_POST['tanggal_checkout'];

                        echo $tanggal_checkout;
                    }
                    ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Jam pesan</td>
                        <td>&nbsp;&nbsp;:</td>
                        <td>
                        &nbsp;
                        <?php
                    if(isset($_POST['kirim'])) {
                        $jam_pesan = $_POST['jam_pesan'];

                        echo $jam_pesan;
                    }
                    ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Catatan</td>
                        <td>&nbsp;&nbsp;:</td>
                        <td>
                        &nbsp;
                        <?php
                    if(isset($_POST['kirim'])) {
                        $catatan = $_POST['catatan'];

                        echo $catatan;
                    }
                    ?>
                        </td>
                    </tr>
                    <tr>
                    <td>Paket</td>
                        <td>&nbsp;&nbsp;:</td>
                        <td>
                        &nbsp;
                        <?php
                    if(isset($_POST['kirim'])) {
                        $paket = "Paket Tanam Mangrove";

                        echo $paket;
                    }
                    ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Sub Total</td>
                        <td>&nbsp;&nbsp;:</td>
                        <td>
                        &nbsp;
                        <?php
                        
                    if(isset($_POST['kirim'])) {
                        $harga = "815.000";
                        echo $harga;
                    }
                    ?>
                        </td>
                    </tr>
                    <tr>
                        <td><b>Total</b></td>
                        <td>&nbsp;&nbsp;<b>:</b></td>
                        <td>
                            <b>

                                &nbsp;
                                <?php
                        
                        if(isset($_POST['kirim'])) {
                            $harga = "815.000";
                            echo $harga;
                        }
                        ?>
                        </td>
                    </b>
                    </tr>
                    
            </div>
            </table>
</form>
        





    

  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/9c104fc1e2.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/9c104fc1e2.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>