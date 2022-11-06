<?php
    include_once("../php/database.php");
    $no = $_GET['no'];

    $sql = mysqli_query($config, "SELECT * FROM account_info WHERE control_no = '$no'");

    $result = mysqli_fetch_array($sql);

    $name = $result['first_name'] . " " . $result['last_name'];

?>


<html>
    <head>
        <title>Print Document</title>

        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/img/pgmnhs-logo.ico">
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <style> 
            @font-face {
            font-family: CourierPS;
            src: url(courierpsbold.ttf);
            }

            div {
            font-family: CourierPS;
            }
        </style>

    </head>

    <body class="m-2 mt-5 p-2 pt-0" onload="window.print()">

        <!-- Header -->
        <div class="row text-center">
            <div class="col-2 text-end">
                <img src="divison-logo.png" width="100px">
            </div>

            <div class="col-8">
                <h6>Republic of the Philippines</h6>
                <h6>Department of Education</h6>
                <h6>Region IV - A CALABARZON</h6>
                <h6>Division of Laguna</h6>
                <h5>PEDRO GUEVARA MEMORIAL NATIONAL HIGH SCHOOL</h5>
                <h6>Santa Cruz</h6>
            </div>

            <div class="col-2 text-start">
                <img src="pgmnhs-logo.png" width="100px">
            </div>
        </div>
        <!-- Header End -->

        <!-- Body -->
        <div class="row">

            <div class="row">
                <div class="col-4">
                    
                </div>

                <div class="col-4">

                </div>

                <div class="col-4 mt-5 pe-5 text-end">
                    <h6><?php echo date("F j, Y"); ?></h6>
                </div>
            </div>

            <div class="row mt-4 text-center">
                <h4 class="text-decoration-underline">C E R T I F I C A T I  O N</h4>
            </div>

            <div class="row mt-4 ps-5 text-start">
                <h6>TO WHOM IT MAY CONCERN:</h6><br>
                <h6 class="justify-content-center">&nbsp;&nbsp;&nbsp; 
                    This is to clarify that as per record/s in this Office, <br>
                    <?php echo $name ?> has satisfactorily completed the requirements for Grade 10 S.Y. 2021-2022.<br><br>

                    &nbsp;&nbsp;&nbsp;
                    This further certifies that during his/her stay in this school, he/she was observed to have obeyed all rules 
                    and regulations, and thus presumed to have obtained good moral character character.<br><br>

                    &nbsp;&nbsp;&nbsp;
                    Issued upon request of the above-named for whatever legal purpose it may serve.
                </h6>
            </div>

            <div class="row">
                <div class="col-4 text-center mt-5 pe-5">
                </div>

                <div class="col-8 text-center mt-5 pe-5">
                    <h6>Santiago F. Fajilago Jr., Ed. D</h6>
                    <h6>Principal IV</h6>
                </div>
            </div>

            <div class="row">
                <div class="text-start mt-5 ps-5">
                    <h6>Not Valid Without<br>School Dry Seal</h6>
                </div>
            </div>

        </div>
        <!-- Body End -->
    </body>
</html>