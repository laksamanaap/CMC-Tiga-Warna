<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Title Icon -->
    <link rel="icon" type="image/x-icon" href="assets/cmclogo.png">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Personal CSS-->
    <link rel="stylesheet" href="css/stylepenginapan.css">
    <title>CMC Tiga Warna</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>

<?php


include "koneksi.php";


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
// Get data from row 1 (Paket Diving)
$query="SELECT * FROM tb_tempatpenginapan WHERE id_tempatpenginapan = '1'";
$query_gambar = "SELECT * FROM tb_gambartempatpenginapan WHERE id_gambar = '1'";
// Get data from row 2 (Paket Tanam Mangrove)
$query2="SELECT * FROM tb_tempatpenginapan WHERE id_tempatpenginapan = '2'";
$query_gambar2 = "SELECT * FROM tb_gambartempatpenginapan WHERE id_gambar = '2'";
// Get data from row 3 (Paket Explore Hutan)
$query3="SELECT * FROM tb_tempatpenginapan WHERE id_tempatpenginapan = '3'";
$query_gambar3 = "SELECT * FROM tb_gambartempatpenginapan WHERE id_gambar = '3'";


// Show data from row 1 (Paket Diving)
$hasil=mysqli_query($conn,$query);
$data=mysqli_fetch_array($hasil);
$hasil_gambar=mysqli_query($conn,$query_gambar);
$data_gambar=mysqli_fetch_array($hasil_gambar);
// Show data from row 2 (Paket Tanam Mangrove)
$hasil2=mysqli_query($conn,$query2);
$data2=mysqli_fetch_array($hasil2);
$hasil_gambar2=mysqli_query($conn,$query_gambar2);
$data_gambar2=mysqli_fetch_array($hasil_gambar2);
// Show data from row 3 (Paket Explore Hutan)
$hasil3=mysqli_query($conn,$query3);
$data3=mysqli_fetch_array($hasil3);
$hasil_gambar3=mysqli_query($conn,$query_gambar3);
$data_gambar3=mysqli_fetch_array($hasil_gambar3);
// Show data from row 4 (Paket Banana Boat)

?>

<nav class="navbar navbar-expand-xl py-4 ">
          <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse px-5 navbar-collapse justify-content-between" id="navbarTogglerDemo01">
              <a class="navbar-brand" href="/" style="color:#CBCB32;">
              <img class="img-fluid" width=120px; src="assets/logocmc2.png">
            </a>
              <div class="wrapper-item">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item px-2">
                        <a class="nav-link" href="home.blade.php">Home</a>
                      </li>
                      <li class="nav-item px-2">
                        <a class="nav-link" href="home.blade.php">Tentang</a>
                      </li>
                      <li class="nav-item px-2">
                        <a class="nav-link" href="destinasitujuanwisata.blade.php">Destinasi Wisata</a>
                      </li>
                      <li class="nav-item px-2">
                        <a class="nav-link" href="tempatpenginapan.blade.php">Tempat Penginapan</a>
                      </li>
                    </ul>
              </div>
              <div class="loginopt">
              <a href="logout.php" class="register text-decoration-none text-light mr-3">Logout</a>
            <a href="/destinasi&tujuanwisata" class="btn-login"><button><font>Book Now!</font></button></a>
        </div>
            </div>
          </div>
        </nav>

<!-- Product Card -->

    <h2 class="text-head mt-5 text-center">
      <font color="#00AAA0">Tempat</font>&nbsp;<font color="#00736C">Penginapan</font>
  </h2>
   
  <div class="container">
  <div class="row">
  <div class="col">
    <div class="card mx-auto mt-4" style="width: 600px; height:540px;">
        <img src="../img_penginapan/<?php echo $data_gambar['file']?>" class="card-img" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center"><?php echo $data['judul'] ?></h5>
          
          <div class="card-text-container">
            <p class="text-para"><b><?php echo $data['fasilitas'] ?></b></p>
            <p class="text-para-2"><?php echo $data['isi'] ?></p>
          </div>
          <button class="btn-footer btn-primary w-100 mt-3"><a href="/formcheckout_tempatpenginapan_reguler" target="_blank">Beli Paket</a></button>
        </div>
      </div>
    </div>
    
    <div class="col">
    <div class="card mx-auto mt-4" style="width: 600px; height:540px;">
        <img src="../img_penginapan/<?php echo $data_gambar2['file']?>" class="card-img" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center"><?php echo $data2['judul'] ?></h5>
          
          <div class="card-text-container">
            <p class="text-para"><b><?php echo $data2['fasilitas'] ?></b></p>
            <p class="text-para-2"><?php echo $data2['isi'] ?></p>
</div>
<button class="btn-footer btn-primary w-100 mt-3"><a href="/formcheckout_tempatpenginapan_eksklusif" target="_blank">Beli Paket</a></button>
        </div>
      </div>
    </div>    
  
  </div>
</div>

<!-- <div class="col">
    <div class="card mx-auto mt-4" style="width: 600px; height:540px;">
        <img src="../img_penginapan/<?php echo $data_gambar3['file']?>" class="card-img" alt="...">
        <div class="card-body">
          <h5 class="card-title text-center"><?php echo $data3['judul'] ?></h5>
          
          <div class="card-text-container">
            <p class="text-para"><b><?php echo $data3['fasilitas'] ?></b></p>
            <p class="text-para-2"><?php echo $data3['isi'] ?></p>
</div>
<button class="btn-footer btn-primary w-100 mt-3"><a href="/formcheckout_tempatpenginapan_eksklusif" target="_blank">Beli Paket</a></button>
        </div>
      </div>
    </div>    
  
  </div>
</div> -->

<!-- Product Card -->

<footer class="text-center text-lg-start bg-white text-muted" style="background-color: rgba(0, 0, 0, 0.025);" >
      <section class="Footer">
        <div class="container text-center text-md-start mt-5">
          <div class="row mt-3">
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
              <h6 class="text-uppercase fw-bold mb-4 mt-4 text-light">
                <i class="text-secondary"></i><font color="#00CABE">CMC Tiga Warna</font>
              </h6>
              <p class="text-light">
               "Hidup di bumi lebih seperti kata kerja. Memperbaiki,
    menjaga, menciptakan kembali, dan memenangkannya.
    Salam Konservasi!."
              </p>
            </div>
            
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 mt-4 text-light">
              <h6 class="text-uppercase fw-bold mb-4">
              <font color="#00CABE">Products</font>
              </h6>
              <p>
                <a href="/destinasi&tujuanwisata" class="text-reset ">Destinasi Wisata</a>
              </p>
              <p>
                <a href="/tempatpenginapan" class="text-reset">Tempat Penginapan</a>
              </p>
            </div>
            
    
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 mt-4 text-light">
              <h6 class="text-uppercase fw-bold mb-4">
              <font color="#00CABE">Useful links</font>
              </h6>
              <p>
                <a href="/" class="text-reset">Home</a>
              </p>
              <p>
                <a href="#tentang" class="text-reset">Tentang</a>
              </p>
              <p>
                <a href="/destinasi&tujuanwisata" class="text-reset">Destinasi & tempat wisata</a>
              </p>
              <p>
                <a href="/tempatpenginapan" class="text-reset">Tempat penginapan</a>
              </p>
            </div>
            
    
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4 mt-4 text-light">
              <h6 class="text-uppercase fw-bold mb-4">
              <font color="#00CABE">Contact</font>
              </h6>
              <p><i class="fas fa-location-dot me-3 text-secondary"></i>Desa tambakrejo, Kec. Sumbermanjing wetan,
              Kab. Malang</p>
              <p>
                <i class="fas fa-envelope me-3 text-secondary"></i>
                cmctigawarna@gmail.com
              </p>
              <p><i class="fas fa-phone me-3 text-secondary"></i> +62 812-3090-5187</p>
              <button class="btn-footer btn-primary w-100"><a href="https://www.instagram.com/cmctigawarna/" target="_blank">Find Us</a></button>
            </div>
            </div>
        </div>
      </section>
      <!-- Section: Links  -->
    
      <!-- Footers 2 -->
      <div class="text-center ml-4 p-4" style="background-color: #11263A">
        © 2021 Copyright
          <a class="text-reset fw-bold" href="/">CMC Tiga Warna.</a>
          <p>All Right Reserved. Malang, Indonesia</p>
      </div>
      <!-- Footers 2 -->
    </footer>
    <!-- Footer -->

     

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/9c104fc1e2.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/9c104fc1e2.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>