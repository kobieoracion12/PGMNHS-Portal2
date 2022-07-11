<?php
  include_once("admin-data.php");
  include_once("../php/database.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Form Management - Pedro Guevarra Memorial National Highschool</title>
  <link rel="icon" href="../assets/img/pgmnhs-logo.ico">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/fontawesome.css">
  <link rel="stylesheet" type="text/css" href="../css/brands.css">
  <link rel="stylesheet" type="text/css" href="../css/solid.css">
  <link rel="stylesheet" type="text/css" href="../css/regular.css">
</head>
<body>

<!-- Navigation -->
<header>

  <!-- Top Navigation -->
  <div class="p-3 text-center bg-success border-bottom">
  </div>

  <!-- Second Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light m-3">
    <div class="container-fluid">
      <a href="index.php" class="ms-md-5">
        <img src="../assets/img/pgmnhs-logo.png" height="60px" />
      </a>

      <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa-solid fa-bars"></i>
      </button>

      <div class="collapse navbar-collapse text-center ms-md-5 ms-sm-0" id="navbarNavAltMarkup">
        <div class="col-md-6 col-sm-12 navbar-nav">
          <a class="nav-link" href="dashboard.php"><i class="fa-solid fa-home fa-sm me-1"></i>Home</a>

          <a class="nav-link" href="admin-records.php"><i class="fa-solid fa-book fa-sm me-1"></i></i>Records</a>

          <a class="nav-link text-success" href="admin-forms.php"><i class="fa-solid fa-file-lines fa-sm me-1"></i></i>Form Management</a>

          <a class="nav-link" href="school-calendar.php"><i class="fa-solid fa-calendar fa-sm me-1"></i>School Calendar</a>
          <a class="nav-link" href="portal-settings.php"><i class="fa-solid fa-gear fa-sm me-1"></i>Portal Settings</a>
        </div>

        <div class="col-md-6 col-sm-12 navbar-nav">
          <!-- Profile -->
          <li class="nav-item dropdown px-4 ms-md-auto ms-sm-0">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <img class="img-fluid rounded-circle" src="../assets/img/profile.jpg"  width="22px">
            </a>

            <ul class="dropdown-menu dropdown-menu-end p-2" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="student-profile.php">View Profile</a></li>
              <li><a class="dropdown-item" href="../php/change-password.php">Change Password</a></li>
              <li><a class="dropdown-item" href="../php/settings.php">Settings</a></li>
              <li><hr class="text-muted dropdown-divider"></li>
              <li><a class="dropdown-item text-danger" href="admin-logout.php">Logout</a></li>
            </ul>
          </li>
        </div>
      </div>
    </div>
  </nav>

  <hr class="text-muted">
</header>

<body>

<div class="container">
  <div class="row">
      
    </form>
  </div>

  <div class="row">
    <div class="col-12 p-md-5 pt-md-3 pb-md-0 p-sm-0 pt-sm-0">
            
      <!-- Table Header -->
      <div class="row">
        <form action="../php/upload-files.php" method="post" enctype="multipart/form-data">
          <div class="col-md-12 col-sm-12 d-flex justify-content-end align-items-end">
            <input class="form-control me-2" type="text" name="search" placeholder="Search...">

            <button class="btn btn-primary me-2">Search</button>

            <input class="form-control me-2" type="file" name="myfile" required>
            <button class="btn btn-success" type="submit" name="upload-file"><i class="fa-solid fa-upload"></i></button>
          </div>
        </form>
      </div>

      <!-- Main Table -->
      <div class="row">
        <div class="table-responsive">
          <table class="table table-striped mt-4">
            <thead class="text-muted">
              <tr>
                <th scope="col">Document No.</th>
                <th scope="col">Name</th>
                <th scope="col" class="text-center">File Size</th>
                <th scope="col" class="text-center">Downloads</th>
                <th scope="col" class="text-center">Date Uploaded</th>
                <th scope="col" class="text-center">Action</th>
              </tr>
            </thead>

            <tbody>
              <?php
                $documents = mysqli_query($config, "SELECT * FROM school_documents");

                while($data = mysqli_fetch_array($documents)) {
                  
              ?>
              <tr>
                <td class="p-3 ps-2"><?php echo $data['document_no']; ?></td>

                <td class="p-3 ps-2"><?php echo $data['document_name']; ?></td>

                <td class="p-3 ps-2 text-center"><?php echo floor($data['document_size'] / 1000) . 'KB';?>
                </td>

                <td class="p-3 ps-2 text-center"><?php echo $data['download_count']; ?>
                </td>

                <td class="p-3 ps-2 text-center"><?php echo $data['data_uploaded'] = date("F j, Y"); ?>
                </td>

                <td class="text-center p-3">
                  <div class="col-12">
                    <a class="text-decoration-none text-success me-2" href="#">
                      <i class="fa-solid fa-pen"></i>
                    </a>

                    <a class="text-decoration-none text-danger me-2" href="#">
                      <i class="fa-solid fa-trash"></i>
                    </a>

                    <a class="text-decoration-none text-primary" href="../php/download-files.php?file_id=<?php echo $data['document_no'] ?>">
                      <i class="fa-solid fa-circle-down"></i>
                    </a>
                  </div>
                </td>

              </tr>
            <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


<footer class="d-flex flex-wrap justify-content-md-between align-items-center py-3 my-4 border-top p-5">
  <div class="col-4 mt-3">
    <p class="fw-normal text-muted" style="font-size: 10px;">
      Pedro Guevarra Memorial National Highschool Portal <br>
      All Rights Reserved 2022 ©
    </p>
  </div>

  <div class="col-4 mt-3 mb-0 text-center">
    <a href="index.php" class="ms-md-2">
      <img src="../assets/img/pgmnhs-logo.png" height="60px" />
    </a>
  </div>

  <div class="col-4 mt-3 text-end">
    <p class="fw-normal text-muted" style="font-size: 10px;">
      Visit us @ P. Guevara St. 4009
      <br> Santa Cruz, Laguna Philippines
    </p>
  </div>
</footer>

</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</html>