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
    <link rel="stylesheet" href="css/style.css">
    <title>CMC Tiga Warna</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
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
        
        include "koneksi.php";
        $query="SELECT * FROM home_cmc";
        $hasil=mysqli_query($conn,$query);
        $data=mysqli_fetch_array($hasil);


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
                        <a class="nav-link" href="#">Home</a>
                      </li>
                      <li class="nav-item px-2">
                        <a class="nav-link" href="#tentang">Tentang</a>
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
            <a href="destinasitujuanwisata.blade.php" class="btn-login"><button><font>Book Now!</font></button></a>
        </div>
            </div>
          </div>
        </nav>

      <div class="header-bg">
        <img src="assets/img/header-img.jpg" class="img-fluid" alt="Responsive image">
        <div class="mask">
          <div class="d-flex justify-content-left align-items-left">
            <div class="text-header">
              <div class="text-white">
                  <h5 class="mb-3 ml-2">Kawasan Destinasi Wisata Konservasi Mangrove</h5>
                  <h1 class="mb-3">CMC Tiga Warna</h1>
                  <a class="btn btn-outline-light btn-lg ml-1" href="#tentang" role="button"><b>Tentang</b></a>
              </div>
            </div>  
          </div>
        </div>

          <div class="center-vertical" >
            <div class="about-us-section bg-light" id="tentang">
              <div class="container">
                <div class="row">
                  <div class="col-12 col-lg-6 mb-4 mb-lg-0 ">
                    <div class="img-head">
                      <img src="assets/img/diving/diving.jpg">
                    </div>
                  </div>
                  <div class="col-12 col-lg-6">
                    <h2 class="text-head mb-2">
                      <font><?php echo $data['judul']  ?></font>
                    </h2>
                    <div class="break-small mb-4"></div>
                    <div class="text-container">
                      <p class="text-para">
                      <?php echo $data['isi']?>
                      </p>
                      <p class="text-para-2">
                      <?php echo $data['isi2']?>
                      </p>
                      <p class="text-para-3">
                      <?php echo $data['isi3']?>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
    </div>
    
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
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>