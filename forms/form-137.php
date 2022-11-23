<!-- <?php
    include_once("../php/database.php");
    $no = $_GET['no'];

    $sql = mysqli_query($config, "SELECT * FROM account_info WHERE control_no = '$no'");

    $result = mysqli_fetch_array($sql);

    $name = $result['first_name'] . " " . $result['last_name'];

?> -->

<html>
	<head>
		<title>Print Document</title>

		<!-- App favicon -->
        <link rel="shortcut icon" href="../assets/img/pgmnhs-logo.ico">
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <style> 
            @font-face {
            font-family: Times New Roman;
            src: url(times new roman bold.ttf);
            }

            div {
            font-family: Times New Roman;
            }
        </style>
	</head>
		<body style="background-color: rgb(229,229,229);">
			<div class="container-fluid py-3">
				<div class="col-lg-10 mx-auto">
					<div class="card">
						<div class="card-body">
					
						<p class="text-center border border-dark h4 fw-bold">
		           		 SECONDARY STUDENT'S PERMANENT RECORD
		        		</p>

		        		<div class="row">
		        			<div class="col-lg-6"> 
			        			<div class="input-group border border-dark">
				        			<span class="input-text fs-5 mt-1 ms-2 me-4">Name:</span>
				        			<input class="form-control">
				        		</div>
			        		</div>
			        		<div class="col-lg-6"> 
			        			<div class="input-group border border-dark">
				        			<span class="input-text fs-5 mt-1 ms-2 me-4">Birthdate:</span>
				        			<input class="form-control">
				        		</div>
		        			</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-lg-6"> 
			        			<div class="input-group border border-dark">
				        			<span class="input-text fs-5 mt-1 ms-2 me-4">LRN:</span>
				        			<input class="form-control">
				        		</div>
			        		</div>
			        		<div class="col-lg-6"> 
			        			<div class="input-group border border-dark">
				        			<span class="input-text fs-5 mt-1 ms-2 me-4">Birtplace:</span>
				        			<input class="form-control">
				        		</div>
		        			</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-lg-6"> 
			        			<div class="input-group border border-dark">
				        			<span class="input-text fs-5 mt-1 ms-2 me-4">Parents/Guardian:</span>
				        			<input class="form-control">
				        		</div>
			        		</div>
			        		<div class="col-lg-6"> 
			        			<div class="input-group border border-dark">
				        			<span class="input-text fs-5 mt-1 ms-2 me-4">Address:</span>
				        			<input class="form-control">
				        		</div>
		        			</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-lg-6"> 
			        			<div class="input-group border border-dark">
				        			<span class="input-text fs-5 mt-1 ms-2 me-4">Elem Course Completed at:</span>
				        			<input class="form-control">
				        		</div>
			        		</div>
			        		<div class="col-lg-3"> 
			        			<div class="input-group border border-dark">
				        			<span class="input-text fs-5 mt-1 ms-2 me-4">Year:</span>
				        			<input class="form-control">
				        		</div>
		        			</div>
		        			<div class="col-lg-3"> 
			        			<div class="input-group border border-dark">
				        			<span class="input-text fs-5 mt-1 ms-2 me-4">Gen. Ave.:</span>
				        			<input class="form-control">
				        		</div>
		        			</div>
		        		</div>

		        		<div class="row py-3">
		        			<div class="col-lg-6">
		        				<table class="border border-dark">
		        					<thead>
		        						<tr>
		        							<th><b><span class="ms-2">School:</span></b></th>
		        							<th class="border border-dark w-100 text-center" colspan="3">P.G.M.N.H.S</th>
		        						</tr>
		        						
		        					</thead>
		        					<thead>
		        						<tr>
		        							<th class="border border-dark w-25"><b><span class="ms-2">Curriculum SY:</span></b></th>
		        							<th class="border border-dark w-100 text-center" colspan="3">2020-2021</th>
		        						</tr>
		        					</thead>
		        					<tbody>
		        						<tr>
			        						<th class="border border-dark">
			        						<span class="ms-2">Grade 7
			        						<span class="ms-2">SUBJECTS
			        						</span>
			        						</span>
			        						</th>
			        						<th class="border border-dark text-center" colspan="2">
			        						Final Rating
			        						</th>
			        						<th class="border border-dark text-center">
			        						Action Taken
			        						</th>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2">Filipino</span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2">English</span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2">Mathematics</span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2">Science</span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2">Araling Panlipunan</span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2">Filipino</span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2">Technology & Livelihood Educ</span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2">MAPEH</span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2"><ul>
		        								<li>Music</li>
		        							</ul></span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2"><ul>
		        								<li>Arts</li>
		        							</ul></span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2"><ul>
		        								<li>Physical Education</li>
		        							</ul></span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2"><ul>
		        								<li>Health</li>
		        							</ul></span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2">Education sa Pagpapakatao (EsP)</span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark">&nbsp</td>
		        							<td class="border border-dark w-25">&nbsp</td>
		        							<td class="border border-dark w-25">&nbsp</td>
		        							<td class="border border-dark">&nbsp</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark text-end">Gen. Ave.</td>
		        							<td class="border border-dark w-25 text-center">90</td>
		        							<td class="border border-dark w-25 text-center">A</td>
		        							<td class="border border-dark">&nbsp</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark">Total units earned:</td>
		        							<td class="border border-dark w-25 text-center">&nbsp</td>
		        							<td class="border border-dark w-25 text-center">&nbsp</td>
		        							<td class="border border-dark">&nbsp</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark">No. of school days in a year:</td>
		        							<td class="border border-dark w-25 text-center">&nbsp</td>
		        							<td class="border border-dark w-25 text-center">&nbsp</td>
		        							<td class="border border-dark text-center">201</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark">No. of present:</td>
		        							<td class="border border-dark w-25 text-center">&nbsp</td>
		        							<td class="border border-dark w-25 text-center">&nbsp</td>
		        							<td class="border border-dark text-center">201</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark">Classified as:</td>
		        							<td class="border border-dark w-25 text-center" colspan="3">Grade 8</td>
		        						</tr>
		        					</tbody>
		        				</table>
		        			</div>

		        			<div class="col-lg-6">
		        				<table class="border border-dark">
		        					<thead>
		        						<tr>
		        							<th><b><span class="ms-2">School:</span></b></th>
		        							<th class="border border-dark w-100 text-center" colspan="3">P.G.M.N.H.S</th>
		        						</tr>
		        						
		        					</thead>
		        					<thead>
		        						<tr>
		        							<th class="border border-dark w-25"><b><span class="ms-2">Curriculum SY:</span></b></th>
		        							<th class="border border-dark w-100 text-center" colspan="3">2022-2022</th>
		        						</tr>
		        					</thead>
		        					<tbody>
		        						<tr>
			        						<th class="border border-dark">
			        						<span class="ms-2">Grade 8
			        						<span class="ms-2">SUBJECTS
			        						</span>
			        						</span>
			        						</th>
			        						<th class="border border-dark text-center" colspan="2">
			        						Final Rating
			        						</th>
			        						<th class="border border-dark text-center">
			        						Action Taken
			        						</th>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2">Filipino</span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2">English</span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2">Mathematics</span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2">Science</span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2">Araling Panlipunan</span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2">Filipino</span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2">Technology & Livelihood Educ</span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2">MAPEH</span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2"><ul>
		        								<li>Music</li>
		        							</ul></span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2"><ul>
		        								<li>Arts</li>
		        							</ul></span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2"><ul>
		        								<li>Physical Education</li>
		        							</ul></span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2"><ul>
		        								<li>Health</li>
		        							</ul></span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2">Education sa Pagpapakatao (EsP)</span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark">&nbsp</td>
		        							<td class="border border-dark w-25">&nbsp</td>
		        							<td class="border border-dark w-25">&nbsp</td>
		        							<td class="border border-dark">&nbsp</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark text-end">Gen. Ave.</td>
		        							<td class="border border-dark w-25 text-center">90</td>
		        							<td class="border border-dark w-25 text-center">A</td>
		        							<td class="border border-dark">&nbsp</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark">Total units earned:</td>
		        							<td class="border border-dark w-25 text-center">&nbsp</td>
		        							<td class="border border-dark w-25 text-center">&nbsp</td>
		        							<td class="border border-dark">&nbsp</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark">No. of school days in a year:</td>
		        							<td class="border border-dark w-25 text-center">&nbsp</td>
		        							<td class="border border-dark w-25 text-center">&nbsp</td>
		        							<td class="border border-dark text-center">201</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark">No. of present:</td>
		        							<td class="border border-dark w-25 text-center">&nbsp</td>
		        							<td class="border border-dark w-25 text-center">&nbsp</td>
		        							<td class="border border-dark text-center">201</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark">Classified as:</td>
		        							<td class="border border-dark w-25 text-center" colspan="3">Grade 9</td>
		        						</tr>
		        					</tbody>
		        				</table>



		        			
		        		</div>

	
    				</div>
    					<div class="row py-3">
		        			<div class="col-lg-6">
		        				<table class="border border-dark">
		        					<thead>
		        						<tr>
		        							<th><b><span class="ms-2">School:</span></b></th>
		        							<th class="border border-dark w-100 text-center" colspan="3">P.G.M.N.H.S</th>
		        						</tr>
		        						
		        					</thead>
		        					<thead>
		        						<tr>
		        							<th class="border border-dark w-25"><b><span class="ms-2">Curriculum SY:</span></b></th>
		        							<th class="border border-dark w-100 text-center" colspan="3">2022-2023</th>
		        						</tr>
		        					</thead>
		        					<tbody>
		        						<tr>
			        						<th class="border border-dark">
			        						<span class="ms-2">Grade 7
			        						<span class="ms-2">SUBJECTS
			        						</span>
			        						</span>
			        						</th>
			        						<th class="border border-dark text-center" colspan="2">
			        						Final Rating
			        						</th>
			        						<th class="border border-dark text-center">
			        						Action Taken
			        						</th>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2">Filipino</span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2">English</span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2">Mathematics</span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2">Science</span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2">Araling Panlipunan</span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2">Filipino</span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2">Technology & Livelihood Educ</span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2">MAPEH</span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2"><ul>
		        								<li>Music</li>
		        							</ul></span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2"><ul>
		        								<li>Arts</li>
		        							</ul></span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2"><ul>
		        								<li>Physical Education</li>
		        							</ul></span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2"><ul>
		        								<li>Health</li>
		        							</ul></span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2">Education sa Pagpapakatao (EsP)</span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark">&nbsp</td>
		        							<td class="border border-dark w-25">&nbsp</td>
		        							<td class="border border-dark w-25">&nbsp</td>
		        							<td class="border border-dark">&nbsp</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark text-end">Gen. Ave.</td>
		        							<td class="border border-dark w-25 text-center">90</td>
		        							<td class="border border-dark w-25 text-center">A</td>
		        							<td class="border border-dark">&nbsp</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark">Total units earned:</td>
		        							<td class="border border-dark w-25 text-center">&nbsp</td>
		        							<td class="border border-dark w-25 text-center">&nbsp</td>
		        							<td class="border border-dark">&nbsp</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark">No. of school days in a year:</td>
		        							<td class="border border-dark w-25 text-center">&nbsp</td>
		        							<td class="border border-dark w-25 text-center">&nbsp</td>
		        							<td class="border border-dark text-center">201</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark">No. of present:</td>
		        							<td class="border border-dark w-25 text-center">&nbsp</td>
		        							<td class="border border-dark w-25 text-center">&nbsp</td>
		        							<td class="border border-dark text-center">201</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark">Classified as:</td>
		        							<td class="border border-dark w-25 text-center" colspan="3">Grade 10</td>
		        						</tr>
		        					</tbody>
		        				</table>
		        			</div>

		        			<div class="col-lg-6">
		        				<table class="border border-dark">
		        					<thead>
		        						<tr>
		        							<th><b><span class="ms-2">School:</span></b></th>
		        							<th class="border border-dark w-100 text-center" colspan="3">P.G.M.N.H.S</th>
		        						</tr>
		        						
		        					</thead>
		        					<thead>
		        						<tr>
		        							<th class="border border-dark w-25"><b><span class="ms-2">Curriculum SY:</span></b></th>
		        							<th class="border border-dark w-100 text-center" colspan="3">2023-2024</th>
		        						</tr>
		        					</thead>
		        					<tbody>
		        						<tr>
			        						<th class="border border-dark">
			        						<span class="ms-2">Grade 10
			        						<span class="ms-2">SUBJECTS
			        						</span>
			        						</span>
			        						</th>
			        						<th class="border border-dark text-center" colspan="2">
			        						Final Rating
			        						</th>
			        						<th class="border border-dark text-center">
			        						Action Taken
			        						</th>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2">Filipino</span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2">English</span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2">Mathematics</span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2">Science</span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2">Araling Panlipunan</span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2">Filipino</span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2">Technology & Livelihood Educ</span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2">MAPEH</span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2"><ul>
		        								<li>Music</li>
		        							</ul></span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2"><ul>
		        								<li>Arts</li>
		        							</ul></span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2"><ul>
		        								<li>Physical Education</li>
		        							</ul></span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2"><ul>
		        								<li>Health</li>
		        							</ul></span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark"><span class="ms-2">Education sa Pagpapakatao (EsP)</span></td>
		        							<td class="border border-dark text-center w-25">80</td>
		        							<td class="border border-dark text-center w-25"><b>P</b></td>
		        							<td class="border border-dark text-center">Passed</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark">&nbsp</td>
		        							<td class="border border-dark w-25">&nbsp</td>
		        							<td class="border border-dark w-25">&nbsp</td>
		        							<td class="border border-dark">&nbsp</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark text-end">Gen. Ave.</td>
		        							<td class="border border-dark w-25 text-center">90</td>
		        							<td class="border border-dark w-25 text-center">A</td>
		        							<td class="border border-dark">&nbsp</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark">Total units earned:</td>
		        							<td class="border border-dark w-25 text-center">&nbsp</td>
		        							<td class="border border-dark w-25 text-center">&nbsp</td>
		        							<td class="border border-dark">&nbsp</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark">No. of school days in a year:</td>
		        							<td class="border border-dark w-25 text-center">&nbsp</td>
		        							<td class="border border-dark w-25 text-center">&nbsp</td>
		        							<td class="border border-dark text-center">201</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark">No. of present:</td>
		        							<td class="border border-dark w-25 text-center">&nbsp</td>
		        							<td class="border border-dark w-25 text-center">&nbsp</td>
		        							<td class="border border-dark text-center">201</td>
		        						</tr>
		        						<tr>
		        							<td class="border border-dark">Classified as:</td>
		        							<td class="border border-dark w-25 text-center" colspan="3">Grade 11</td>
		        						</tr>
		        					</tbody>
		        				</table>



		        			
		        		</div>

	
    				</div>
    				<div class="row">
		        			<div class="col-lg-12"> 
			        			<div class="input-group border border-dark">
				        			<span class="input-text fs-5 mt-1 ms-2 me-2 w-25 text-center ps-4">I certify that this is a true record of</span>
				        			<input class="form-control text-center">
				        			<span class="input-text fs-5 mt-1 ms-2 me-2 w-25">This student is</span>
				        		</div>
			        		</div>
		        		</div>
		        	<div class="row">
		        			<div class="col-lg-12"> 
			        			<div class="input-group border border-dark">
				        			<span class="input-text fs-5 mt-1 ms-2 me-2 text-center ">eligible on this</span>
				        			<input class="form-control text-center">
				        			<span class="input-text fs-5 mt-1 ms-2 me-2 ">day of</span>
				        			<input class="form-control text-center">
				        			<span class="input-text fs-5 mt-1 ms-2 me-2 ">for admission</span>
				        			<input class="form-control text-center">
				        			<span class="input-text fs-5 mt-1 ms-2 me-2 ">Year, as regular/irregular</span>
				        		</div>
			        		</div>
			        		
		        		</div>
		        		<div class="row">
		        			<div class="col-lg-12">
		        				<div class="input-group border border-dark">
			        			<span class="fs-5 mt-1 ms-2 me-2">student and has no money or property accountability in this school</span>
			        			</div>
			        		</div>
		        		</div>
		        		<div class="row">
		        			<div class="col-lg-12">
		        				<div class="input-group border border-dark">
			        			<span class="input-text fs-5 mt-1 ms-2 me-2">Remarks:</span>
			        			<input class="form-control text-center">
			        			</div>
			        		</div>
		        		</div>
		        		<div class="row mt-5 ">
		        			<div class="col-lg-4" style="margin-left: 25px;">
		        				<div class="input-group border border-dark">
		        				<p class="fs-5 mt-1 ms-2 me-2" style="height: 70;">&nbsp</p>
		        				</div>
		        			</div>
		        			<div class="col-lg-4 " style="margin-left: -25px;">
		        				<div class="input-group border border-dark">
		        				<p class="fs-5 mt-1 ms-2 me-2" style="height: 70;">&nbsp</p>
		        				</div>
		        			</div>
		        			<div class="col-lg-4" style="margin-left: -25px;">
		        				<div class="input-group border border-dark" style="height: 92;">
		        				<span class="fs-5 mt-1 ms-5 text-center" >SANTIAGO F. FAJILAGO, JR.
		        				<br><b>Principal IV</b></br></span>
		        				</div>
		        			</div>
		        		</div>




    			</div>
    		</div>
    	</div>


	</body>
</html>