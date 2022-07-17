<?php
  include_once("admin-data.php");
  include_once("../php/database.php");
  include("../php/fetch-section.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Records - Pedro Guevarra Memorial National Highschool</title>
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

          <a class="nav-link text-success" href="admin-records.php"><i class="fa-solid fa-book fa-sm me-1"></i></i>Records</a>

          <a class="nav-link" href="admin-forms.php"><i class="fa-solid fa-file-lines fa-sm me-1"></i></i>Form Management</a>

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
    <nav>
      <!-- Tab Header -->
      <div class="nav nav-tabs" id="nav-tab" role="tablist">
        <button class="nav-link fw-bold text-success active" id="nav-upcoming-tab" data-bs-toggle="tab" data-bs-target="#nav-upcoming" type="button" role="tab" aria-controls="nav-upcoming" aria-selected="true">Admin</button>

        <button class="nav-link text-decoration-none text-muted" id="nav-faculty-tab" data-bs-toggle="tab" data-bs-target="#nav-faculty" type="button" role="tab" aria-controls="nav-faculty" aria-selected="false">Faculty</button>

        <button class="nav-link text-decoration-none text-muted" id="nav-student-tab" data-bs-toggle="tab" data-bs-target="#nav-student" type="button" role="tab" aria-controls="nav-student" aria-selected="false">Student</button>
      </div>
    </nav>

    <!-- Tab Body -->
    <div class="tab-content" id="nav-tabContent">

      <!-- Admin Accounts -->
      <div class="tab-pane fade show active m-md-4 p-md-3 pt-md-0 mt-md-3" id="nav-upcoming" role="tabpanel" aria-labelledby="nav-upcoming-tab">
        <div class="row">
          <div class="col-12 p-md-5 pt-md-3 pb-md-0 p-sm-0 pt-sm-0">

            <?php
              if(isset($_GET['update-success'])) {
                echo '
                  <div class="alert alert-success alert-dismissible fade show text-center mb-4" role="alert">
                    <p class="mb-0">Updated successfully!</p> 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                ';
              }
              elseif(isset($_GET['update-failed'])) {
                echo '
                  <div class="alert alert-danger alert-dismissible fade show text-center mb-4" role="alert">
                    <p class="mb-0">Update Failed!</p> 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                ';
              }
            ?>
            
            <!-- Table Header -->
            <div class="row">
              <div class="col-md-4 col-sm-12">
                <h4 class="ms-2">All Admin</h4>
              </div>

              <div class="col-md-8 col-sm-12 d-flex justify-content-end align-items-end">
                <input class="form-control me-2" type="text" id="admin_search" placeholder="Search...">

                <select class="form-select me-2">
                  <option selected>Sort by Section</option>
                  <option></option>
                </select>

                <button class="btn btn-primary me-2">Search</button>
              </div>
            </div>

            <!-- Main Table -->
            <div class="row">
              <div class="table-responsive">
                <table class="table table-striped mt-4" id="admin_table">
                  <thead class="text-muted">
                    <tr>
                      <th scope="col">ID #</th>
                      <th scope="col">Name</th>
                      <th scope="col" hidden>First Name</th>
                      <th scope="col" hidden>Middle Name</th>
                      <th scope="col" hidden>Last Name</th>
                      <th scope="col" hidden>Gender</th>
                      <th scope="col" hidden>Civil</th>
                      <th scope="col" hidden>Nationality</th>
                      <th scope="col" hidden>Birth Date</th>
                      <th scope="col" hidden>Birth Place</th>
                      <th scope="col" hidden>Religion</th>
                      <th scope="col" hidden>Address</th>
                      <th scope="col" hidden>Contact No.</th>
                      <th scope="col" hidden>Email Address</th>
                      <th scope="col" class="text-center">Status</th>
                      <th scope="col" class="text-center">Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
                      $admin = mysqli_query($config, "SELECT * FROM faculty_info, faculty_accounts WHERE (faculty_info.employee_no = faculty_accounts.employee_no) AND account_priv = 'Admin'");

                      while($data = mysqli_fetch_array($admin)) {
                        
                    ?>
                    <tr>
                      <td class="p-3 ps-2"><?php echo $data['employee_no']; ?></td>

                      <td class="p-3 ps-2"><?php 
                        echo $data['first_name']; 
                        echo " ";
                        echo $data['last_name'];
                      ?></td>

                      <td class="p-3 ps-2" hidden><?php echo $data['first_name']; ?></td>

                      <td class="p-3 ps-2" hidden><?php echo $data['middle_name']; ?></td>

                      <td class="p-3 ps-2" hidden><?php echo $data['last_name']; ?></td>

                      <td class="p-3 ps-2" hidden><?php echo $data['gender']; ?></td>

                      <td class="p-3 ps-2" hidden><?php echo $data['civil_status']; ?></td>

                      <td class="p-3 ps-2" hidden><?php echo $data['nationality']; ?></td>

                      <td class="p-3 ps-2" hidden><?php echo $data['birth_date']; ?></td>

                      <td class="p-3 ps-2" hidden><?php echo $data['birth_place']; ?></td>

                      <td class="p-3 ps-2" hidden><?php echo $data['religion']; ?></td>

                      <td class="p-3 ps-2" hidden><?php echo $data['address']; ?></td>

                      <td class="p-3 ps-2" hidden><?php echo $data['contact_no']; ?></td>

                      <td class="p-3 ps-2" hidden><?php echo $data['email_address']; ?></td>

                      <td class="p-3 d-flex justify-content-center align-items-center">

                        <?php 
                          if($data['account_status'] == 'Active') {
                            echo '
                            <div class="bg-success text-white text-center rounded-pill w-50">
                              Active
                            </div>';
                          }
                          else if($data['account_status'] == 'Closed') {
                            echo '
                            <div class="bg-danger text-white text-center rounded-pill w-50">
                              Closed
                            </div>';
                          }

                          else if($data['account_status'] == 'Banned') {
                            echo '
                            <div class="bg-danger text-white text-center rounded-pill w-50">
                              Banned
                            </div>';
                          }
                        ?>
                      </td>

                      <td class="text-center p-3">
                        <div class="col-12">
                          <a class="text-decoration-none text-secondary me-2 view-button" href="#" data-bs-toggle="modal" data-bs-target="#viewModal">
                            <i class="fa-solid fa-eye"></i>
                          </a>

                          <a class="text-decoration-none text-success me-2 edit-button" href="#" data-bs-toggle="modal" data-bs-target="#editAdmin">
                            <i class="fa-solid fa-pen"></i>
                          </a>

                          <a class="text-decoration-none text-danger delete-button" href="#"  data-bs-toggle="modal" data-bs-target="#deleteModal">
                            <i class="fa-solid fa-trash"></i>
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

      <!-- Faculty Account -->
      <div class="tab-pane fade m-md-4 p-md-3 pt-md-0 mt-md-3" id="nav-faculty" role="tabpanel" aria-labelledby="nav-faculty-tab">
        <div class="row">
          <div class="col-12 p-md-5 pt-md-3 pb-md-0 p-sm-0 pt-sm-0">
            
            <!-- Table Header -->
            <div class="row">
              <div class="col-md-4 col-sm-12">
                <h4 class="ms-2">All Faculty</h4>
              </div>

              <div class="col-md-8 col-sm-12 d-flex justify-content-end align-items-end">
                <input class="form-control me-2" type="text" id="faculty_search" placeholder="Search...">

                <select class="form-select me-2">
                  <option selected>Sort by Section</option>
                  <option></option>
                </select>

                <button class="btn btn-primary me-2">Search</button>

                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addFacultyModal"><i class="fa-solid fa-user-plus"></i></button>

                <!-- Add Faculty Modal -->
                <form action="../php/register-faculty.php" method="post">
                  <div class="modal fade" id="addFacultyModal" tabindex="-1" aria-labelledby="addFacultyModal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="addFacultyModal">Add Faculty Form</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                       
                        <div class="modal-body p-md-4 p-sm-0">
                          <div class="container-fluid">
                            <div class="row">
                              <h5 class="mb-4 text-success fw-bold">Faculty Information</h5>
                            </div>

                            <div class="row">
                              <div class="col-md-4 ps-md-4 pe-md-4 ps-sm-0 pe-md-0">
                                <label class="ms-2 mb-1">First Name</label>
                                <input class="form-control text-muted mb-3" type="text" name="first_name" required>

                                <label class="ms-2 mb-1">Gender</label>
                                <select class="form-select text-muted mb-3" name="gender">
                                  <option selected>Please Select Gender</option>
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                </select>

                                <label class="ms-2 mb-1">Religion</label>
                                <select class="form-select text-muted mb-3" name="religion">
                                  <option selected>Please Select Religion</option>
                                  <option value="Catholic">Catholic</option>
                                  <option value="Other Christians">Other Christians (Aglipayan, Born Again, etc.)</option>
                                  <option value="Protestant">Protestant</option>
                                  <option value="Islam">Islam</option>
                                  <option value="Tribal Religion">Tribal Religion</option>
                                  <option value="None">None</option>
                                </select>

                                <label class="ms-2 mb-1">Address</label>
                                <input class="form-control text-muted mb-3" type="text" name="address" required>
                              </div>

                              <div class="col-md-4">
                                <label class="ms-2 mb-1">Middle Name</label>
                                <input class="form-control text-muted mb-3" type="text" name="middle_name">

                                <label class="ms-2 mb-1">Date of Birth</label>
                                <input class="form-control text-muted mb-3" type="date" name="birth_date">

                                <label class="ms-2 mb-1">Civil Status</label>
                                <select class="form-select text-muted mb-3" name="civil_status">
                                  <option selected>Please Select Status</option>
                                  <option value="Single">Single</option>
                                  <option value="Married">Married</option>
                                </select>

                                <label class="ms-2 mb-1">Contact Number</label>
                                <input class="form-control text-muted mb-3" type="text" name="contact_no" required>
                              </div>

                              <div class="col-md-4">
                                <label class="ms-2 mb-1">Last Name</label>
                                <input class="form-control text-muted mb-3" type="text" name="last_name" required>

                                <label class="ms-2 mb-1">Place of Birth</label>
                                <input class="form-control text-muted mb-3" type="text" name="birth_place" required>

                                <label class="ms-2 mb-1">Nationality</label>
                                <input class="form-control text-muted mb-3" type="text" name="nationality" required>

                                <label class="ms-2 mb-1">Email Address</label>
                                <input class="form-control text-muted mb-3" type="text" name="email_add" required>
                              </div>
                            </div>

                            <div class="row  ps-md-3 pe-md-3 ps-sm-0 pe-md-0">
                              <label class="ms-2 mb-1">Photo (2x2)</label>
                              <input class="form-control" type="file" id="profile-picture">
                            </div>
                          </div>
                        </div>

                        <div class="modal-footer">
                          <button type="submit" class="btn btn-success" name="register">Register Student</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <!-- Main Table -->
            <div class="row">
              <div class="table-responsive" id="faculty_table">
                <table class="table table-striped mt-4">
                  <thead class="text-muted">
                    <tr>
                      <th scope="col">ID #</th>
                      <th scope="col">Name</th>
                      <th scope="col" hidden>First Name</th>
                      <th scope="col" hidden>Middle Name</th>
                      <th scope="col" hidden>Last Name</th>
                      <th scope="col" hidden>Gender</th>
                      <th scope="col" hidden>Civil</th>
                      <th scope="col" hidden>Nationality</th>
                      <th scope="col" hidden>Birth Date</th>
                      <th scope="col" hidden>Birth Place</th>
                      <th scope="col" hidden>Religion</th>
                      <th scope="col" hidden>Address</th>
                      <th scope="col" hidden>Contact No.</th>
                      <th scope="col" hidden>Email Address</th>
                      <th scope="col" class="text-center">Status</th>
                      <th scope="col" class="text-center">Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
                      $admin = mysqli_query($config, "SELECT * FROM faculty_info, faculty_accounts WHERE (faculty_info.employee_no = faculty_accounts.employee_no) AND account_priv = 'Faculty'");

                        while($data = mysqli_fetch_array($admin)) {
                    ?>
                    <tr>
                      <td class="p-3 ps-2"><?php echo $data['employee_no']; ?></td>

                      <td class="p-3 ps-2"><?php 
                        echo $data['first_name']; 
                        echo " ";
                        echo $data['last_name'];
                      ?></td>

                      <td class="p-3 ps-2" hidden><?php echo $data['first_name']; ?></td>

                      <td class="p-3 ps-2" hidden><?php echo $data['middle_name']; ?></td>

                      <td class="p-3 ps-2" hidden><?php echo $data['last_name']; ?></td>

                      <td class="p-3 ps-2" hidden><?php echo $data['gender']; ?></td>

                      <td class="p-3 ps-2" hidden><?php echo $data['civil_status']; ?></td>

                      <td class="p-3 ps-2" hidden><?php echo $data['nationality']; ?></td>

                      <td class="p-3 ps-2" hidden><?php echo $data['birth_date']; ?></td>

                      <td class="p-3 ps-2" hidden><?php echo $data['birth_place']; ?></td>

                      <td class="p-3 ps-2" hidden><?php echo $data['religion']; ?></td>

                      <td class="p-3 ps-2" hidden><?php echo $data['address']; ?></td>

                      <td class="p-3 ps-2" hidden><?php echo $data['contact_no']; ?></td>

                      <td class="p-3 ps-2" hidden><?php echo $data['email_address']; ?></td>

                      <td class="p-3 d-flex justify-content-center align-items-center">

                        <?php 
                          if($data['account_status'] == 'Active') {
                            echo '
                            <div class="bg-success text-white text-center rounded-pill w-50">
                              Active
                            </div>';
                          }
                          else if($data['account_status'] == 'Closed') {
                            echo '
                            <div class="bg-danger text-white text-center rounded-pill w-50">
                              Closed
                            </div>';
                          }

                          else if($data['account_status'] == 'Banned') {
                            echo '
                            <div class="bg-danger text-white text-center rounded-pill w-50">
                              Banned
                            </div>';
                          }
                        ?>
                      </td>

                      <td class="text-center p-3">
                        <div class="col-12">
                          <a class="text-decoration-none text-secondary me-2 view-button" href="#" data-bs-toggle="modal" data-bs-target="#viewModal">
                            <i class="fa-solid fa-eye"></i>
                          </a>

                          <a class="text-decoration-none text-success me-2 edit-button" href="#" data-bs-toggle="modal" data-bs-target="#editAdmin">
                            <i class="fa-solid fa-pen"></i>
                          </a>

                          <a class="text-decoration-none text-danger delete-button" href="#"  data-bs-toggle="modal" data-bs-target="#deleteModal">
                            <i class="fa-solid fa-trash"></i>
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

      <!-- Student Account -->
      <div class="tab-pane fade m-md-4 p-md-3 pt-md-0 mt-md-3" id="nav-student" role="tabpanel" aria-labelledby="nav-student-tab">
        <div class="row">
          <div class="col-12 p-md-5 pt-md-3 pb-md-0 p-sm-0 pt-sm-0">
            
            <!-- Table Header -->
            <div class="row">
              <div class="col-md-4 col-sm-12">
                <h4 class="ms-2">All Students</h4>
              </div>

              <div class="col-md-8 col-sm-12 d-flex justify-content-end align-items-end">
                <input class="form-control me-2" type="text" id="student_search" placeholder="Search...">

                <select class="form-select me-2">
                  <option selected>Sort by Section</option>
                  <option></option>
                </select>

                <button class="btn btn-primary me-2">Search</button>

                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addUserModal"><i class="fa-solid fa-user-plus"></i></button>

                <!-- Add User Modal -->
                <form action="../php/register-student.php" method="post">
                  <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModal" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="addUserModal">Add Student Form</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                       
                        <div class="modal-body p-md-4 p-sm-0">
                          <div class="container-fluid">
                            <div class="row">
                              <h5 class="mb-4 text-success fw-bold">Student Information</h5>
                            </div>

                            <div class="row">
                              <div class="col-md-4 ps-md-4 pe-md-4 ps-sm-0 pe-md-0">
                                <label class="ms-2 mb-1">First Name</label>
                                <input class="form-control text-muted mb-3" type="text" name="first_name" required>

                                <label class="ms-2 mb-1">Gender</label>
                                <select class="form-select text-muted mb-3" name="gender">
                                  <option selected>Please Select Gender</option>
                                  <option value="Male">Male</option>
                                  <option value="Female">Female</option>
                                </select>

                                <label class="ms-2 mb-1">Religion</label>
                                <select class="form-select text-muted mb-3" name="religion">
                                  <option selected>Please Select Religion</option>
                                  <option value="Catholic">Catholic</option>
                                  <option value="Other Christians">Other Christians (Aglipayan, Born Again, etc.)</option>
                                  <option value="Protestant">Protestant</option>
                                  <option value="Islam">Islam</option>
                                  <option value="Tribal Religion">Tribal Religion</option>
                                  <option value="None">None</option>
                                </select>

                                <label class="ms-2 mb-1">Address</label>
                                <input class="form-control text-muted mb-3" type="text" name="address" required>

                                <label class="ms-2 mb-1">Year Level</label>
                                <select class="form-select text-muted mb-3" name="year" required>
                                  <option selected>Please Select Year Level</option>
                                  <?php
                                    foreach ($years as $years) {
                                  ?>

                                  <option value=<?php echo $years['year_code'] ?>><?php echo $years['year_name'] ?></option>

                                <?php } ?>
                                </select>
                              </div>

                              <div class="col-md-4">
                                <label class="ms-2 mb-1">Middle Name</label>
                                <input class="form-control text-muted mb-3" type="text" name="middle_name">

                                <label class="ms-2 mb-1">Date of Birth</label>
                                <input class="form-control text-muted mb-3" type="date" name="birth_date">

                                <label class="ms-2 mb-1">Civil Status</label>
                                <select class="form-select text-muted mb-3" name="civil_status">
                                  <option selected>Please Select Status</option>
                                  <option value="Single">Single</option>
                                  <option value="Married">Married</option>
                                </select>

                                <label class="ms-2 mb-1">Contact Number</label>
                                <input class="form-control text-muted mb-3" type="text" name="contact_no" required>

                                <label class="ms-2 mb-1">Section</label>
                                <select class="form-select text-muted mb-3" name="sections" required>
                                  <option selected>Please Select Section</option>
                                  <?php
                                    foreach ($sections as $sections) {
                                  ?>

                                  <option value=<?php echo $sections['section_code'] ?>><?php echo $sections['section_name'] ?></option>

                                <?php } ?>
                                </select>
                              </div>

                              <div class="col-md-4">
                                <label class="ms-2 mb-1">Last Name</label>
                                <input class="form-control text-muted mb-3" type="text" name="last_name" required>

                                <label class="ms-2 mb-1">Place of Birth</label>
                                <input class="form-control text-muted mb-3" type="text" name="birth_place" required>

                                <label class="ms-2 mb-1">Nationality</label>
                                <input class="form-control text-muted mb-3" type="text" name="nationality" required>

                                <label class="ms-2 mb-1">Email Address</label>
                                <input class="form-control text-muted mb-3" type="text" name="email_add" required>

                                <label class="ms-2 mb-1">Student Photo (2x2)</label>
                                <input class="form-control" type="file" id="student_photo">
                              </div>
                            </div>

                            <div class="row">
                              <h5 class="my-4 mt-5 text-success fw-bold">Parent's Information</h5>
                            </div>

                            <div class="row">
                              <div class="col-md-4 ps-md-4 pe-md-4 ps-sm-0 pe-md-0">
                                <label class="ms-2 mb-1">Father's Name</label>
                                <input class="form-control text-muted mb-3" type="text" name="father_name">

                                <label class="ms-2 mb-1">Emergency Contact No.</label>
                                <input class="form-control text-muted mb-3" type="text" name="eme_contact">
                              </div>

                              <div class="col-md-4">
                                <label class="ms-2 mb-1">Mothers's Name</label>
                                <input class="form-control text-muted mb-3" type="text" name="mother_name">

                                <label class="ms-2 mb-1">Guardian's Relation</label>
                                <input class="form-control text-muted mb-3" type="text" name="guardian_relation">
                              </div>

                              <div class="col-md-4">
                                <label class="ms-2 mb-1">Guardian's Name</label>
                                <input class="form-control text-muted mb-3" type="text" name="guardian_name">
                              </div>
                            </div>              
                          </div>
                        </div>

                        <div class="modal-footer">
                          <button type="submit" class="btn btn-success" name="register">Register Student</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>

            <!-- Main Table -->
            <div class="row">
              <div class="table-responsive" id="student_table">
                <table class="table table-striped mt-4">
                  <thead class="text-muted">
                    <tr>
                      <th class="text-center" scope="col">Photo</th>
                      <th scope="col">LRN</th>
                      <th scope="col">Name</th>
                      <th scope="col" class="text-center">Gender</th>
                      <th scope="col" class="text-center">Year Level</th>
                      <th scope="col" class="text-center">Section</th>
                      <th scope="col" class="text-center">Action</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
                      $students = mysqli_query($config, "SELECT * FROM student_info");

                      $section = mysqli_query($config, "SELECT * FROM sections, student_sections WHERE (sections.section_code = student_sections.section_code)");

                      $year = mysqli_query($config, "SELECT * FROM year_level, student_sections WHERE (year_level.year_code = student_sections.year_code)");

                      while($data = mysqli_fetch_array($students) AND $sec = mysqli_fetch_array($section) AND $yr = mysqli_fetch_array($year)) {
                        
                    ?>
                    <tr>
                      <td class="text-center p-3"> <?php echo '<img class="img-fluid rounded-circle" src="data:image/jpg;charset=utf8;base64,'.base64_encode($data['student_picture']).'"  width="25px">'; ?> </td>

                      <td class="p-3 ps-2"><?php echo $data['student_lrn']; ?></td>

                      <td class="p-3 ps-2"><?php echo $data['first_name']; echo " ";
                          echo $data['last_name']; ?> </td>

                      <td class="p-3 text-center"><?php echo $data['student_gender']; ?> </td>

                      <td class="p-3 text-center"><?php echo $yr['year_name']; ?></td>

                      <td class="p-3 text-center"><?php echo $sec['section_name']; ?></td>

                      <td class="text-center p-3">
                        <div class="col-12">
                          <a class="text-decoration-none text-secondary me-2 view-student" href="#" data-bs-toggle="modal" data-bs-target="#viewStudent">
                            <i class="fa-solid fa-eye"></i>
                          </a>

                          <a class="text-decoration-none text-success me-2" href="#">
                            <i class="fa-solid fa-pen"></i>
                          </a>

                          <a class="text-decoration-none text-danger" href="#">
                            <i class="fa-solid fa-trash"></i>
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

    </div>
  </div>
</div>

<!-- View Admin/Faculty Modal -->
<div class="modal fade" id="viewModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">View Information</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
      <div class="modal-body p-md-4 p-sm-0">
        <div class="container-fluid">
          <div class="row">
            <input type="hidden" name="view_id" id="view_id">
            <h5 class="mb-4 text-success fw-bold">Personal Information</h5>
          </div>

          <div class="row">
            <div class="col-md-4 ps-md-4 pe-md-4 ps-sm-0 pe-md-0">
              <label class="ms-2 mb-1">First Name</label>
              <input class="form-control mb-3" type="text" name="view_first" id="view_first" readonly>

              <label class="ms-2 mb-1">Gender</label>
              <input class="form-control mb-3" name="view_gender" id="view_gender" readonly>

              <label class="ms-2 mb-1">Religion</label>
              <input class="form-control mb-3" name="view_religion" id="view_religion" readonly>

              <label class="ms-2 mb-1">Address</label>
              <input class="form-control mb-3" type="text" name="view_address" id="view_address" readonly>
            </div>

            <div class="col-md-4">
              <label class="ms-2 mb-1">Middle Name</label>
              <input class="form-control mb-3" type="text" name="view_middle" id="view_middle" readonly>

              <label class="ms-2 mb-1">Date of Birth</label>
              <input class="form-control mb-3" type="date" name="view_bday" id="view_bday" readonly>

              <label class="ms-2 mb-1">Civil Status</label>
              <input class="form-control mb-3" name="view_civil" id="view_civil" readonly>

              <label class="ms-2 mb-1">Contact Number</label>
              <input class="form-control mb-3" type="text" name="view_contact" id="view_contact" readonly>
            </div>

            <div class="col-md-4">
              <label class="ms-2 mb-1">Last Name</label>
              <input class="form-control mb-3" type="text" name="view_last" id="view_last" readonly>

              <label class="ms-2 mb-1">Place of Birth</label>
              <input class="form-control mb-3" type="text" name="view_pob" id="view_pob" readonly>

              <label class="ms-2 mb-1">Nationality</label>
              <input class="form-control mb-3" type="text" name="view_nationality" id="view_nationality" readonly>

              <label class="ms-2 mb-1">Email Address</label>
              <input class="form-control mb-3" type="text" name="view_email" id="view_email" readonly>
            </div>
          </div>

        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Edit Admin/Faculty Modal -->
<form action="../php/update-faculty.php" method="post">
  <div class="modal fade" id="editAdmin" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Edit Information</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
       
        <div class="modal-body p-md-4 p-sm-0">
          <div class="container-fluid">
            <div class="row">
              <input type="hidden" name="edit_id" id="edit_id">
              <h5 class="mb-4 text-success fw-bold">Admin Information</h5>
            </div>

            <div class="row">
              <div class="col-md-4 ps-md-4 pe-md-4 ps-sm-0 pe-md-0">
                <label class="ms-2 mb-1">First Name</label>
                <input class="form-control mb-3" type="text" name="edit_first" id="edit_first" required>

                <label class="ms-2 mb-1">Gender</label>
                <select class="form-select mb-3" name="edit_gender" id="edit_gender">
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>

                <label class="ms-2 mb-1">Religion</label>
                <select class="form-select mb-3" name="edit_religion" id="edit_religion">
                  <option value="Catholic">Catholic</option>
                  <option value="Other Christians">Other Christians (Aglipayan, Born Again, etc.)</option>
                  <option value="Protestant">Protestant</option>
                  <option value="Islam">Islam</option>
                  <option value="Tribal Religion">Tribal Religion</option>
                  <option value="None">None</option>
                </select>

                <label class="ms-2 mb-1">Address</label>
                <input class="form-control mb-3" type="text" name="edit_address" id="edit_address" required>

                <label class="ms-2 mb-1">Student Photo (2x2)</label>
                <input class="form-control" type="file" id="student_photo">
              </div>

              <div class="col-md-4">
                <label class="ms-2 mb-1">Middle Name</label>
                <input class="form-control mb-3" type="text" name="edit_middle" id="edit_middle">

                <label class="ms-2 mb-1">Date of Birth</label>
                <input class="form-control mb-3" type="date" name="edit_bday" id="edit_bday">

                <label class="ms-2 mb-1">Civil Status</label>
                <select class="form-select mb-3" name="edit_civil" id="edit_civil">
                  <option value="Single">Single</option>
                  <option value="Married">Married</option>
                </select>

                <label class="ms-2 mb-1">Contact Number</label>
                <input class="form-control mb-3" type="text" name="edit_contact" id="edit_contact" required>
              </div>

              <div class="col-md-4">
                <label class="ms-2 mb-1">Last Name</label>
                <input class="form-control mb-3" type="text" name="edit_last" id="edit_last" required>

                <label class="ms-2 mb-1">Place of Birth</label>
                <input class="form-control mb-3" type="text" name="edit_pob" id="edit_pob" required>

                <label class="ms-2 mb-1">Nationality</label>
                <input class="form-control mb-3" type="text" name="edit_nationality" id="edit_nationality" required>

                <label class="ms-2 mb-1">Email Address</label>
                <input class="form-control mb-3" type="text" name="edit_email" id="edit_email" required>
              </div>
            </div>

          </div>
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-success" name="update">Update Information</button>
        </div>
      </div>
    </div>
  </div>
</form>

<!-- Delete Admin/Faculty Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="../php/delete-faculty.php" method="post">
        <div class="modal-body">
          <input type="hidden" name="delete_id" id="delete_id">
          Do you want to delete this account?
        </div>

        <div class="modal-footer">
            <input type="button" class="btn btn-danger" data-bs-dismiss="modal" value="No">
            <input type="submit" name="delete" class="btn btn-success" value="Yes">
        </div>
      </form>
    </div>
  </div>
</div>

<!-- View Student Modal -->
<div class="modal fade" id="viewStudent" tabindex="-1" aria-labelledby="addUserModal" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addUserModal">Add Student Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
      <div class="modal-body p-md-4 p-sm-0">
        <div class="container-fluid">
          <div class="row">
            <h5 class="mb-4 text-success fw-bold">Student Information</h5>
          </div>

          <div class="row">
            <div class="col-md-4 ps-md-4 pe-md-4 ps-sm-0 pe-md-0">
              <label class="ms-2 mb-1">First Name</label>
              <input class="form-control text-muted mb-3" type="text" name="student_first" id="student_first" required>

              <label class="ms-2 mb-1">Gender</label>
              <select class="form-select text-muted mb-3" name="student_gender" id="student_gender">
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>

              <label class="ms-2 mb-1">Religion</label>
              <select class="form-select text-muted mb-3" name="student_religion" id="student_religion">
                <option value="Catholic">Catholic</option>
                <option value="Other Christians">Other Christians (Aglipayan, Born Again, etc.)</option>
                <option value="Protestant">Protestant</option>
                <option value="Islam">Islam</option>
                <option value="Tribal Religion">Tribal Religion</option>
                <option value="None">None</option>
              </select>

              <label class="ms-2 mb-1">Address</label>
              <input class="form-control text-muted mb-3" type="text" name="student_address" id="student_address" required>
            </div>

            <div class="col-md-4">
              <label class="ms-2 mb-1">Middle Name</label>
              <input class="form-control text-muted mb-3" type="text" name="student_middle" id="student_middle">

              <label class="ms-2 mb-1">Date of Birth</label>
              <input class="form-control text-muted mb-3" type="date" name="student_bday" id="student_bday">

              <label class="ms-2 mb-1">Civil Status</label>
              <select class="form-select text-muted mb-3" name="student_civil" id="student_civil">
                <option value="Single">Single</option>
                <option value="Married">Married</option>
              </select>

              <label class="ms-2 mb-1">Contact Number</label>
              <input class="form-control text-muted mb-3" type="text" name="student_contact" id="student_contact" required>
            </div>

            <div class="col-md-4">
              <label class="ms-2 mb-1">Last Name</label>
              <input class="form-control text-muted mb-3" type="text" name="student_last" id="student_last" required>

              <label class="ms-2 mb-1">Place of Birth</label>
              <input class="form-control text-muted mb-3" type="text" name="student_pob" id="student_pob" required>

              <label class="ms-2 mb-1">Nationality</label>
              <input class="form-control text-muted mb-3" type="text" name="student_nationality" id="student_nationality" required>

              <label class="ms-2 mb-1">Email Address</label>
              <input class="form-control text-muted mb-3" type="text" name="student_email" id="student_email" required>
            </div>
          </div>

          <div class="row">
            <h5 class="my-4 mt-5 text-success fw-bold">Parent's Information</h5>
          </div>

          <div class="row">
            <div class="col-md-4 ps-md-4 pe-md-4 ps-sm-0 pe-md-0">
              <label class="ms-2 mb-1">Father's Name</label>
              <input class="form-control text-muted mb-3" type="text" name="father_name">

              <label class="ms-2 mb-1">Emergency Contact No.</label>
              <input class="form-control text-muted mb-3" type="text" name="eme_contact">
            </div>

            <div class="col-md-4">
              <label class="ms-2 mb-1">Mothers's Name</label>
              <input class="form-control text-muted mb-3" type="text" name="mother_name">

              <label class="ms-2 mb-1">Guardian's Relation</label>
              <input class="form-control text-muted mb-3" type="text" name="guardian_relation">
            </div>

            <div class="col-md-4">
              <label class="ms-2 mb-1">Guardian's Name</label>
              <input class="form-control text-muted mb-3" type="text" name="guardian_name">
            </div>
          </div>              
        </div>
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-success" name="register">Register Student</button>
      </div>
    </div>
  </div>
</div>

<!-- Footer -->
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- View Admin/Faculty -->
<script type="text/javascript">
  $(document).ready(function(){
    $('.view-button').on('click', function(){

      $('#viewModal').modal('show');

      $tr = $(this).closest('tr');

      var data =  $tr.children("td").map(function(){
        return $(this).text();
      }).get();

      console.log(data);

      $('#view_id').val(data[0]);
      $('#view_first').val(data[2]);
      $('#view_middle').val(data[3]);
      $('#view_last').val(data[4]);
      $('#view_gender').val(data[5]);
      $('#view_civil').val(data[6]);
      $('#view_nationality').val(data[7]);
      $('#view_bday').val(data[8]);
      $('#view_pob').val(data[9]);
      $('#view_religion').val(data[10]);
      $('#view_address').val(data[11]);
      $('#view_contact').val(data[12]); 
      $('#view_email').val(data[13]);
    })
  });
</script>

<!-- Edit Admin/Faculty -->
<script type="text/javascript">
  $(document).ready(function(){
    $('.edit-button').on('click', function(){

      $('#editAdmin').modal('show');

      $tr = $(this).closest('tr');

      var data =  $tr.children("td").map(function(){
        return $(this).text();
      }).get();

      console.log(data);

      $('#edit_id').val(data[0]);
      $('#edit_first').val(data[2]);
      $('#edit_middle').val(data[3]);
      $('#edit_last').val(data[4]);
      $('#edit_gender').val(data[5]);
      $('#edit_civil').val(data[6]);
      $('#edit_nationality').val(data[7]);
      $('#edit_bday').val(data[8]);
      $('#edit_pob').val(data[9]);
      $('#edit_religion').val(data[10]);
      $('#edit_address').val(data[11]);
      $('#edit_contact').val(data[12]); 
      $('#edit_email').val(data[13]);
    })
  });
</script>

<!-- Delete Admin/Faculty -->
<script type="text/javascript">
  $(document).ready(function(){
    $('.delete-button').on('click', function(){

      $('#deleteModal').modal('show');

      $tr = $(this).closest('tr');

      var data =  $tr.children("td").map(function(){
        return $(this).text();
      }).get();

      console.log(data);

      $('#delete_id').val(data[0]);
    })
  });
</script>

<!-- View Student -->
<script type="text/javascript">
  $(document).ready(function(){
    $('.view-student').on('click', function(){

      $('#viewStudent').modal('show');

      $tr = $(this).closest('tr');

      var data =  $tr.children("td").map(function(){
        return $(this).text();
      }).get();

      console.log(data);

      $('#student_id').val(data[2]);
      $('#student_first').val(data[3]);
      $('#student_middle').val(data[4]);
      $('#student_last').val(data[4]);
      $('#student_gender').val(data[5]);
      $('#student_civil').val(data[6]);
      $('#student_nationality').val(data[7]);
      $('#student_bday').val(data[8]);
      $('#student_pob').val(data[9]);
      $('#student_religion').val(data[10]);
      $('#student_address').val(data[11]);
      $('#student_contact').val(data[12]); 
      $('#student_email').val(data[13]);
    })
  });
</script>

<!-- Admin Search -->
<script>
  $(document).ready(function(){
    $("#admin_search").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#admin_table tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
</script>

<!-- Faculty Search -->
<script>
  $(document).ready(function(){
    $("#faculty_search").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#faculty_table tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
</script>

<!-- Student Search -->
<script>
  $(document).ready(function(){
    $("#student_search").on("keyup", function() {
      var value = $(this).val().toLowerCase();
      $("#student_table tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
      });
    });
  });
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</html>