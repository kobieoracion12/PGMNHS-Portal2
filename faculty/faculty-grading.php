<?php
  include_once("../php/fetch-data.php");
  include_once("../php/database.php");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Grading - Pedro Guevarra Memorial National Highschool</title>
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
          <a class="nav-link" href="faculty-students.php?sy=0&gp=0"><i class="fa-solid fa-users fa-sm me-1"></i>Students</a>
          <a class="nav-link text-success" href="faculty-grading.php?cn=0&sn=0&select_sy=0&yl=0&sec=0&select_gp=0"><i class="fa-solid fa-square-poll-vertical me-1"></i>Grading</a>
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
  <!-- Main -->
  <div class="row p-md-4 p-sm-0">

    <!-- Filter Catalog -->
    <div class="col-md-4 col-sm-12 mb-3">
      <div class="card shadow-sm">
        <div class="card-header bg-white m-2">
          <h5>Filter Catalog</h5>
        </div>

        <div class="card-body m-2 mt-0">
          <form action="faculty-grading.php" method="get">
            <div class="row p-3 pt-0">
              <label>LRN</label>
              <input class="form-control mb-3" type="text" name="cn" placeholder="Control No">

              <label>School Year</label>
              <select class="form-select mb-3" name="select_sy">
                <option value="0" selected>Select School Year</option>
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

              <label>Grading Period</label>
              <select class="form-select mb-3" name="select_gp">
                <option value="0" selected>Select Grading Period</option>
                <?php
                  $sql_gp =  "SELECT grading_code, grading_desc FROM grading_period";
                  
                  $gp_results = $config -> query($sql_gp);

                  if($gp_results -> num_rows > 0) {
                    $gp = mysqli_fetch_all($gp_results, MYSQLI_ASSOC);
                  }

                  foreach ($gp as $gp) {
              ?>

              <option value=<?php echo $gp['grading_code'] ?>><?php echo $gp['grading_desc'] ?></option>

              <?php } ?>
              </select>

              <button class="btn btn-success mt-2" type="submit">Search Catalog</button>

            </div>

            <div class="row">
              
            </div>
          </form>
        </div>
      </div>
    </div>

    <!-- Grading Table -->
    <div class="col-md-8 col-sm-12">
      <div class="card shadow-sm">
        <div class="card-body">
          <div class="row">
            <div class="col-12 p-md-4 pt-md-3 pb-md-0 p-sm-0 pt-sm-0">
              
              <!-- Table Header -->
              <div class="row">
                <div class="col-md-12 col-sm-12 d-flex justify-content-start align-items-start ms-3">
                  <?php
                    $fetch_name = mysqli_query($config, "SELECT * FROM account_info WHERE control_no = '{$_GET['cn']}'");

                    $fetch_grade = mysqli_query($config, "SELECT * FROM grading_period WHERE grading_code = '{$_GET['select_gp']}'");

                    while($fetch_data = mysqli_fetch_array($fetch_name) AND $fetch_period = mysqli_fetch_array($fetch_grade)) {

                  ?>

                  <p><strong>Student Name: </strong>
                    <?php
                      echo $fetch_data['first_name'];
                      echo " ";
                      echo $fetch_data['last_name'];
                    ?>
                  </p>

                  <p class="ms-3"><strong>LRN: </strong><?php echo $fetch_data['control_no']; ?></p>

                  <p class="ms-3"><strong>Grading Period: </strong><?php echo $fetch_period['grading_desc']; ?></p>

                  <?php } ?>
                </div>
              </div>

              <!-- Main Table -->
              <div class="row">
                <form action="#" method="post">
                  <div class="row mt-4">
                    <div class="table-responsive">
                    <table class="table table-bordered align-middle border-end">
                      <thead>
                        <tr class="text-muted">
                          <th hidden>Encode ID</th>
                          <th scope="col">Learning Areas</th>
                          <th class="text-center" scope="col">Grade</th>
                          <th class="text-center" scope="col">Remarks</th>
                          <th class="text-center" scope="col">Action</th>
                        </tr>
                      </thead>

                      <?php
                        $fetch_subject = mysqli_query($config, "SELECT * FROM enrolled_subjects, subjects WHERE (enrolled_subjects.subject_code = subjects.subject_code) AND control_no = '{$_GET['cn']}' AND grading_code = '{$_GET['select_gp']}'");

                        $fetch_grade = mysqli_query($config, "SELECT * FROM student_grades WHERE control_no = '{$_GET['cn']}' AND grading_code = '{$_GET['select_gp']}'");

                        while($subject = mysqli_fetch_array($fetch_subject) AND $grades = mysqli_fetch_array($fetch_grade)) {

                      ?>

                      <tbody>
                        <tr>
                          <td class="p-2 ps-3 fw-bold" hidden><?php echo $grades['encode_id'] ?></td>

                          <td class="p-2 ps-3 fw-bold" hidden><?php echo $subject['subject_code'] ?></td>

                          <td class="p-2"><?php echo $subject['subject_desc'] ?></td>

                          <!-- Grades -->
                          <?php
                            $myGrades = $grades['completion_grade'];
                            
                            if($myGrades != null) {
                              echo '
                                <td class="p-2 ps-3 text-center">'.$grades['completion_grade'].'</td>
                              ';
                            }
                            else {
                              echo '
                                <td class="p-2 text-center">--</td>
                              ';
                            }
                          ?>

                          <!-- Remarks -->
                          <?php 
                            $remark = $grades['remarks'];

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
                            else {
                              echo '
                                <td class="p-2 text-center">--</td>
                              ';
                            }
                          ?>

                          <td class="p-2 text-center">
                            <a class="text-decoration-none text-success me-2 add-grade" href="#" data-bs-toggle="modal" data-bs-target="#addGrade">
                              <i class="fa-solid fa-plus"></i>
                            </a>
                          </td>
                        </tr>
                      </tbody>
                    <?php } ?>
                    </table>
                  </div>
                </form>
              </div>
            </div>
          </div>
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

<!-- Add Grades -->
<div class="modal fade" id="addGrade" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
    <form action="../php/submit-grade.php" method="post">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Grading Form</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
       
        <div class="modal-body p-md-4 p-sm-0">
          <div class="row p-3 pt-2">

            <input class="form-control w-25" type="hidden" id="subject_id" name="subject_id"> 
            <input class="form-control w-25" type="hidden" id="current_cn" name="current_cn" value="<?php echo $_GET["cn"]; ?>"> 

            <input class="form-control w-25" type="hidden" id="current_sy" name="subject_sy" value="<?php echo $_GET["select_sy"]; ?>"> 

            <input class="form-control w-25" type="hidden" id="current_gp" name="current_gp" value="<?php echo $_GET["select_gp"]; ?>">

            <div class="col-md-6 col-sm-12">
              <input class="form-control" type="text" id="subject_name" name="subject_name" readonly>
            </div>

            <div class="col-md-3 col-sm-12">
              <input class="form-control" type="text" name="subject_grade" id="subject_grade" placeholder="0">
            </div>

            <div class="col-md-3 col-sm-12">

              <input class="form-control" type="text" name="subject_remarks" id="subject_remarks" placeholder="Remarks" readonly>
            </div>
          </div>
        </div>

        <div class="modal-footer">
          <button type="submit" class="btn btn-success" name="submit_grade" id="submit_grade">Submit Grade</button>
        </div>
      </div>
    </form>
  </div>
</div>

</body>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script type="text/javascript">
  $('#subject_grade').change(function() {
    var given_grade = $('#subject_grade').val();

    if(given_grade == 0) {
      $('#subject_remarks').val("Drop");
    }
    else if(given_grade >= 1 && given_grade <= 74) {
      $('#subject_remarks').val("Failed");
    }
    else if(given_grade >= 75 && given_grade <= 99) {
      $('#subject_remarks').val("Passed");
    }
  });
</script>

<!-- View Student -->
<script type="text/javascript">
  $(document).ready(function(){
    $('.add-grade').on('click', function(){

      $('#addGrade').modal('show');

      $tr = $(this).closest('tr');

      var data =  $tr.children("td").map(function(){
        return $(this).text();
      }).get();

      console.log(data);

      $('#subject_id').val(data[0]);
      $('#subject_name').val(data[2]);

    })
  });
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"></script>
</html>