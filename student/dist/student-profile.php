<?php
  include_once("../../php/fetch-admin.php");
  include_once("../../php/database.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <title>My Profile - Pedro Guevarra Memorial National Highschool</title>
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
                                    <a class="nav-link arrow-none" href="student-profile.php" id="topnav-dashboard" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-account-outline me-1"></i> Profile
                                    </a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link arrow-none" href="student-grades.php" id="topnav-dashboard" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-license me-1"></i> Grades
                                    </a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link arrow-none" href="student-class.php" id="topnav-dashboard" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-book-clock-outline me-1"></i> Classes
                                    </a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link arrow-none" href="student-subjects.php" id="topnav-dashboard" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-bookshelf me-1"></i> Subjects
                                    </a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link arrow-none" href="student-calendar.php" id="topnav-dashboard" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-calendar-outline me-1"></i> Calendar
                                    </a>
                                </li>

                                <li class="nav-item dropdown">
                                    <a class="nav-link arrow-none" href="download-documents.php" id="topnav-dashboard" role="button"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="mdi mdi-file-outline me-1"></i> Documents
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
                                    <h4 class="page-title">My Profile</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-md-8">
                                <div class="card">
                                    <div class="card-body task-detail">
                                        <div class="d-flex mb-3">
                                            <img class="flex-shrink-0 me-3 rounded-circle avatar-md" alt="64x64" src="assets/images/users/user-2.jpg">
                                            <div class="flex-grow-1">
                                                <h4 class="media-heading mt-0 mb-0"><?php echo $_SESSION['first'] . " " . $_SESSION['last'] ?></h4>
                                                <small><?php echo $_SESSION['control_no'] ?></small><br>
                                                <span class="badge bg-primary"><?php echo $_SESSION['privilege'] ?></span>
                                            </div>
                                        </div>
    
                                        <h4>Code HTML email template for welcome email</h4>
    
                                        <p class="text-muted">
                                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint cupiditate non sunt in culpa qui officia deserunt animi est laborum et
                                        </p>
    
                                        <p class="text-muted">
                                            Consectetur adipisicing elit. Voluptates, illo, iste
                                            itaque voluptas corrupti ratione reprehenderit magni similique Tempore quos
                                            delectus asperiores libero voluptas quod perferendis erum ipsum dolor sit.
                                        </p>
    
                                        <div class="row task-dates mb-0 mt-2">
                                            <div class="col-lg-6">
                                                <h5 class="font-600 m-b-5">Start Date</h5>
                                                <p> 22 March 2016 <small class="text-muted">1:00 PM</small></p>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
    
                                        <div class="assign-team mt-3">
                                            <h5>Subject Teacher(s)</h5>
                                            <div>
                                                <a href="#"> <img class="rounded-circle avatar-sm" alt="64x64" src="assets/images/users/user-2.jpg"> </a>
                                                <a href="#"> <img class="rounded-circle avatar-sm" alt="64x64" src="assets/images/users/user-3.jpg"> </a>
                                                <a href="#"> <img class="rounded-circle avatar-sm" alt="64x64" src="assets/images/users/user-5.jpg"> </a>
                                                <a href="#"> <img class="rounded-circle avatar-sm" alt="64x64" src="assets/images/users/user-8.jpg"> </a>
                                                <a href="#"><span class="add-new-plus"><i class="mdi mdi-plus"></i> </span></a>
                                            </div>
                                        </div>
    
                                        <div class="attached-files mt-3">
                                            <h5>Attached Files </h5>
                                            <ul class="list-inline files-list">
                                                <li class="list-inline-item file-box">
                                                    <a href=""><img src="assets/images/attached-files/img-1.jpg" class="img-fluid img-thumbnail" alt="attached-img" width="80"></a>
                                                    <p class="font-13 mb-1 text-muted"><small>File one</small></p>
                                                </li>
                                                <li class="list-inline-item file-box">
                                                    <a href=""><img src="assets/images/attached-files/img-2.jpg" class="img-fluid img-thumbnail" alt="attached-img" width="80"></a>
                                                    <p class="font-13 mb-1 text-muted"><small>Attached-2</small></p>
                                                </li>
                                                <li class="list-inline-item file-box">
                                                    <a href=""><img src="assets/images/attached-files/img-3.jpg" class="img-fluid img-thumbnail" alt="attached-img" width="80"></a>
                                                    <p class="font-13 mb-1 text-muted"><small>Dribbble shot</small></p>
                                                </li>
                                                <li class="list-inline-item file-box ms-2">
                                                    <div class="fileupload add-new-plus">
                                                        <span><i class="mdi-plus mdi"></i></span>
                                                        <input type="file" class="upload">
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="text-end">
                                                        <button type="submit" class="btn btn-success waves-effect waves-light me-1">
                                                            Save
                                                        </button>
                                                        <button type="button"
                                                                class="btn btn-light waves-effect">Cancel
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
    
                                    </div>
                                </div>
                                
                            </div><!-- end col -->

                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="dropdown float-end">
                                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown" aria-expanded="false">
                                                <i class="mdi mdi-dots-vertical"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end">
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Action</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Another action</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Something else</a>
                                                <!-- item-->
                                                <a href="javascript:void(0);" class="dropdown-item">Separated link</a>
                                            </div>
                                        </div>
    
                                        <h4 class="header-title mt-0 mb-3">Upcoming Classes</h4>
    
                                        <div>
    
                                            <div class="d-flex mb-3">
                                                <div class="flex-shrink-0 me-3">
                                                    <a href="#"> <img class="rounded-circle avatar-sm" alt="64x64" src="assets/images/users/user-1.jpg"> </a>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="mt-0">Mat Helme</h5>
                                                    <p class="font-13 text-muted mb-0">
                                                        <a href="" class="text-primary">@Michael</a>
                                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                                        ante sollicitudin commodo.
                                                    </p>
                                                    <a href="" class="text-success font-13">Reply</a>
                                                </div>
                                            </div>
    
                                            <div class="d-flex mb-3">
                                                <div class="flex-shrink-0 me-3">
                                                    <a href="#"> <img class="rounded-circle avatar-sm" alt="64x64" src="assets/images/users/user-2.jpg"> </a>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="mt-0">Media heading</h5>
                                                    <p class="font-13 text-muted mb-0">
                                                        <a href="" class="text-primary">@Michael</a>
                                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque sollicitudin purus odio.
                                                    </p>
                                                    <a href="" class="text-success font-13">Reply</a>
    
                                                    <div class="d-flex my-2">
                                                        <div class="flex-shrink-0 me-3">
                                                            <a href="#"> <img class="rounded-circle avatar-sm" alt="64x64" src="assets/images/users/user-3.jpg"> </a>
                                                        </div>
                                                        <div class="flex-grow-1">
                                                            <h5 class="mt-0">Nested media heading</h5>
                                                            <p class="font-13 text-muted mb-0">
                                                                <a href="" class="text-primary">@Michael</a>
                                                                Cras sit amet nibh libero, in gravida nulla vel metus scelerisque ante sollicitudin purus odio.
                                                            </p>
                                                            <a href="" class="text-success font-13">Reply</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
    
                                            <div class="d-flex mb-3">
                                                <div class="flex-shrink-0 me-3">
                                                    <a href="#"> <img class="rounded-circle avatar-sm" alt="64x64" src="assets/images/users/user-1.jpg"> </a>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="mt-0">Mat Helme</h5>
                                                    <p class="font-13 text-muted mb-0">
                                                        <a href="" class="text-primary">@Michael</a>
                                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                                        ante sollicitudin commodo cras purus.
                                                    </p>
                                                    <a href="" class="text-success font-13">Reply</a>
                                                </div>
                                            </div>
    
                                            <div class="d-flex mb-3">
                                                <div class="flex-shrink-0 me-3">
                                                    <a href="#"> <img class="rounded-circle avatar-sm" alt="64x64" src="assets/images/users/user-1.jpg"> </a>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h5 class="mt-0">Mat Helme</h5>
                                                    <p class="font-13 text-muted mb-0">
                                                        <a href="" class="text-primary">@Michael</a>
                                                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque
                                                        ante sollicitudin commodo cras.
                                                    </p>
                                                    <a href="" class="text-success font-13">Reply</a>
                                                </div>
                                            </div>
    
                                            <div class="d-flex mb-3">
                                                <div class=" me-3">
                                                    <a href="#"> <img class="rounded-circle avatar-sm" alt="64x64" src="assets/images/users/user-1.jpg"> </a>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <input type="text" class="form-control" placeholder="Some text value...">
                                                </div>
                                            </div>
    
                                        </div>
                                    </div>
                                </div>
                               
                            </div><!-- end col -->
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