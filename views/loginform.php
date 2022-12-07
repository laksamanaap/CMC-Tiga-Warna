<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Form</title>
  <link rel="icon" type="image/x-icon" href="assets/cmclogo.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/loginstyle.css">
</head>
<body>

<main class="d-flex align-items-center min-vh-100 py-3 py-md-0">
  <div class="container">
      <div class="card login-card">
        <div class="row no-gutters">
          <div class="col-md-5">
            <img src="assets/img/bg-2.jpg" alt="login" class="login-card-img">
          </div>
          <div class="col-md-7">
            <div class="card-body">
              <div class="brand-wrapper">
                <img src="assets/cmclogo.png" alt="logo" class="logo">
              </div>
              <p class="text-center login-card-description mx-auto"><b>Log in</b></p>
              <form method="post" action="submit_login.php">
                  <div class="form-group">
                    <label for="email" class="sr-only">Email</label>
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                  </div>
                  <div class="form-group mb-4">
                    <label for="password" class="sr-only">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" required>
                  </div>
                  <input name="login" type="submit" id="login" class="btn btn-block login-btn mb-4" type="button" value="Login">
                </form>
                <p class="login-card-footer-text text-center">Belum punya akun? <a href="registerform.php">Daftar</a></p>
              </div>
          </div>
        </div>
      </div>
    </div>
  </main>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>
