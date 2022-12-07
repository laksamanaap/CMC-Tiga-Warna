<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Register Form</title>
  <link rel="icon" type="image/x-icon" href="assets/cmclogo.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/registerstyle.css">
<link rel="stylesheet" href="sweetalert2.min.css">
</head>
<body>


<main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
  <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
				<img src="assets/img/bg-1.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="assets/cmclogo.png" alt="logo" class="logo">
              </div>
              <p class="text-center login-card-description mx-auto"><b>Register</b></p>
              <form method="post" action="submit_register.php">
                  <div class="form-group">
                    <input type="text" class="form-control" name="username" placeholder="Masukan username anda">
                  </div>
				  <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Masukan email anda">
                  </div>
                  <div class="form-group mb-4">
                    <input type="password" name="password1" class="form-control" placeholder="Password">
                  </div>
				  <div class="form-group mb-4">
                    <input type="password" name="password2" class="form-control" placeholder="Ulangi Password">
                  </div>
                  <input type="submit" class="btn btn-block login-btn mb-4" type="button" value="Register" onclick="alert('Daftar Berhasil!')">
                  
                </form>
                <p class="login-card-footer-text text-center">Sudah punya akun? <a href="loginform.php">Masuk</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  


  </script>
  <script src="sweetalert2.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
