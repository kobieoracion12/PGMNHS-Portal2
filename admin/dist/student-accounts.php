<?php
  include_once("../../php/fetch-admin.php");
  include_once("../../php/fetch-document.php");
  include_once("../../php/database.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Student Accounts - Pedro Guevarra Memorial National Highschool</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="../../assets/img/pgmnhs-logo.ico">

        <!-- App css -->
        <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="app-style" />

        <!-- third party css -->
        <link href="assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/libs/datatables.net-select-bs5/css//select.bootstrap5.min.css" rel="stylesheet" type="text/css" />
        <!-- third party css end -->

        <!-- icons -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />

    </head>

    <!-- body start -->
    <body class="loading" data-layout-color="light"  data-layout-mode="default" data-layout-size="fluid" data-topbar-color="light" data-leftbar-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='true'>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Topbar Start -->
            <div class="navbar-custom">
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
                                    <div class="dropdown-menu dropdown-lg" id="search-dropdown">
                                        <!-- item-->
                                        <div class="dropdown-header noti-title">
                                            <h5 class="text-overflow mb-2">Found 22 results</h5>
                                        </div>
            
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="fe-home me-1"></i>
                                            <span>Analytics Report</span>
                                        </a>
            
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="fe-aperture me-1"></i>
                                            <span>How can I help you?</span>
                                        </a>
                            
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item notify-item">
                                            <i class="fe-settings me-1"></i>
                                            <span>User profile settings</span>
                                        </a>

                                        <!-- item-->
                                        <div class="dropdown-header noti-title">
                                            <h6 class="text-overflow mb-2 text-uppercase">Users</h6>
                                        </div>

                                        <div class="notification-list">
                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="d-flex align-items-start">
                                                    <img class="d-flex me-2 rounded-circle" src="assets/images/users/user-2.jpg" alt="Generic placeholder image" height="32">
                                                    <div class="w-100">
                                                        <h5 class="m-0 font-14">Erwin E. Brown</h5>
                                                        <span class="font-12 mb-0">UI Designer</span>
                                                    </div>
                                                </div>
                                            </a>

                                            <!-- item-->
                                            <a href="javascript:void(0);" class="dropdown-item notify-item">
                                                <div class="d-flex align-items-start">
                                                    <img class="d-flex me-2 rounded-circle" src="assets/images/users/user-5.jpg" alt="Generic placeholder image" height="32">
                                                    <div class="w-100">
                                                        <h5 class="m-0 font-14">Jacob Deo</h5>
                                                        <span class="font-12 mb-0">Developer</span>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
            
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
                                <?php
                                    echo $_SESSION['first']
                                ?>

                                 <i class="mdi mdi-chevron-down"></i> 
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
                        <a href="index.html" class="logo logo-light text-center">
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-light.png" alt="" height="16">
                            </span>
                        </a>
                        <a href="index.html" class="logo logo-dark text-center">
                            <span class="logo-sm">
                                <img src="assets/images/logo-sm.png" alt="" height="22">
                            </span>
                            <span class="logo-lg">
                                <img src="assets/images/logo-dark.png" alt="" height="16">
                            </span>
                        </a>
                    </div>

                    <ul class="list-unstyled topnav-menu topnav-menu-left mb-0">
                        <li>
                            <button class="button-menu-mobile disable-btn waves-effect">
                                <i class="fe-menu"></i>
                            </button>
                        </li>
    
                        <li>
                            <h4 class="page-title-main">Account Management</h4>
                        </li>
            
                    </ul>

                    <div class="clearfix"></div> 
               
            </div>
            <!-- end Topbar -->

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left-side-menu">

                <div class="h-100" data-simplebar>

                     <!-- User box -->
                    <div class="user-box text-center">
                        <?php
                            $no = $_SESSION["control_no"];
                            $profile = mysqli_query($config, "SELECT profile_picture from account_info WHERE control_no = $no");

                            while($data = mysqli_fetch_array($profile)) {
                              echo '<img src="data:image/jpg;charset=utf8;base64,'.base64_encode($data['profile_picture']).'" alt="user-img" title="Mat Helme" class="rounded-circle img-thumbnail avatar-md">';
                            }
                        ?>
                        
                            <div class="dropdown">
                                <a href="#" class="user-name dropdown-toggle h5 mt-2 mb-1 d-block" data-bs-toggle="dropdown"  aria-expanded="false">
                                <?php
                                    echo $_SESSION['first'];
                                    echo " ";
                                    echo $_SESSION['last'];
                                ?>
                                </a>
                            </div>

                        <p class="text-muted left-user-info">
                            <?php echo $_SESSION['privilege']?>
                        </p>

                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <a href="#" class="text-muted left-user-info">
                                    <i class="mdi mdi-cog"></i>
                                </a>
                            </li>

                            <li class="list-inline-item">
                                <a href="#">
                                    <i class="mdi mdi-power"></i>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul id="side-menu">

                            <li class="menu-title">Navigation</li>
                
                            <li>
                                <a href="index.php">
                                    <i class="mdi mdi-view-dashboard-outline"></i>
                                    <span class="badge bg-success rounded-pill float-end">9+</span>
                                    <span> Dashboard </span>
                                </a>
                            </li>

                            <li class="menu-title mt-2">Apps</li>

                            <li>
                                <a href="#acc" data-bs-toggle="collapse">
                                    <i class="mdi mdi-account-group-outline"></i>
                                    <span> Accounts </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="acc">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="admin-accounts.php">Admin</a>
                                        </li>
                                        <li>
                                            <a href="faculty-accounts.php">Faculty</a>
                                        </li>
                                        <li>
                                            <a href="student-accounts.php">Students</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>                  

                            <li>
                                <a href="#manage" data-bs-toggle="collapse">
                                    <i class="mdi mdi-folder-open-outline"></i>
                                    <span> Management </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="manage">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="manage-subjects.php">Subjects</a>
                                        </li>
                                        <li>
                                            <a href="manage-faculty.php">Teachers</a>
                                        </li>
                                        <li>
                                            <a href="manage-sections.php">Sections</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="form-management.php">
                                    <i class="mdi mdi-newspaper-variant-multiple"></i>
                                    <span> Form Management </span>
                                </a>
                            </li>

                            <li>
                                <a href="apps-calendar.html">
                                    <i class="mdi mdi-calendar-blank-outline"></i>
                                    <span> School Calendar </span>
                                </a>
                            </li>

                            <li>
                                <a href="apps-chat.html">
                                    <i class="mdi mdi-forum-outline"></i>
                                    <span> Chat </span>
                                </a>
                            </li>

                            <li>
                                <a href="#email" data-bs-toggle="collapse">
                                    <i class="mdi mdi-email-outline"></i>
                                    <span> Email </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="email">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="email-inbox.html">Inbox</a>
                                        </li>
                                        <li>
                                            <a href="email-templates.html">Email Templates</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarTasks" data-bs-toggle="collapse">
                                    <i class="mdi mdi-clipboard-outline"></i>
                                    <span> Tasks </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarTasks">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="task-kanban-board.html">Kanban Board</a>
                                        </li>
                                        <li>
                                            <a href="task-details.html">Details</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="apps-projects.html">
                                    <i class="mdi mdi-briefcase-variant-outline"></i>
                                     <span> Projects </span>
                                </a>    
                            </li>

                            <li>
                                <a href="#contacts" data-bs-toggle="collapse">
                                    <i class="mdi mdi-book-open-page-variant-outline"></i>
                                    <span> Contacts </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="contacts">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="contacts-list.html">Members List</a>
                                        </li>
                                        <li>
                                            <a href="contacts-profile.html">Profile</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="menu-title mt-2">Custom</li>

                            <li>
                                <a href="#sidebarAuth" data-bs-toggle="collapse">
                                    <i class="mdi mdi-account-multiple-plus-outline"></i>
                                    <span> Auth Pages </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarAuth">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="auth-login.html">Log In</a>
                                        </li>
                                        <li>
                                            <a href="auth-register.html">Register</a>
                                        </li>
                                        <li>
                                            <a href="auth-recoverpw.html">Recover Password</a>
                                        </li>
                                        <li>
                                            <a href="auth-lock-screen.html">Lock Screen</a>
                                        </li>
                                        <li>
                                            <a href="auth-confirm-mail.html">Confirm Mail</a>
                                        </li>
                                        <li>
                                            <a href="auth-logout.html">Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarExpages" data-bs-toggle="collapse">
                                    <i class="mdi mdi-file-multiple-outline"></i>
                                    <span> Extra Pages </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarExpages">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="pages-starter.html">Starter</a>
                                        </li>
                                        <li>
                                            <a href="pages-pricing.html">Pricing</a>
                                        </li>
                                        <li>
                                            <a href="pages-timeline.html">Timeline</a>
                                        </li>
                                        <li>
                                            <a href="pages-invoice.html">Invoice</a>
                                        </li>
                                        <li>
                                            <a href="pages-faqs.html">FAQs</a>
                                        </li>
                                        <li>
                                            <a href="pages-gallery.html">Gallery</a>
                                        </li>
                                        <li>
                                            <a href="pages-404.html">Error 404</a>
                                        </li>
                                        <li>
                                            <a href="pages-500.html">Error 500</a>
                                        </li>
                                        <li>
                                            <a href="pages-maintenance.html">Maintenance</a>
                                        </li>
                                        <li>
                                            <a href="pages-coming-soon.html">Coming Soon</a>
                                        </li>
                                     </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarLayouts" data-bs-toggle="collapse">
                                    <i class="mdi mdi-dock-window"></i>
                                    <span> Layouts </span>
                                    <span class="menu-arrow"></span>

                                </a>
                                <div class="collapse" id="sidebarLayouts">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="layouts-horizontal.html">Horizontal</a>
                                        </li>                       
                                        <li>
                                            <a href="layouts-preloader.html">Preloader</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li class="menu-title mt-2">Components</li>

                            <li>
                                <a href="#sidebarBaseui" data-bs-toggle="collapse">
                                    <i class="mdi mdi-briefcase-outline"></i>
                                    <span> Base UI </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarBaseui">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="ui-buttons.html">Buttons</a>
                                        </li>
                                        <li>
                                            <a href="ui-cards.html">Cards</a>
                                        </li>
                                        <li>
                                            <a href="ui-avatars.html">Avatars</a>
                                        </li>
                                        <li>
                                            <a href="ui-tabs-accordions.html">Tabs & Accordions</a>
                                        </li>
                                        <li>
                                            <a href="ui-modals.html">Modals</a>
                                        </li>
                                        <li>
                                            <a href="ui-progress.html">Progress</a>
                                        </li>
                                        <li>
                                            <a href="ui-notifications.html">Notifications</a>
                                        </li>
                                        <li>
                                            <a href="ui-offcanvas.html">Offcanvas</a>
                                        </li>
                                        <li>
                                            <a href="ui-placeholders.html">Placeholders</a>
                                        </li>
                                        <li>
                                            <a href="ui-spinners.html">Spinners</a>
                                        </li>
                                        <li>
                                            <a href="ui-images.html">Images</a>
                                        </li>
                                        <li>
                                            <a href="ui-carousel.html">Carousel</a>
                                        </li>
                                        <li>
                                            <a href="ui-video.html">Embed Video</a>
                                        </li>
                                        <li>
                                            <a href="ui-dropdowns.html">Dropdowns</a>
                                        </li>
                                        <li>
                                            <a href="ui-tooltips-popovers.html">Tooltips & Popovers</a>
                                        </li>
                                        <li>
                                            <a href="ui-general.html">General UI</a>
                                        </li>
                                        <li>
                                            <a href="ui-typography.html">Typography</a>
                                        </li>
                                        <li>
                                            <a href="ui-grid.html">Grid</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="widgets.html">
                                    <i class="mdi mdi-gift-outline"></i>
                                    <span> Widgets </span>
                                </a>
                            </li>

                            <li>
                                <a href="#sidebarExtendedui" data-bs-toggle="collapse">
                                    <i class="mdi mdi-layers-outline"></i>
                                    <span class="badge bg-info float-end">Hot</span>
                                    <span> Extended UI </span>
                                </a>
                                <div class="collapse" id="sidebarExtendedui">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="extended-range-slider.html">Range Slider</a>
                                        </li>
                                        <li>
                                            <a href="extended-sweet-alert.html">Sweet Alert</a>
                                        </li>
                                        <li>
                                            <a href="extended-draggable-cards.html">Draggable Cards</a>
                                        </li>
                                        <li>
                                            <a href="extended-tour.html">Tour Page</a>
                                        </li>
                                        <li>
                                            <a href="extended-notification.html">Notification</a>
                                        </li>
                                        <li>
                                            <a href="extended-treeview.html">Tree View</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarIcons" data-bs-toggle="collapse">
                                    <i class="mdi mdi-shield-outline"></i>
                                    <span> Icons </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarIcons">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="icons-feather.html">Feather Icons</a>
                                        </li>
                                        <li>
                                            <a href="icons-mdi.html">Material Design Icons</a>
                                        </li>
                                        <li>
                                            <a href="icons-dripicons.html">Dripicons</a>
                                        </li>
                                        <li>
                                            <a href="icons-font-awesome.html">Font Awesome 5</a>
                                        </li>
                                        <li>
                                            <a href="icons-themify.html">Themify</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarForms" data-bs-toggle="collapse">
                                    <i class="mdi mdi-texture"></i>
                                    <span> Forms </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarForms">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="forms-elements.html">General Elements</a>
                                        </li>
                                        <li>
                                            <a href="forms-advanced.html">Advanced</a>
                                        </li>
                                        <li>
                                            <a href="forms-validation.html">Validation</a>
                                        </li>
                                        <li>
                                            <a href="forms-wizard.html">Wizard</a>
                                        </li>
                                        <li>
                                            <a href="forms-quilljs.html">Quilljs Editor</a>
                                        </li>
                                        <li>
                                            <a href="forms-pickers.html">Picker</a>
                                        </li>
                                        <li>
                                            <a href="forms-file-uploads.html">File Uploads</a>
                                        </li>
                                        <li>
                                            <a href="forms-x-editable.html">X Editable</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarTables" data-bs-toggle="collapse">
                                    <i class="mdi mdi-table"></i>
                                    <span> Tables </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarTables">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="tables-basic.html">Basic Tables</a>
                                        </li>
                                        <li>
                                            <a href="tables-datatables.html">Data Tables</a>
                                        </li>
                                        <li>
                                            <a href="tables-editable.html">Editable Tables</a>
                                        </li>
                                        <li>
                                            <a href="tables-responsive.html">Responsive Tables</a>
                                        </li>
                                        <li>
                                            <a href="tables-tablesaw.html">Tablesaw Tables</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarCharts" data-bs-toggle="collapse">
                                    <i class="mdi mdi-chart-donut-variant"></i>
                                    <span> Charts </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarCharts">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="charts-flot.html">Flot Charts</a>
                                        </li>
                                        <li>
                                            <a href="charts-morris.html">Morris Charts</a>
                                        </li>
                                        <li>
                                            <a href="charts-chartjs.html">Chartjs Charts</a>
                                        </li>
                                        <li>
                                            <a href="charts-chartist.html">Chartist Charts</a>
                                        </li>
                                        <li>
                                            <a href="charts-sparklines.html">Sparkline Charts</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarMaps" data-bs-toggle="collapse">
                                    <i class="mdi mdi-map-outline"></i>
                                    <span> Maps </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarMaps">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="maps-google.html">Google Maps</a>
                                        </li>
                                        <li>
                                            <a href="maps-vector.html">Vector Maps</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>

                            <li>
                                <a href="#sidebarMultilevel" data-bs-toggle="collapse">
                                    <i class="mdi mdi-share-variant"></i>
                                    <span> Multi Level </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarMultilevel">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="#sidebarMultilevel2" data-bs-toggle="collapse">
                                                Second Level <span class="menu-arrow"></span>
                                            </a>
                                            <div class="collapse" id="sidebarMultilevel2">
                                                <ul class="nav-second-level">
                                                    <li>
                                                        <a href="javascript: void(0);">Item 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="javascript: void(0);">Item 2</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>

                                        <li>
                                            <a href="#sidebarMultilevel3" data-bs-toggle="collapse">
                                                Third Level <span class="menu-arrow"></span>
                                            </a>
                                            <div class="collapse" id="sidebarMultilevel3">
                                                <ul class="nav-second-level">
                                                    <li>
                                                        <a href="javascript: void(0);">Item 1</a>
                                                    </li>
                                                    <li>
                                                        <a href="#sidebarMultilevel4" data-bs-toggle="collapse">
                                                            Item 2 <span class="menu-arrow"></span>
                                                        </a>
                                                        <div class="collapse" id="sidebarMultilevel4">
                                                            <ul class="nav-second-level">
                                                                <li>
                                                                    <a href="javascript: void(0);">Item 1</a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript: void(0);">Item 2</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>

                    </div>
                    <!-- End Sidebar -->

                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->
            
            <!-- ============================================================== -->
            <!-- Start Page Content here -->
            <!-- ============================================================== -->

            <div class="content-page">
                <div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="col-12 table-responsive">
                                            <button class="btn btn-primary d-flex float-end mb-1" data-bs-toggle="modal" data-bs-target="#addstudent"><i class="mdi mdi-plus"></i> Add Student</button>
                                            
                                            <!--  Add Modal -->
                                            <div class="modal fade" id="addstudent" tabindex="-1" role="dialog" aria-hidden="true">
                                                <div class="modal-dialog modal-lg">
                                                    <div class="modal-content modal-dialog-scrollable">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="standard-modalLabel">Add Student</h4>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        
                                                        <form action="../../php/register-student.php" method="post">
                                                            <div class="modal-body text-start mx-4">

                                                                <input type="hidden" class="form-control" name="control_no" id="control_no">

                                                                <!-- PERSONAL INFORMATION -->
                                                                <div>
                                                                    <p class="fw-bold text-primary mb-0">Personal Information</p>
                                                                    <hr class="mt-2">
                                                                    <div class="row">
                                                                        <div class="col-md-4 col-sm-12">
                                                                            <label class="form-label">First Name</label>
                                                                            <input type="text" class="form-control" name="fname" id="fname" placeholder="Not Specified" required>
                                                                        </div>

                                                                        <div class="col-md-4 col-sm-12">
                                                                            <label class="form-label">Middle Name</label>
                                                                            <input type="text" class="form-control" name="mname" id="mname" placeholder="Not Specified">
                                                                        </div>

                                                                        <div class="col-md-4 col-sm-12">
                                                                            <label class="form-label">Last Name</label>
                                                                            <input type="text" class="form-control" name="lname" id="lname" placeholder="Not Specified" required>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mt-3">
                                                                        <div class="col-md-3 col-sm-12">
                                                                            <label class="form-label">Gender</label>
                                                                            <select class="form-select" name="gender" id="gender" placeholder="Not Specified">
                                                                                <option>Male</option>
                                                                                <option>Female</option>
                                                                            </select>
                                                                        </div>

                                                                        <div class="col-md-3 col-sm-12">
                                                                            <label class="form-label">Civil Status</label>
                                                                            <select class="form-select" name="civil_stat" id="civil_stat">
                                                                                <option>Single</option>
                                                                                <option>Married</option>
                                                                                <option>Divorced</option>
                                                                                <option>Widowed</option>
                                                                            </select>
                                                                        </div>

                                                                        <div class="col-md-3 col-sm-12">
                                                                            <label class="form-label">Nationality</label>
                                                                            <input type="text" class="form-control" name="nationality" id="nationality" placeholder="Not Specified" required>
                                                                        </div>

                                                                        <div class="col-md-3 col-sm-12">
                                                                            <label class="form-label">Birth Date</label>
                                                                            <input type="date" class="form-control" name="bday" id="bday" placeholder="Not Specified" required>
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mt-3">
                                                                        <div class="col-md-4 col-sm-12">
                                                                            <label class="form-label">Birth Place</label>
                                                                            <input type="text" class="form-control" name="bplace" id="bplace" placeholder="Not Specified">
                                                                        </div>

                                                                        <div class="col-md-4 col-sm-12">
                                                                            <label class="form-label">Religion</label>
                                                                            <select class="form-select" name="religion" id="religion">
                                                                                <option selected>Roman Catholic</option>
                                                                                <option>Aglipayan</option>
                                                                                <option>Evangelicals</option>
                                                                                <option>Iglesia ni Cristo</option>
                                                                                <option>Protestant</option>
                                                                                <option>Others</option>
                                                                            </select>
                                                                        </div>

                                                                        <div class="col-md-4 col-sm-12">
                                                                            <label class="form-label">Address</label>
                                                                            <input type="text" class="form-control" name="address" id="address" placeholder="Not Specified">
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mt-3">
                                                                        <div class="col-md-4 col-sm-12">
                                                                            <label class="form-label">Contact No.</label>
                                                                            <input type="text" class="form-control" name="contact" id="contact" placeholder="Not Specified">
                                                                        </div>

                                                                        <div class="col-md-8 col-sm-12">
                                                                            <label class="form-label">Email Address</label>
                                                                            <input type="email" class="form-control" name="emaiadd" id="emaiadd" placeholder="Not Specified">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- PERSONAL INFORMATION END -->

                                                                <!-- SCHOOL INFORMATION -->
                                                                <div>
                                                                    <p class="fw-bold text-primary mt-4 mb-0">School Information</p>
                                                                    <hr class="mt-2">

                                                                    <div class="row">
                                                                        <div class="col-md-6 col-sm-12">
                                                                            <label class="form-label">Year Level</label>
                                                                            <select class="form-select" name="grade_level">
                                                                                <?php 
                                                                                    $sql = mysqli_query($config, "SELECT * FROM year_level");
                                                                                    while($grade = mysqli_fetch_array($sql)) {
                                                                                ?>
                                                                                <option value="<?php echo $grade['year_code'] ?>"><?php echo $grade['year_name'] ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>

                                                                        <div class="col-md-6 col-sm-12">
                                                                            <label class="form-label">Section</label>
                                                                            <select class="form-select" name="section">
                                                                                <?php 
                                                                                    $sql = mysqli_query($config, "SELECT * FROM section");
                                                                                    while($section = mysqli_fetch_array($sql)) {
                                                                                ?>
                                                                                <option value="<?php echo $section['section_code'] ?>"><?php echo $section['section_name'] ?></option>
                                                                                <?php } ?>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- SCHOOL INFORMATION END -->

                                                                <!-- FAMILY INFORMATION -->
                                                                <div>
                                                                    <p class="fw-bold mt-4 text-primary mb-0">Family Information</p>
                                                                    <hr class="mt-2">

                                                                    <div class="row">
                                                                        <div class="col-md-6 col-sm-12">
                                                                            <label class="form-label">Mother Full Name</label>
                                                                            <input type="text" class="form-control" name="mother" id="mother" placeholder="Not Specified">
                                                                        </div>

                                                                        <div class="col-md-6 col-sm-12">
                                                                            <label class="form-label">Father Full Name</label>
                                                                            <input type="text" class="form-control" name="father" id="father" placeholder="Not Specified">
                                                                        </div>
                                                                    </div>

                                                                    <div class="row mt-2">
                                                                        <div class="col-md-6 col-sm-12">
                                                                            <label class="form-label">Guardian Full Name</label>
                                                                            <input type="text" class="form-control" name="guardian" id="guardian" placeholder="Not Specified">
                                                                        </div>

                                                                        <div class="col-md-6 col-sm-12">
                                                                            <label class="form-label">Emergency Contact No.</label>
                                                                            <input type="number" class="form-control" name="emergency" id="emergency" placeholder="Not Specified">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <!-- FAMILY INFORMATION END -->

                                                            </div>
                                                            
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                <button type="submit" name="register" class="btn btn-primary">Submit</button>
                                                            </div>
                                                        </form>

                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                            
                                            <table class="table table-striped w-100 p-3">
                                                <thead>
                                                <tr class="bg-success text-white">
                                                    <th class="text-center">Profile</th>
                                                    <th class="text-center">Control No.</th>

                                                    <th class="text-center" hidden>First Name</th>
                                                    <th class="text-center" hidden>Middle Name</th>
                                                    <th class="text-center" hidden>Last Name</th>
                                                    <th class="text-center" hidden>Gender</th>
                                                    <th class="text-center" hidden>Civil Status</th>
                                                    <th class="text-center" hidden>Nationality</th>
                                                    <th class="text-center" hidden>Birth Date</th>
                                                    <th class="text-center" hidden>Birth Place</th>
                                                    <th class="text-center" hidden>Religion</th>
                                                    <th class="text-center" hidden>Address</th>
                                                    <th class="text-center" hidden>Contact No.</th>
                                                    <th class="text-center" hidden>Email</th>
                                                    <th class="text-center" hidden>Father</th>
                                                    <th class="text-center" hidden>Mother</th>
                                                    <th class="text-center" hidden>Guardian</th>
                                                    <th class="text-center" hidden>Emergency</th>
                                                    <th class="text-center" hidden>Year Level</th>
                                                    <th class="text-center" hidden>Section</th>

                                                    <th class="text-center">Name</th>
                                                    <th class="text-center">Status</th>
                                                    <th class="text-center">Action</th>
                                                </tr>
                                                </thead>
        
        
                                                <tbody>
                                                <?php
                                                    $fetch_student = mysqli_query($config, "SELECT * FROM account_info WHERE acc_priv = 'Student' AND acc_status = 'Active'");

                                                    while($student = mysqli_fetch_array($fetch_student)) {
                                                ?>
                                                <tr>
                                                    <td class="text-center p-3"><?php echo '<img class="img-fluid rounded-circle" src="data:image/jpg;charset=utf8;base64,'.base64_encode($student['profile_picture']).'"  width="25px">'; ?> </td>
                                                    <td class="p-3 text-center"><?php echo $student['control_no']; ?></td>

                                                    <td class="p-3 text-center" hidden><?php echo $student['first_name']; ?></td>
                                                    <td class="p-3 text-center" hidden><?php echo $student['middle_name']; ?></td>
                                                    <td class="p-3 text-center" hidden><?php echo $student['last_name']; ?></td>
                                                    <td class="p-3 text-center" hidden><?php echo $student['gender']; ?></td>
                                                    <td class="p-3 text-center" hidden><?php echo $student['civil_status']; ?></td>
                                                    <td class="p-3 text-center" hidden><?php echo $student['nationality']; ?></td>
                                                    <td class="p-3 text-center" hidden><?php echo $student['birth_date']; ?></td>
                                                    <td class="p-3 text-center" hidden><?php echo $student['birth_place']; ?></td>
                                                    <td class="p-3 text-center" hidden><?php echo $student['religion']; ?></td>
                                                    <td class="p-3 text-center" hidden><?php echo $student['address']; ?></td>
                                                    <td class="p-3 text-center" hidden><?php echo $student['contact_no']; ?></td>
                                                    <td class="p-3 text-center" hidden><?php echo $student['email_address']; ?></td>
                                                    <td class="p-3 text-center" hidden><?php echo $student['father_name']; ?></td>
                                                    <td class="p-3 text-center" hidden><?php echo $student['mother_name']; ?></td>
                                                    <td class="p-3 text-center" hidden><?php echo $student['guardian_name']; ?></td>
                                                    <td class="p-3 text-center" hidden><?php echo $student['guardian_number']; ?></td>
                                                    <td class="p-3 text-center" hidden><?php echo $student['year_code']; ?></td>
                                                    <td class="p-3 text-center" hidden><?php echo $student['section_code']; ?></td>

                                                    <td class="p-3 text-center"><?php echo $student['first_name']; echo " "; echo $student['last_name']; ?> </td>
                                                    <td class="p-3 text-center"><?php echo $student['acc_status']; ?></td>

                                                    <td class="p-3 text-center">
                                                          <div class="col-12">
                                                            <a class="text-decoration-none text-primary me-2 edit-button" href="#" data-bs-toggle="modal" data-bs-target="#editinfo">
                                                              <i class="mdi mdi-pencil-outline"></i>
                                                            </a>

                                                            <!--  Edit Modal -->
                                                            <div class="modal fade" id="editinfo" tabindex="-1" role="dialog" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg">
                                                                    <div class="modal-content modal-dialog-scrollable">
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title" id="standard-modalLabel">Edit Profile</h4>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        
                                                                        <form action="../../php/update-admin.php" method="post">
                                                                            <div class="modal-body text-start mx-4">

                                                                                <input type="hidden" class="form-control" name="control_no" id="control_no">

                                                                                <!-- PERSONAL INFORMATION -->
                                                                                <div>
                                                                                    <p class="fw-bold text-primary mb-0">Personal Information</p>
                                                                                    <hr class="mt-2">
                                                                                    <div class="row">
                                                                                        <div class="col-md-4 col-sm-12">
                                                                                            <label class="form-label">First Name</label>
                                                                                            <input type="text" class="form-control" name="fname" id="fname" placeholder="Not Specified">
                                                                                        </div>

                                                                                        <div class="col-md-4 col-sm-12">
                                                                                            <label class="form-label">Middle Name</label>
                                                                                            <input type="text" class="form-control" name="mname" id="mname" placeholder="Not Specified">
                                                                                        </div>

                                                                                        <div class="col-md-4 col-sm-12">
                                                                                            <label class="form-label">Last Name</label>
                                                                                            <input type="text" class="form-control" name="lname" id="lname" placeholder="Not Specified">
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="row mt-3">
                                                                                        <div class="col-md-3 col-sm-12">
                                                                                            <label class="form-label">Gender</label>
                                                                                            <select class="form-select" name="gender" id="gender" placeholder="Not Specified">
                                                                                                <option>Male</option>
                                                                                                <option>Female</option>
                                                                                            </select>
                                                                                        </div>

                                                                                        <div class="col-md-3 col-sm-12">
                                                                                            <label class="form-label">Civil Status</label>
                                                                                            <select class="form-select" name="civil_stat" id="civil_stat">
                                                                                                <option>Single</option>
                                                                                                <option>Married</option>
                                                                                                <option>Divorced</option>
                                                                                                <option>Widowed</option>
                                                                                            </select>
                                                                                        </div>

                                                                                        <div class="col-md-3 col-sm-12">
                                                                                            <label class="form-label">Nationality</label>
                                                                                            <input type="text" class="form-control" name="nationality" id="nationality" placeholder="Not Specified">
                                                                                        </div>

                                                                                        <div class="col-md-3 col-sm-12">
                                                                                            <label class="form-label">Birth Date</label>
                                                                                            <input type="date" class="form-control" name="bday" id="bday" placeholder="Not Specified">
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="row mt-3">
                                                                                        <div class="col-md-4 col-sm-12">
                                                                                            <label class="form-label">Birth Place</label>
                                                                                            <input type="text" class="form-control" name="bplace" id="bplace" placeholder="Not Specified">
                                                                                        </div>

                                                                                        <div class="col-md-4 col-sm-12">
                                                                                            <label class="form-label">Religion</label>
                                                                                            <select class="form-select" name="religion" id="religion">
                                                                                                <option selected>Roman Catholic</option>
                                                                                                <option>Aglipayan</option>
                                                                                                <option>Evangelicals</option>
                                                                                                <option>Iglesia ni Cristo</option>
                                                                                                <option>Protestant</option>
                                                                                                <option>Others</option>
                                                                                            </select>
                                                                                        </div>

                                                                                        <div class="col-md-4 col-sm-12">
                                                                                            <label class="form-label">Address</label>
                                                                                            <input type="text" class="form-control" name="address" id="address" placeholder="Not Specified">
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="row mt-3">
                                                                                        <div class="col-md-4 col-sm-12">
                                                                                            <label class="form-label">Contact No.</label>
                                                                                            <input type="text" class="form-control" name="contact" id="contact" placeholder="Not Specified">
                                                                                        </div>

                                                                                        <div class="col-md-8 col-sm-12">
                                                                                            <label class="form-label">Email Address</label>
                                                                                            <input type="email" class="form-control" name="emaiadd" id="emaiadd" placeholder="Not Specified">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- PERSONAL INFORMATION END -->

                                                                                <!-- SCHOOL INFORMATION -->
                                                                                <div>
                                                                                    <p class="fw-bold text-primary mt-4 mb-0">School Information</p>
                                                                                    <hr class="mt-2">

                                                                                    <div class="row">
                                                                                        <div class="col-md-6 col-sm-12">
                                                                                            <label class="form-label">Year Level</label>
                                                                                            <input type="text" class="form-control text-muted" name="grade" id="grade" readonly>
                                                                                        </div>

                                                                                        <div class="col-md-6 col-sm-12">
                                                                                            <label class="form-label">Section</label>
                                                                                            <input type="text" class="form-control text-muted" name="section" id="section" readonly>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- SCHOOL INFORMATION END -->

                                                                                <!-- FAMILY INFORMATION -->
                                                                                <div>
                                                                                    <p class="fw-bold mt-4 text-primary mb-0">Family Information</p>
                                                                                    <hr class="mt-2">

                                                                                    <div class="row">
                                                                                        <div class="col-md-6 col-sm-12">
                                                                                            <label class="form-label">Mother Full Name</label>
                                                                                            <input type="text" class="form-control" name="mother" id="mother" placeholder="Not Specified">
                                                                                        </div>

                                                                                        <div class="col-md-6 col-sm-12">
                                                                                            <label class="form-label">Father Full Name</label>
                                                                                            <input type="text" class="form-control" name="father" id="father" placeholder="Not Specified">
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="row mt-2">
                                                                                        <div class="col-md-6 col-sm-12">
                                                                                            <label class="form-label">Guardian Full Name</label>
                                                                                            <input type="text" class="form-control" name="guardian" id="guardian" placeholder="Not Specified">
                                                                                        </div>

                                                                                        <div class="col-md-6 col-sm-12">
                                                                                            <label class="form-label">Emergency Contact No.</label>
                                                                                            <input type="number" class="form-control" name="emergency" id="emergency" placeholder="Not Specified">
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <!-- FAMILY INFORMATION END -->

                                                                            </div>
                                                                            
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                                                                                <button type="submit" name="update" class="btn btn-primary">Save changes</button>
                                                                            </div>
                                                                        </form>

                                                                    </div><!-- /.modal-content -->
                                                                </div><!-- /.modal-dialog -->
                                                            </div><!-- /.modal -->

                                                            <a class="text-decoration-none text-danger delete-button me-2" href="#" data-bs-toggle="modal" data-bs-target="#deletemodal">
                                                              <i class="mdi mdi-delete-outline"></i>
                                                            </a>

                                                            <!-- Delete Modal -->
                                                            <div class="modal fade" id="deletemodal" tabindex="-1" role="dialog" aria-hidden="true">
                                                            <div class="modal-dialog modal-dialog-centered">
                                                                <div class="modal-content">

                                                                <div class="modal-header">
                                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                </div>

                                                                <form action="../../php/delete-admin.php" method="post">
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

                                                            <a class="text-decoration-none text-success print-button me-2" href="#" data-bs-toggle="modal" data-bs-target="#printmodal" title="Print">
                                                              <i class="mdi mdi-printer"></i>
                                                            </a>

                                                            <!-- Print Modal -->
                                                            <div class="modal fade" id="printmodal" tabindex="-1" role="dialog" aria-hidden="true">
                                                                <div class="modal-dialog modal-md modal-dialog-centered">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h4 class="modal-title" id="myLargeModalLabel">Print Document</h4>
                                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                                        </div>
                                                                        <div class="modal-body text-start px-4">

                                                                            <form action="../../php/print-document.php" method="post">

                                                                                <!-- Hidden Textbox -->
                                                                                <input type="hidden" name="select-no" id="select-no">

                                                                                <label class="form-label">Select Document to Print</label>
                                                                                <select class="form-select" name="document" id="document">
                                                                                    <option selected>Select Document</option>

                                                                                    <?php foreach ($document as $document) { ?>

                                                                                    <option value=<?php echo $document['document_no'] ?>><?php echo $document['document_name'] ?></option>
                                                                                    
                                                                                    <?php } ?>
                                                                                </select>

                                                                                <div class="text-end">
                                                                                    <button type="button" class="btn btn-primary waves-effect waves-light my-2"><i class="mdi mdi-pencil me-1"></i>Edit</button>
                                                                                    <button type="submit" name="print" id="print" class="btn btn-success waves-effect waves-light my-2"><i class="mdi mdi-printer me-1"></i>Print Document</button>
                                                                                </div>
                                                                            </form>

                                                                        </div>
                                                                    </div><!-- /.modal-content -->
                                                                </div><!-- /.modal-dialog -->
                                                            </div><!-- /.modal -->
                                                          </div>
                                                      </td>
                                                </tr>

                                                <?php } ?>
                                                
                                                </tbody>
                                            </table>
                                        </div> <!-- end col -->
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
                            <div class="col-md-6">
                                <script>document.write(new Date().getFullYear())</script> &copy; Adminto theme by <a href="">Coderthemes</a> 
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

        <!-- third party js -->
        <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js"></script>
        <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.flash.min.js"></script>
        <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
        <script src="assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>
        <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
        <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
        <!-- third party js ends -->

        <!-- Datatables init -->
        <script src="assets/js/pages/datatables.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.min.js"></script>

        <!-- Print Modal -->
        <script type="text/javascript">
          $(document).ready(function(){
            $('.print-button').on('click', function(){

              $('#printmodal').modal('show');

              $tr = $(this).closest('tr');

              var data =  $tr.children("td").map(function(){
                return $(this).text();
              }).get();

              console.log(data);

              $('#select-no').val(data[1]);
            })
          });
        </script>

        <!-- Edit Modal -->
        <script type="text/javascript">
          $(document).ready(function(){
            $('.edit-button').on('click', function(){

              $('#editinfo').modal('show');

              $tr = $(this).closest('tr');

              var data =  $tr.children("td").map(function(){
                return $(this).text();
              }).get();

              console.log(data);

              $('#control_no').val(data[1]);
              $('#fname').val(data[2]);
              $('#mname').val(data[3]);
              $('#lname').val(data[4]);
              $('#gender').val(data[5]);
              $('#civil_stat').val(data[6]);
              $('#nationality').val(data[7]);
              $('#bday').val(data[8]);
              $('#bplace').val(data[9]);
              $('#religion').val(data[10]);
              $('#address').val(data[11]);
              $('#contact').val(data[12]);
              $('#emaiadd').val(data[13]);

              $('#grade').val(data[18]);
              $('#section').val(data[19]);

              $('#mother').val(data[15]);
              $('#father').val(data[14]);
              $('#guardian').val(data[16]);
              $('#emergency').val(data[17]);
            })
          });
        </script>

        <!-- Delete -->
        <script type="text/javascript">
          $(document).ready(function(){
            $('.delete-button').on('click', function(){

              $('#deletemodal').modal('show');

              $tr = $(this).closest('tr');

              var data =  $tr.children("td").map(function(){
                return $(this).text();
              }).get();

              console.log(data);

              $('#delete_number').val(data[1]);
            })
          });
        </script>
        
    </body>
</html>