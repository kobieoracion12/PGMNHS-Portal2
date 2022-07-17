<?php
  include_once("faculty-data.php");
  include_once("../php/database.php");
  include("../php/fetch-section.php");
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
          <a class="nav-link" href="faculty-class.php"><i class="fa-solid fa-chalkboard fa-sm me-1"></i></i>Classes</a>
          <a class="nav-link" href="faculty-schedule.php"><i class="fa-solid fa-calendar fa-sm me-1"></i>Schedule</a>
          <a class="nav-link" href="faculty-subjects.php"><i class="fa-solid fa-book fa-sm me-1"></i>Subjects</a>
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
          <input class="form-control me-2" type="text" id="search" placeholder="Search..." onkeyup="myFunction();">

          <select class="form-select me-2">
            <option selected>Sort by Section</option>
            <option></option>
          </select>

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
                <th scope="col" class="text-center">Gender</th>
                <th scope="col" class="text-center">Year Level</th>
                <th scope="col" class="text-center">Section</th>
                <th scope="col" class="text-center">Action</th>
              </tr>
            </thead>

            <tbody>
              <?php
                $students = mysqli_query($config, "SELECT * FROM student_info, student_accounts WHERE (student_info.student_lrn = student_accounts.student_lrn)");


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
                    <a class="text-decoration-none text-secondary me-2" href="#">
                      <i class="fa-solid fa-eye"></i>
                    </a>

                    <a class="text-decoration-none text-success me-2" href="#">
                      <i class="fa-solid fa-pen"></i>
                    </a>

                    <a class="text-decoration-none text-danger delete-button" href="#" data-bs-toggle="modal" data-bs-target="#deletemodal">
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

<script>
$(document).ready(function(){
  $("#search").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#subject_table tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</html>