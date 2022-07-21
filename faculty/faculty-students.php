<?php
  include_once("../php/fetch-data.php");
  include_once("../php/database.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Students - Pedro Guevarra Memorial National Highschool</title>
  <link rel="icon" href="../assets/img/pgmnhs-logo.ico">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../css/fontawesome.css">
  <link rel="stylesheet" type="text/css" href="../css/regular.css">
  <link rel="stylesheet" type="text/css" href="../css/brands.css">
  <link rel="stylesheet" type="text/css" href="../css/solid.css">
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
          <a class="nav-link" href="index.php"><i class="fa-solid fa-home fa-sm me-1"></i>Home</a>
          <a class="nav-link text-success" href="faculty-students.php"><i class="fa-solid fa-users fa-sm me-1"></i>Students</a>
          <a class="nav-link" href="faculty-grading.php?sy=0&yl=0&sec=0&gp=0"><i class="fa-solid fa-square-poll-vertical me-1"></i>Grading</a>
          <a class="nav-link" href="faculty-class.php"><i class="fa-solid fa-chalkboard fa-sm me-1"></i></i>Classes</a>
          <a class="nav-link" href="faculty-schedule.php"><i class="fa-solid fa-calendar fa-sm me-1"></i>Schedule</a>
          <a class="nav-link" href="faculty-subjects.php"><i class="fa-solid fa-book fa-sm me-1"></i>Subjects</a>
        </div>

        <div class="col-md-6 col-sm-12 navbar-nav">
          <!-- Profile -->
          <li class="nav-item dropdown px-4 ms-md-auto ms-sm-0">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              <?php
                $no = $_SESSION["control_no"];
                $profile = mysqli_query($config, "SELECT profile_picture from account_info WHERE control_no = $no");

                while($data = mysqli_fetch_array($profile)) {
                  echo '<img class="img-fluid rounded-circle" src="data:image/jpg;charset=utf8;base64,'.base64_encode($data['profile_picture']).'"  width="22px">';
                }
              ?>

            </a>
            
            <ul class="dropdown-menu dropdown-menu-end p-2" aria-labelledby="navbarDropdownMenuLink">
              <li><a class="dropdown-item" href="student-profile.php">View Profile</a></li>
              <li><a class="dropdown-item" href="../php/change-password.php">Change Password</a></li>
              <li><a class="dropdown-item" href="../php/settings.php">Settings</a></li>
              <li><hr class="text-muted dropdown-divider"></li>
              <li><a class="dropdown-item text-danger" href="faculty-logout.php">Logout</a></li>
            </ul>
          </li>
        </div>
      </div>
    </div>
  </nav>

  <hr class="text-muted">
</header>

<body>

<div class="col mt-3 p-5 pt-0">

  <!-- All Students -->
  <div class="row">
    <div class="col-12 p-md-5 pt-md-3 pb-md-0 p-sm-0 pt-sm-0">
      
      <!-- Table Header -->
      <div class="row">
        <div class="col-md-4 col-sm-12">
          <h4 class="ms-2">All Students</h4>
        </div>

        <div class="col-md-8 col-sm-12 d-flex justify-content-end align-items-end">
          <input class="form-control me-2 w-50" type="text" id="search" placeholder="Search...">

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

      <!-- Alert Box -->
      <?php
        if(isset($_GET['success'])) {
          echo '
            <div class="alert alert-success alert-dismissible fade show text-center mt-3 mb-0" role="alert">
              <strong>Student registered successfully</strong>
              `
            </div>
          ';
        }

        else if(isset($_GET['section-error']) OR isset($_GET['account-error']) OR isset($_GET['info-error']) OR isset($_GET['failed'])) {
          echo '
            <div class="alert alert-danger alert-dismissible fade show text-center mt-3 mb-0" role="alert">
              <strong>Student registration failed</strong>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          ';
        }
      ?>

      <!-- Main Table -->
      <div class="row">
        <div class="table-responsive">
          <table class="table table-striped mt-4" id="student_table">
            <thead class="text-muted">
              <tr>
                <th class="text-center" scope="col">Photo</th>
                <th scope="col">LRN</th>
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
                <th scope="col" hidden>Mother Name</th>
                <th scope="col" hidden>Father Name</th>
                <th scope="col" hidden>Guardian Name</th>
                <th scope="col" hidden>Guardian Number</th>
                <th scope="col" class="text-center">Gender</th>
                <th scope="col" class="text-center">Year Level</th>
                <th scope="col" class="text-center">Section</th>
                <th scope="col" class="text-center">Action</th>
              </tr>
            </thead>

            <tbody>
              <?php
                $no = $_SESSION['control_no'];

                $fetch_students = mysqli_query($config, "SELECT * FROM account_info WHERE acc_priv = 'Student'");

                $fetch_year = mysqli_query($config, "SELECT * FROM account_info, year_level WHERE (account_info.year_code = year_level.year_code)");

                $fetch_section = mysqli_query($config, "SELECT * FROM account_info, sections WHERE (account_info.section_code = sections.section_code)");

                while($students = mysqli_fetch_array($fetch_students) AND $year = mysqli_fetch_array($fetch_year) AND $section = mysqli_fetch_array($fetch_section)) {
              ?>

              <tr>
                <td class="text-center p-3"> <?php echo '<img class="img-fluid rounded-circle" src="data:image/jpg;charset=utf8;base64,'.base64_encode($students['profile_picture']).'"  width="25px">'; ?> </td>

                <td class="p-3 ps-2"><?php echo $students['control_no']; ?></td>

                <td class="p-3 ps-2"><?php echo $students['first_name']; echo " ";
                    echo $students['last_name']; ?> </td>

                <td class="p-3 text-center" hidden><?php echo $students['first_name']; ?></td>

                <td class="p-3 text-center" hidden><?php echo $students['middle_name']; ?></td>

                <td class="p-3 text-center" hidden><?php echo $students['last_name']; ?></td>

                <td class="p-3 text-center" hidden><?php echo $students['gender']; ?></td>

                <td class="p-3 text-center" hidden><?php echo $students['civil_status']; ?></td>

                <td class="p-3 text-center" hidden><?php echo $students['nationality']; ?></td>

                <td class="p-3 text-center" hidden><?php echo $students['birth_date']; ?></td>

                <td class="p-3 text-center" hidden><?php echo $students['birth_place']; ?></td>

                <td class="p-3 text-center" hidden><?php echo $students['religion']; ?></td>

                <td class="p-3 text-center" hidden><?php echo $students['address']; ?></td>

                <td class="p-3 text-center" hidden><?php echo $students['contact_no']; ?></td>

                <td class="p-3 text-center" hidden><?php echo $students['email_address']; ?></td>

                <td class="p-3 text-center" hidden><?php echo $students['mother_name']; ?></td>

                <td class="p-3 text-center" hidden><?php echo $students['father_name']; ?></td>

                <td class="p-3 text-center" hidden><?php echo $students['guardian_name']; ?></td>

                <td class="p-3 text-center" hidden><?php echo $students['guardian_relation']; ?></td>

                <td class="p-3 text-center" hidden><?php echo $students['guardian_number']; ?></td>

                <td class="p-3 text-center"><?php echo $students['gender']; ?></td>

                <td class="p-3 text-center"><?php echo $year['year_name']; ?></td>

                <td class="p-3 text-center"><?php echo $section['section_name']; ?></td>

                <td class="text-center p-3">
                  <div class="col-12">
                    <a class="text-decoration-none text-secondary view-button me-2" href="#" data-bs-toggle="modal" data-bs-target="#viewmodal">
                      <i class="fa-solid fa-eye"></i>
                    </a>

                    <a class="text-decoration-none text-primary me-2 edit-button" href="#" data-bs-toggle="modal" data-bs-target="#editmodal">
                      <i class="fa-solid fa-pen"></i>
                    </a>

                    <a class="text-decoration-none text-danger delete-button me-2" href="#" data-bs-toggle="modal" data-bs-target="#deletemodal">
                      <i class="fa-solid fa-trash"></i>
                    </a>

                    <a class="text-decoration-none text-success grading-button" href="#" data-bs-toggle="modal" data-bs-target="#gradingmodal">
                     <i class="fa-solid fa-graduation-cap"></i>
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

<!-- View Student Modal -->
<div class="modal fade" id="viewmodal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">View Student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
      <div class="modal-body p-md-4 p-sm-0">
        <div class="container-fluid">
          <div class="row">
            <h5 class="mb-4 text-success fw-bold">Student Information</h5>
          </div>

          <input type="hidden" name="view_id" id="view_id">

          <div class="row">
            <div class="col-md-4 ps-md-4 pe-md-4 ps-sm-0 pe-md-0">
              <label class="ms-2 mb-1">First Name</label>
              <input class="form-control text-muted mb-3" type="text" name="view_first" id="view_first" readonly>

              <label class="ms-2 mb-1">Gender</label>
              <input class="form-control text-muted mb-3" name="view_gender" id="view_gender" readonly>

              <label class="ms-2 mb-1">Religion</label>
              <input class="form-control text-muted mb-3" name="view_religion" id="view_religion" readonly>

              <label class="ms-2 mb-1">Address</label>
              <input class="form-control text-muted mb-3" type="text" name="view_address" id="view_address" readonly>
            </div>

            <div class="col-md-4">
              <label class="ms-2 mb-1">Middle Name</label>
              <input class="form-control text-muted mb-3" type="text" name="view_middle" id="view_middle" readonly>

              <label class="ms-2 mb-1">Date of Birth</label>
              <input class="form-control text-muted mb-3" type="date" name="view_bday" id="view_bday" readonly>

              <label class="ms-2 mb-1">Civil Status</label>
              <input class="form-control text-muted mb-3" name="view_civil" id="view_civil" readonly>

              <label class="ms-2 mb-1">Contact Number</label>
              <input class="form-control text-muted mb-3" type="text" name="view_contact" id="view_contact" readonly>
            </div>

            <div class="col-md-4">
              <label class="ms-2 mb-1">Last Name</label>
              <input class="form-control text-muted mb-3" type="text" name="view_last" id="view_last" readonly>

              <label class="ms-2 mb-1">Place of Birth</label>
              <input class="form-control text-muted mb-3" type="text" name="view_pob" id="view_pob" readonly>

              <label class="ms-2 mb-1">Nationality</label>
              <input class="form-control text-muted mb-3" type="text" name="view_nationality" id="view_nationality" readonly>

              <label class="ms-2 mb-1">Email Address</label>
              <input class="form-control text-muted mb-3" type="text" name="view_email" id="view_email" readonly>
            </div>
          </div>

          <div class="row">
            <h5 class="my-4 mt-5 text-success fw-bold">School Information</h5>
          </div>

          <div class="row">
            <div class="col-md-4 ps-md-4 pe-md-4 ps-sm-0 pe-md-0">
              <label class="ms-2 mb-1">Current Year Level</label>
              <input class="form-control text-muted mb-3" type="text" name="view_year" id="view_year" readonly>
            </div>

            <div class="col-md-4">
              <label class="ms-2 mb-1">Current Section</label>
              <input class="form-control text-muted mb-3" type="text" name="view_section" id="view_section" readonly>
            </div>
          </div> 

          <div class="row">
            <h5 class="my-4 mt-5 text-success fw-bold">Parent's Information</h5>
          </div>

          <div class="row">
            <div class="col-md-4 ps-md-4 pe-md-4 ps-sm-0 pe-md-0">
              <label class="ms-2 mb-1">Father's Name</label>
              <input class="form-control text-muted mb-3" type="text" name="view_father" id="view_father" readonly>

              <label class="ms-2 mb-1">Emergency Contact No.</label>
              <input class="form-control text-muted mb-3" type="text" name="view_gnumber" id="view_gnumber" readonly>
            </div>

            <div class="col-md-4">
              <label class="ms-2 mb-1">Mothers's Name</label>
              <input class="form-control text-muted mb-3" type="text" name="view_mother" id="view_mother" readonly>

              <label class="ms-2 mb-1">Guardian's Relation</label>
              <input class="form-control text-muted mb-3" type="text" name="view_relation" id="view_relation" readonly>
            </div>

            <div class="col-md-4">
              <label class="ms-2 mb-1">Guardian's Name</label>
              <input class="form-control text-muted mb-3" type="text" name="view_guardian" id="view_guardian" readonly>
            </div>
          </div>              
        </div>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Edit Student Modal -->
<div class="modal fade" id="editmodal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edit Student</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
      <div class="modal-body p-md-4 p-sm-0">
        <form action="#" method="post">
          <div class="container-fluid">
            <div class="row">
              <h5 class="mb-4 text-success fw-bold">Student Information</h5>
            </div>

            <input type="hidden" name="edit_id" id="edit_id">

            <div class="row">
              <div class="col-md-4 ps-md-4 pe-md-4 ps-sm-0 pe-md-0">
                <label class="ms-2 mb-1">First Name</label>
                <input class="form-control text-muted mb-3" type="text" name="edit_first" id="edit_first" required>

                <label class="ms-2 mb-1">Gender</label>
                <select class="form-select text-muted mb-3" name="edit_gender" id="edit_gender">
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                </select>

                <label class="ms-2 mb-1">Religion</label>
                <select class="form-select text-muted mb-3" name="edit_religion" id="edit_religion">
                  <option value="Catholic">Catholic</option>
                  <option value="Other Christians">Other Christians (Aglipayan, Born Again, etc.)</option>
                  <option value="Protestant">Protestant</option>
                  <option value="Islam">Islam</option>
                  <option value="Tribal Religion">Tribal Religion</option>
                  <option value="None">None</option>
                </select>

                <label class="ms-2 mb-1">Address</label>
                <input class="form-control text-muted mb-3" type="text" name="edit_address" id="edit_address" required>
              </div>

              <div class="col-md-4">
                <label class="ms-2 mb-1">Middle Name</label>
                <input class="form-control text-muted mb-3" type="text" name="edit_middle" id="edit_middle">

                <label class="ms-2 mb-1">Date of Birth</label>
                <input class="form-control text-muted mb-3" type="date" name="edit_bday" id="edit_bday">

                <label class="ms-2 mb-1">Civil Status</label>
                <select class="form-select text-muted mb-3" name="edit_civil" id="edit_civil">
                  <option value="Single">Single</option>
                  <option value="Married">Married</option>
                </select>

                <label class="ms-2 mb-1">Contact Number</label>
                <input class="form-control text-muted mb-3" type="text" name="edit_contact" id="edit_contact" required>
              </div>

              <div class="col-md-4">
                <label class="ms-2 mb-1">Last Name</label>
                <input class="form-control text-muted mb-3" type="text" name="edit_last" id="edit_last" required>

                <label class="ms-2 mb-1">Place of Birth</label>
                <input class="form-control text-muted mb-3" type="text" name="edit_pob" id="edit_pob" required>

                <label class="ms-2 mb-1">Nationality</label>
                <input class="form-control text-muted mb-3" type="text" name="edit_nationality" id="edit_nationality" required>

                <label class="ms-2 mb-1">Email Address</label>
                <input class="form-control text-muted mb-3" type="text" name="edit_email" id="edit_email" required>
              </div>
            </div>

            <div class="row">
              <h5 class="my-4 mt-5 text-success fw-bold">School Information</h5>
            </div>

            <div class="row">
              <div class="col-md-4 ps-md-4 pe-md-4 ps-sm-0 pe-md-0">
                <label class="ms-2 mb-1">Current Year Level</label>
                <input class="form-control text-muted mb-3" type="text" name="edit_year" id="edit_year">
              </div>

              <div class="col-md-4">
                <label class="ms-2 mb-1">Current Section</label>
                <input class="form-control text-muted mb-3" type="text" name="edit_section" id="edit_section">
              </div>
            </div> 

            <div class="row">
              <h5 class="my-4 mt-5 text-success fw-bold">Parent's Information</h5>
            </div>

            <iv class="row">
              <div class="col-md-4 ps-md-4 pe-md-4 ps-sm-0 pe-md-0">
                <label class="ms-2 mb-1">Father's Name</label>
                <input class="form-control text-muted mb-3" type="text" name="edit_father" id="edit_father">

                <label class="ms-2 mb-1">Emergency Contact No.</label>
                <input class="form-control text-muted mb-3" type="text" name="edit_gnumber" id="edit_gnumber">
              </div>

              <div class="col-md-4">
                <label class="ms-2 mb-1">Mothers's Name</label>
                <input class="form-control text-muted mb-3" type="text" name="edit_mother" id="edit_mother">

                <label class="ms-2 mb-1">Guardian's Relation</label>
                <input class="form-control text-muted mb-3" type="text" name="edit_relation" id="edit_relation">
              </div>

              <div class="col-md-4">
                <label class="ms-2 mb-1">Guardian's Name</label>
                <input class="form-control text-muted mb-3" type="text" name="edit_guardian" id="edit_guardian">
              </div>
            </div>              
          </div>
        </form
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-success">Update Information</button>
      </div>
    </div>
  </div>
</div>

<!-- Grading Modal Main -->
<div class="modal fade" id="gradingmodal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Grading Form</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
     
      <div class="modal-body p-md-4 p-sm-0">
        <form action="#" method="post">
          <div class="container-fluid">

            <div class="row mx-1 justify-content-end">
              <input type="hidden" id="grade_id">

              <!-- Sort -->
              <form action="faculty-student.php" method="get">
                <div class="row d-flex justify-content-end mt-3">
                  <select class="form-select w-25 me-2" name="sy" required>
                    <option value="none" selected>Select School Year</option>

                    <?php
                        $sql_sy =  "SELECT sy_code, sy_desc FROM school_year";
                        
                        $sy_results = $config -> query($sql_sy);

                        if($sy_results -> num_rows > 0) {
                          $sy = mysqli_fetch_all($sy_results, MYSQLI_ASSOC);
                        }

                        foreach ($sy as $sy) {
                    ?>

                    <option value=<?php echo $sy['sy_code'] ?>><?php echo $sy['sy_desc'] ?></option>

                    <?php } ?>
                  </select>

                  <select class="form-select w-25 me-2" name="gp" required>
                    <option value="none" selected>Select Grading Period</option>

                    <?php
                        $sql_grading =  "SELECT grading_code, grading_desc FROM grading_period";
                        
                        $grading_results = $config -> query($sql_grading);

                        if($grading_results -> num_rows > 0) {
                          $grading = mysqli_fetch_all($grading_results, MYSQLI_ASSOC);
                        }

                        foreach ($grading as $grading) {
                    ?>

                    <option value=<?php echo $grading['grading_code'] ?>><?php echo $grading['grading_desc'] ?></option>

                    <?php } ?>
                  </select>

                  <button type="submit" class="btn btn-primary" style="width:10%">Filter</button>
                </div>  
              </form>
            </div>

            <div class="row mt-4">
              <div class="table-responsive">
              <table class="table table-bordered align-middle border-end">
                <thead>
                  <tr class="text-muted">
                    <th scope="col">Learning Areas</th>
                    <th class="text-center" scope="col">Grade</th>
                    <th class="text-center" scope="col">Remarks</th>
                    <th class="text-center" scope="col">Action</th>
                  </tr>
                </thead>

                <?php
                  $fetch_subjects = mysqli_query($config, "SELECT * FROM student_grades, subjects WHERE (student_grades.subject_code = subjects.subject_code)");

                  $fetch_grade = mysqli_query($config, "SELECT * FROM student_grades WHERE grading_code = 'PGMNHS-GP-05'");

                  $fetch_remarks = mysqli_query($config, "SELECT remarks FROM student_grades");

                  while($subject = mysqli_fetch_array($fetch_subjects) AND $grades = mysqli_fetch_array($fetch_grade) AND $remarks = mysqli_fetch_array($fetch_remarks)) {

                ?>

                <tbody>
                  <tr>
                    <td class="p-2 ps-3 fw-bold"><?php echo $subject['subject_desc'] ?></td>

                    <td class="p-2 text-center"><?php echo $grades['completion_grade'] ?></td>

                    <?php 
                      $remark = $remarks['remarks'];

                      if($remark == 'Passed') {
                        echo '
                          <td class="p-2 text-center fw-bold text-success">Passed</td>
                        ';
                      }
                      elseif($remark == 'Failed') {
                        echo '
                          <td class="p-2 text-center fw-bold text-danger">Failed</td>
                        ';
                      }
                      elseif($remark == 'Drop') {
                        echo '
                          <td class="p-2 text-center fw-bold text-secondary">Drop</td>
                        ';
                      }
                    ?>

                    <td class="p-2 text-center">
                      <a class="text-decoration-none text-success me-2" href="#" data-bs-toggle="modal" data-bs-target="#">
                        <i class="fa-solid fa-plus"></i>
                      </a>
                    </td>
                  </tr>
                </tbody>
              <?php } ?>
              </table>
            </div>
            </div>
          </div>
        </form>
      </div>

      <div class="modal-footer">
        <button type="submit" class="btn btn-success" name="submit_grade" id="submit_grade">Submit Grade</button>
      </div>
    </div>
  </div>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="deletemodal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">

      <div class="modal-header">
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="../php/delete-student.php" method="post">
        <div class="modal-body">
          <input type="hidden" name="lrn" id="lrn">
          Do you want to delete this student?
        </div>

        <div class="modal-footer">
          <input type="button" class="btn btn-danger" data-bs-dismiss="modal" value="No">
          <input type="submit" name="delete" class="btn btn-success" value="Yes">
      </div>
      
      </form>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- View Student -->
<script type="text/javascript">
  $(document).ready(function(){
    $('.view-button').on('click', function(){

      $('#viewModal').modal('show');

      $tr = $(this).closest('tr');

      var data =  $tr.children("td").map(function(){
        return $(this).text();
      }).get();

      console.log(data);

      $('#view_id').val(data[1]);
      $('#view_first').val(data[3]);
      $('#view_middle').val(data[4]);
      $('#view_last').val(data[5]);
      $('#view_gender').val(data[6]);
      $('#view_civil').val(data[7]);
      $('#view_nationality').val(data[8]);
      $('#view_bday').val(data[9]);
      $('#view_pob').val(data[10]);
      $('#view_religion').val(data[11]);
      $('#view_address').val(data[12]);
      $('#view_contact').val(data[13]); 
      $('#view_email').val(data[14]);
      $('#view_mother').val(data[15]);
      $('#view_father').val(data[16]);
      $('#view_guardian').val(data[17]);
      $('#view_relation').val(data[18]);
      $('#view_gnumber').val(data[19]);

      $('#view_year').val(data[21]);
      $('#view_section').val(data[22]);
      
    })
  });
</script>

<!-- Edit Student -->
<script type="text/javascript">
  $(document).ready(function(){
    $('.edit-button').on('click', function(){

      $('#editmodal').modal('show');

      $tr = $(this).closest('tr');

      var data =  $tr.children("td").map(function(){
        return $(this).text();
      }).get();

      console.log(data);

      $('#edit_id').val(data[1]);
      $('#edit_first').val(data[3]);
      $('#edit_middle').val(data[4]);
      $('#edit_last').val(data[5]);
      $('#edit_gender').val(data[6]);
      $('#edit_civil').val(data[7]);
      $('#edit_nationality').val(data[8]);
      $('#edit_bday').val(data[9]);
      $('#edit_pob').val(data[10]);
      $('#edit_religion').val(data[11]);
      $('#edit_address').val(data[12]);
      $('#edit_contact').val(data[13]); 
      $('#edit_email').val(data[14]);
      $('#edit_mother').val(data[15]);
      $('#edit_father').val(data[16]);
      $('#edit_guardian').val(data[17]);
      $('#edit_relation').val(data[18]);
      $('#edit_gnumber').val(data[19]);

      $('#edit_year').val(data[21]);
      $('#edit_section').val(data[22]);
      
    })
  });
</script>

<!-- Grade Modal -->
<script type="text/javascript">
  $(document).ready(function(){
    $('.grading-button').on('click', function(){

      $('#gradingmodal').modal('show');

      $tr = $(this).closest('tr');

      var data =  $tr.children("td").map(function(){
        return $(this).text();
      }).get();

      console.log(data);

      $('#grade_id').val(data[1]);
      $('#grade_first').val(data[3]);
      $('#grade_last').val(data[5]);
      $('#grade_year').val(data[21]);
      $('#grade_section').val(data[22]);

      document.getElementById('control_no').innerHTML = data[1];
      document.getElementById('student_name').innerHTML = data[3] + " " + data[5];
      document.getElementById('enrolled').innerHTML = data[21] + " - " + data[22];

``    })
  });
</script>

<!-- Delete Fetch Control No -->
<script type="text/javascript">
  $(document).ready(function(){
    $('.delete-button').on('click', function(){

      $('#deletemodal').modal('show');

      $tr = $(this).closest('tr');

      var data =  $tr.children("td").map(function(){
        return $(this).text();
      }).get();

      console.log(data);

      $('#lrn').val(data[1]);
    })
  });
</script>

<!-- Search Script -->
<script>
  $(document).ready(function(){
    $("#search").on("keyup", function() {
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