<?php
  include_once("../../php/fetch-admin.php");
  include_once("../../php/database.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <title>Home - Pedro Guevarra Memorial National Highschool</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="../../assets/img/pgmnhs-logo.ico">

        <!-- App css -->
        <link href="../../css/custom.css" rel="stylesheet" type="text/css">
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

        <!-- icons -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="loading" data-layout-mode="horizontal" data-layout-color="light" data-layout-size="fluid" data-leftbar-position="fixed">

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <div class="navbar-custom">
                <div class="container-fluid">
                     <ul class="list-unstyled topnav-menu float-end mb-0">

                        <li class="d-none d-lg-block">
                            <form class="app-search">
                                <div class="app-search-box">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search..." id="top-search">
                                        <button class="btn input-group-text" type="submit">
                                            <i class="fe-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </li>
    
                        <li class="dropdown d-inline-block d-lg-none">
                            <a class="nav-link dropdown-toggle arrow-none waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fe-search noti-icon"></i>
                            </a>
                            <div class="dropdown-menu dropdown-lg dropdown-menu-end p-0">
                                <form class="p-3">
                                    <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                </form>
                            </div>
                        </li>
            
                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                <i class="fe-bell noti-icon"></i>
                                <span class="badge bg-danger rounded-circle noti-icon-badge">9</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-lg">
    
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="m-0">
                                        <span class="float-end">
                                            <a href="" class="text-dark">
                                                <small>Clear All</small>
                                            </a>
                                        </span>Notification
                                    </h5>
                                </div>
    
                                <div class="noti-scroll" data-simplebar>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item active">
                                        <div class="notify-icon">
                                            <img src="assets/images/users/user-1.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Cristina Pride</p>
                                        <p class="text-muted mb-0 user-msg">
                                            <small>Hi, How are you? What about our next meeting</small>
                                        </p>
                                    </a>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-primary">
                                            <i class="mdi mdi-comment-account-outline"></i>
                                        </div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin
                                            <small class="text-muted">1 min ago</small>
                                        </p>
                                    </a>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon">
                                            <img src="assets/images/users/user-4.jpg" class="img-fluid rounded-circle" alt="" /> </div>
                                        <p class="notify-details">Karen Robinson</p>
                                        <p class="text-muted mb-0 user-msg">
                                            <small>Wow ! this admin looks good and awesome design</small>
                                        </p>
                                    </a>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-warning">
                                            <i class="mdi mdi-account-plus"></i>
                                        </div>
                                        <p class="notify-details">New user registered.
                                            <small class="text-muted">5 hours ago</small>
                                        </p>
                                    </a>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-info">
                                            <i class="mdi mdi-comment-account-outline"></i>
                                        </div>
                                        <p class="notify-details">Caleb Flakelar commented on Admin
                                            <small class="text-muted">4 days ago</small>
                                        </p>
                                    </a>
    
                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <div class="notify-icon bg-secondary">
                                            <i class="mdi mdi-heart"></i>
                                        </div>
                                        <p class="notify-details">Carlos Crouch liked
                                            <b>Admin</b>
                                            <small class="text-muted">13 days ago</small>
                                        </p>
                                    </a>
                                </div>
    
                                <!-- All-->
                                <a href="javascript:void(0);" class="dropdown-item text-center text-primary notify-item notify-all">
                                    View all
                                    <i class="fe-arrow-right"></i>
                                </a>
    
                            </div>
                        </li>
    
                        <li class="dropdown notification-list topbar-dropdown">
                            <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <?php
                                $no = $_SESSION["control_no"];
                                $profile = mysqli_query($config, "SELECT profile_picture from account_info WHERE control_no = $no");

                                while($data = mysqli_fetch_array($profile)) {
                                  echo '<img class="img-fluid rounded-circle" src="data:image/jpg;charset=utf8;base64,'.base64_encode($data['profile_picture']).'"  width="22px">';
                                }
                            ?>
                                <span class="pro-user-name ms-1">
                                    <?php echo $_SESSION['first'] ?> <i class="mdi mdi-chevron-down"></i> 
                                </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end profile-dropdown ">
                                <!-- item-->
                                <div class="dropdown-header noti-title">
                                    <h6 class="text-overflow m-0">Welcome !</h6>
                                </div>
    
                                <!-- item-->
                                <a href="contacts-profile.html" class="dropdown-item notify-item">
                                    <i class="fe-user"></i>
                                    <span>My Account</span>
                                </a>
    
                                <!-- item-->
                                <a href="auth-lock-screen.html" class="dropdown-item notify-item">
                                    <i class="fe-lock"></i>
                                    <span>Lock Screen</span>
                                </a>
    
                                <div class="dropdown-divider"></div>
    
                                <!-- item-->
                                <a href="../../php/logout.php" class="dropdown-item notify-item">
                                    <i class="fe-log-out"></i>
                                    <span>Logout</span>
                                </a>
    
                            </div>
                        </li>
    
                        <li class="dropdown notification-list">
                            <a href="javascript:void(0);" class="nav-link right-bar-toggle waves-effect waves-light">
                                <i class="fe-settings noti-icon"></i>
                            </a>
                        </li>
    
                    </ul>
    
                    <!-- LOGO -->
                    <div class="logo-box">
                        <a href="index.php" class="logo logo-light text-center">
                            <span class="logo-sm">
                                <img src="../../assets/img/pgmnhs-logo.png" alt="" height="40" width="auto">
                            </span>
                            <span class="logo-lg">
                                <img src="../../assets/img/pgmnhs-logo.png" alt="" height="40" width="auto">
                            </span>
                        </a>
                        <a href="index.php" class="logo logo-dark text-center">
                            <span class="logo-sm">
                                <img src="../../assets/img/pgmnhs-logo.png" alt="" height="40" width="auto">
                            </span>
                            <span class="logo-lg">
                                <img src="../../assets/img/pgmnhs-logo.png" alt="" height="40" width="auto">
                            </span>
                        </a>
                    </div>

                    <ul class="list-unstyled topnav-menu topnav-menu-left mb-0">

                        <li>
                            <!-- Mobile menu toggle (Horizontal Layout)-->
                            <a class="navbar-toggle nav-link" data-bs-toggle="collapse" data-bs-target="#topnav-menu-content">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </li>
             
                    </ul>

                    <div class="clearfix"></div> 
        
                </div>
              
            </div>
            <!-- end Topbar -->

            <!-- Navigation -->
            <div class="topnav">
                <div class="container-fluid">
                    <nav class="navbar navbar-dark navbar-expand-lg topnav-menu">

                        <div class="collapse navbar-collapse" id="topnav-menu-content">
                            <ul class="navbar-nav">
                                <li class="nav-item dropdown">
                                    <a class="nav-link arrow-none" href="index.php" id="topnav-dashboard" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-home me-1"></i> Home
                                    </a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link arrow-none" href="registrar-students.php" id="topnav-dashboard" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-account-group-outline me-1"></i> Students
                                    </a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link arrow-none" href="registrar-forms.php" id="topnav-dashboard" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-file-document-outline me-1"></i> Forms
                                    </a>
                                </li>

                            </ul> <!-- end navbar-->
                        </div> <!-- end .collapsed-->
                    </nav>
                </div> <!-- end container-fluid -->
            </div> <!-- end topnav-->
            
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">
                          
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Form Management</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">

                                        <!-- Alert Box -->
                                        <?php
                                            if(isset($_GET['update-success']) OR isset($_GET['delete-success']) OR isset($_GET['upload-success'])) {
                                              echo '
                                                <div class="alert alert-success alert-dismissible fade show text-center fw-bold" role="alert">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    <i class="mdi mdi-check-all me-1"></i>File added/updated succesfully
                                                </div>
                                              ';
                                            }

                                            else if(isset($_GET['delete-failed'])) {
                                              echo '
                                                <div class="alert alert-danger alert-dismissible fade show text-center fw-bold" role="alert">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    <i class="mdi mdi-delete-forever me-1"></i>File deleted succesfully
                                                </div>
                                              ';
                                            }

                                            else if(isset($_GET['upload-failed'])) {
                                              echo '
                                                <div class="alert alert-danger alert-dismissible fade show text-center fw-bold" role="alert">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    <i class="mdi mdi-alert me-1"></i>File not uploaded
                                                </div>
                                              ';
                                            }

                                            else if(isset($_GET['unsupported-file'])) {
                                              echo '
                                                <div class="alert alert-warning alert-dismissible fade show text-center" role="alert">
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                                    <i class="mdi mdi-alert-octagon me-1"></i><strong>File not supported</strong> - Please use pdf, docx. xlsx or pptx format.
                                                </div>
                                              ';
                                            }
                                        ?>

                                        <div class="row justify-content-end m-1">
                                            <button type="button" class="btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#bs-example-modal-lg"><i class="mdi mdi-arrow-collapse-up me-1"></i> Upload File</button>
                                        </div>

                                        <!--  Upload Modal -->
                                        <div class="modal fade" id="bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-lg modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-body">
                                                        <h4 class="header-title">File Upload</h4>
                            
                                                        <form action="../../php/sample-upload.php" method="post" enctype="multipart/form-data" class="dropzone border-0" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews"
                                                            data-upload-preview-template="#uploadPreviewTemplate" >

                                                            <div class="dz-message needsclick">
                                                                <i class="h1 text-muted dripicons-cloud-upload"></i>
                                                                <h3>Drop files here or click to upload.</h3>
                                                                <span class="text-muted font-13">Please upload files that are converted into PDFs. The system will not accept any other format.)</span>
                                                            </div>

                                                            <div class="fallback">
                                                                <input class="form-control" type="file" name="fileToUpload" id="fileToUpload">
                                                            </div>

                                                            <!-- Preview -->
                                                            <div class="dropzone-previews mt-1" id="file-previews"></div>  

                                                            <input type="submit" id="upload" name="upload" class="btn btn-success w-100 mt-2" value="Submit">
                                                        </form>
                                                    </div>
                                                </div><!-- /.modal-content -->
                                            </div><!-- /.modal-dialog -->
                                        </div><!-- /.modal -->

                                        <table class="table table-striped table-hover w-100 p-3">
                                            <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-center">File Name</th>
                                                <th class="text-center">Department</th>
                                                <th class="text-center">File Size</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                            </thead>


                                            <tbody>
                                            <?php 
                                                $query = mysqli_query($config, "SELECT DISTINCT document_no, document_name, dept_origin, document_size FROM school_documents GROUP BY document_name ASC");
                                                while($file = mysqli_fetch_array($query)) {
                                            ?>
                                            <tr>
                                                <td class="text-center p-3"><?php echo $file['document_no']; ?></td>
                                                <td class="p-3 text-center"><?php echo $file['document_name']; ?></td>
                                                <td class="p-3 text-center"><?php echo $file['dept_origin']; ?></td>
                                                <td class="p-3 text-center"><?php echo $file['document_size'] / 1000 . ' KB'; ?></td>

                                                <td class="p-3 text-center">
                                                      <div class="col-12">
                                                        <a class="text-decoration-none text-primary me-2 edit-button" href="#" data-bs-toggle="modal" data-bs-target="#editmodal" title="Edit">
                                                          <i class="mdi mdi-pencil-outline"></i>
                                                        </a>

                                                        <!--  Edit Modal -->
                                                        <div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-hidden="true">
                                                            <div class="modal-dialog modal-md modal-dialog-centered">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h4 class="modal-title" id="myLargeModalLabel">Edit File</h4>
                                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                    </div>
                                                                    <div class="modal-body text-start px-4">

                                                                        <form action="../../php/update-file.php" method="post">
                                                                            <input type="hidden" class="form-control mb-2" name="file_number" id="file_number">

                                                                            <label class="form-label" for="file_name">File Name:</label>
                                                                            <input type="text" class="form-control mb-2" name="file_name" id="file_name">

                                                                            <label class="form-label" for="file_dept">Department:</label>
                                                                            <input type="text" class="form-control mb-2" name="cur_dept" id="cur_dept" disabled>

                                                                            <label class="form-label" for="file_size">File Size:</label>
                                                                            <input type="text" class="form-control mb-2" name="file_size" id="file_size" disabled>
                                                                            
                                                                            <input type="submit" class="btn btn-success w-100 my-2" name="update-file">
                                                                        </form>

                                                                    </div>
                                                                </div><!-- /.modal-content -->
                                                            </div><!-- /.modal-dialog -->
                                                        </div><!-- /.modal -->

                                                        <a class="text-decoration-none text-success me-2" href="../../php/download-file.php?document_no=<?php echo $file['document_no']; ?>" title="Download">
                                                          <i class="mdi mdi-arrow-collapse-down"></i>
                                                        </a>

                                                        <a class="text-decoration-none text-danger delete-button me-2" href="#" data-bs-toggle="modal" data-bs-target="#deletemodal" title="Delete">
                                                          <i class="mdi mdi-delete-outline"></i>
                                                        </a>

                                                        <!-- Delete Modal -->
                                                        <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-hidden="true">
                                                          <div class="modal-dialog modal-dialog-centered">
                                                            <div class="modal-content">

                                                              <div class="modal-header">
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                              </div>

                                                              <form action="../../php/delete-file.php" method="post">
                                                                <div class="modal-body">
                                                                  <input type="hidden" name="delete_number" id="delete_number">
                                                                  Do you want to delete this file?
                                                                </div>

                                                                <div class="modal-footer">
                                                                  <input type="button" class="btn btn-danger" data-bs-dismiss="modal" value="No">
                                                                  <input type="submit" name="delete" class="btn btn-success" value="Yes">
                                                              </div>
                                                              
                                                              </form>
                                                            </div>
                                                          </div>
                                                        </div>
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
                        <!-- end row -->  
                        
                    </div> <!-- container -->

                </div> <!-- content -->

                <!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 text-muted">
                                <script>document.write(new Date().getFullYear())</script> &copy; Pedro Guevara Memorial National Highschool</a> 
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-end footer-links d-none d-sm-block">
                                    <a href="javascript:void(0);">About Us</a>
                                    <a href="javascript:void(0);">Help</a>
                                    <a href="javascript:void(0);">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">

            <div data-simplebar class="h-100">

                <div class="rightbar-title">
                    <a href="javascript:void(0);" class="right-bar-toggle float-end">
                        <i class="mdi mdi-close"></i>
                    </a>
                    <h4 class="font-16 m-0 text-white">Theme Customizer</h4>
                </div>
        
                <!-- Tab panes -->
                <div class="tab-content pt-0">  

                    <div class="tab-pane active" id="settings-tab" role="tabpanel">

                        <div class="p-3">
                            <div class="alert alert-warning" role="alert">
                                <strong>Customize </strong> the overall color scheme, Layout, etc.
                            </div>

                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Color Scheme</h6>
                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="layout-color" value="light"
                                    id="light-mode-check" checked />
                                <label class="form-check-label" for="light-mode-check">Light Mode</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="layout-color" value="dark"
                                    id="dark-mode-check" />
                                <label class="form-check-label" for="dark-mode-check">Dark Mode</label>
                            </div>

                            <!-- Width -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Width</h6>
                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="layout-size" value="fluid" id="fluid" checked />
                                <label class="form-check-label" for="fluid-check">Fluid</label>
                            </div>
                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="layout-size" value="boxed" id="boxed" />
                                <label class="form-check-label" for="boxed-check">Boxed</label>
                            </div>

                            <!-- Menu positions -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Menus (Leftsidebar and Topbar) Positon</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-position" value="fixed" id="fixed-check"
                                    checked />
                                <label class="form-check-label" for="fixed-check">Fixed</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-position" value="scrollable"
                                    id="scrollable-check" />
                                <label class="form-check-label" for="scrollable-check">Scrollable</label>
                            </div>

                            <!-- Left Sidebar-->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Color</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-color" value="light" id="light" />
                                <label class="form-check-label" for="light-check">Light</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-color" value="dark" id="dark" checked/>
                                <label class="form-check-label" for="dark-check">Dark</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-color" value="brand" id="brand" />
                                <label class="form-check-label" for="brand-check">Brand</label>
                            </div>

                            <div class="form-check form-switch mb-3">
                                <input type="checkbox" class="form-check-input" name="leftbar-color" value="gradient" id="gradient" />
                                <label class="form-check-label" for="gradient-check">Gradient</label>
                            </div>

                            <!-- size -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Left Sidebar Size</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-size" value="default"
                                    id="default-size-check" checked />
                                <label class="form-check-label" for="default-size-check">Default</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-size" value="condensed"
                                    id="condensed-check" />
                                <label class="form-check-label" for="condensed-check">Condensed <small>(Extra Small size)</small></label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="leftbar-size" value="compact"
                                    id="compact-check" />
                                <label class="form-check-label" for="compact-check">Compact <small>(Small size)</small></label>
                            </div>

                            <!-- User info -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Sidebar User Info</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="sidebar-user" value="true" id="sidebaruser-check" />
                                <label class="form-check-label" for="sidebaruser-check">Enable</label>
                            </div>


                            <!-- Topbar -->
                            <h6 class="fw-medium font-14 mt-4 mb-2 pb-1">Topbar</h6>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="topbar-color" value="dark" id="darktopbar-check"
                                    checked />
                                <label class="form-check-label" for="darktopbar-check">Dark</label>
                            </div>

                            <div class="form-check form-switch mb-1">
                                <input type="checkbox" class="form-check-input" name="topbar-color" value="light" id="lighttopbar-check" />
                                <label class="form-check-label" for="lighttopbar-check">Light</label>
                            </div>

                            <div class="d-grid mt-4">
                                <button class="btn btn-primary" id="resetBtn">Reset to Default</button>
                                <a href="https://1.envato.market/admintoadmin" class="btn btn-danger mt-3" target="_blank"><i class="mdi mdi-basket me-1"></i> Purchase Now</a>
                            </div>

                        </div>

                    </div>
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>
        <script src="assets/libs/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="assets/libs/jquery.counterup/jquery.counterup.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>

          <!-- knob plugin -->
        <script src="assets/libs/jquery-knob/jquery.knob.min.js"></script>

          <!--Morris Chart-->
        <script src="assets/libs/morris.js06/morris.min.js"></script>
        <script src="assets/libs/raphael/raphael.min.js"></script>
  
        <!-- Dashboar init js-->
        <script src="assets/js/pages/dashboard.init.js"></script>

        <!-- App js-->
        <script src="assets/js/app.min.js"></script>
        
    </body>
</html>