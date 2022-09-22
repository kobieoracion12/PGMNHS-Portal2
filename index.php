<?php
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Welcome - Pedro Guevarra Memorial National Highschool</title>
  <link rel="icon" href="assets/img/pgmnhs-logo.ico">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/fontawesome.css">
  <link rel="stylesheet" type="text/css" href="css/brands.css">
  <link rel="stylesheet" type="text/css" href="css/solid.css">
</head>
<body class="bg-image" style="background-image: url('assets/img/background-image2.jpg'); background-repeat: no-repeat; height: 100%; background-position: center; background-size: cover;">

<div class="container-fluid">
  <div class="d-flex align-items-center justify-content-center" style="height: 710px">
    <div class="col-md-2 col-sm-12">
    </div>

    <div class="col-md-6 col-sm-12 m-2">
      <div class="card">
        <div class="card-body shadow-sm">
          <div class="row d-flex align-items-center justify-content-center m-3">
            <img src="assets/img/pgmnhs-logo.png" class="img-fluid" style="width:120px">
            <h2 class="text-center mt-4">PGMNHS Portal</h2>

            <form class="d-flex align-items-center justify-content-center m-4" method="post" action="php/auth.php">
              <div class="row m-4">

                <?php
                  if(isset($_GET['Invalid'])) {
                    echo '<p class="text-center text-danger">Invalid student number or password.</p>';
                  }
                ?>

                <?php
                  if(isset($_GET['Login'])) {
                    echo '<p class="text-center text-danger">Please login first.</p>';
                  }
                ?>

                <div class="input-group mb-3">
                  <span class="input-group-text bg-white border-end-0 text-success" id="basic-addon1">
                    <i class="fa-solid fa-id-badge"></i>
                  </span>                  

                  <input class="form-control border-start-0 w-50" type="text" name="control_no" placeholder="Control Number">
                </div>

                <div class="input-group mb-3">
                  <span class="input-group-text bg-white border-end-0 text-success" id="basic-addon1">
                    <i class="fa-solid fa-lock"></i>
                  </span>
                  <input class="form-control border-start-0 w-50" type="password" name="password-input" placeholder="Password">
                </div>

                <div class="row mb-2">
                  <div class="col-6 text-start ps-3">
                  </div>

                  <div class="col-6 text-end ">
                    <a class="text-decoration-none text-success" href="#">
                      <small>Forgot Password?</small>
                    </a>
                  </div>
                </div>

                <button class="btn btn-success rounded-pill mt-2" name="login_btn" value="Submit">Login</button>
              </div>
            </form>
          </div>
        </div>

        <div class="card-footer bg-white text-muted text-center">
          <p class="mb-2" style="font-size: 10px;">Developed by: Kobie Oracion, Jireh Geleo Ramos & John Lloyd Araza</p>

        </div>
      </div>
    </div>

    <div class="col-md-2 col-sm-12">
      
    </div>
  </div>
</div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</html>