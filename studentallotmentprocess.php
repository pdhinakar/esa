
<html>
<head>
<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>ESA</title><link rel = "icon" href =  
"mainlogo.png" 
        type = "image/x-icon">
	<link rel="stylesheet" type="text/css" href="styleone.css">
	<link rel="stylesheet" type="text/css" href="styletwo.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>  
<body bgcolor="#e6ccff">
	<div class="topnav">
		            <a href="#" class="active">EXAM SEATING ARRANGEMENT</i></a>
		   
		            <div id="myLinks">
		              
		              <a href="about.php"><i class="fa fa-group" style="color:white"></i>ABOUT US</a>
		              
		            </div>
		            <a style="margin-top: 0px;"; href="javascript:void(0);" class="icon" onclick="myFunction()">
		              <i class="fa fa-bars"></i>
		            </a>
		          </div>

		          <script>
		          function myFunction() {
		            var x = document.getElementById("myLinks");
		            if (x.style.display === "block") {
		              x.style.display = "none";
		            } else {
		              x.style.display = "block";
		            }
		          }
		          </script><br>
	<h1 style="color: #5D055D; text-align: center; height: 50px;">St.Joseph's College Of Engineering</h1>
	
	<h1><i>Student Allotment Process</i></h1>
	
			<form method="post">
				<h1><i>Select the Department:</i></h1>
				<?php
				require_once("connection.php");
				$cse = "CSE";
				$ece="ECE";
				$eee="EEE";
				$mech="MECH";
				$civil="CIVIL";
				$ice="ICE";
				$it="IT";
				$bio="BIO-TECH";
				$chem="CHEM";
				echo '<table border="1" cellpadding="20">';
				echo '<tr>';
				echo '<th style="font-size:30px; color: #5D055D; text-align: center;">Department</th>';
				echo '<th style="font-size:30px; color: #5D055D; text-align: center;">Status</th>';
				echo '</tr>';
				echo '<tr>';
					echo '<td><a style="text-decoration:none;"; href=year.php?dept_name='.$cse.'>CSE</a></td>';
					$s='select dept from student_collection where dept="CSE"';
					$result = mysqli_query($con,$s);
					$num = mysqli_num_rows($result);
              		if($num==0){
              			echo '<td><a style="text-decoration:none;"; href=#>NOT ALLOTED</a></td>';
              		}
              		else{
              			echo '<td><a style="text-decoration:none;"; href=#>ALLOTED</a></td>';
              		}
              		echo '</tr>';
              		echo '<tr>';
              		echo '<td><a style="text-decoration:none;"; href=year.php?dept_name='.$ece.'>ECE</a></td>';
					$s='select dept from student_collection where dept="ECE"';
					$result = mysqli_query($con,$s);
					$num = mysqli_num_rows($result);
              		if($num==0){
              			echo '<td><a style="text-decoration:none;"; href=#>NOT ALLOTED</a></td>';
              		}
              		else{
              			echo '<td><a style="text-decoration:none;"; href=#>ALLOTED</a></td>';
              		}
              		echo '</tr>';
              		echo '<tr>';
              		echo '<td><a style="text-decoration:none;"; href=year.php?dept_name='.$eee.'>EEE</a></td>';
					$s='select dept from student_collection where dept="EEE"';
					$result = mysqli_query($con,$s);
					$num = mysqli_num_rows($result);
              		if($num==0){
              			echo '<td><a style="text-decoration:none;"; href=#>NOT ALLOTED</a></td>';
              		}
              		else{
              			echo '<td><a style="text-decoration:none;"; href=#>ALLOTED</a></td>';
              		}
              		echo '</tr>';
              		echo '<tr>';
              		echo '<td><a style="text-decoration:none;"; href=year.php?dept_name='.$mech.'>MECH</a></td>';
					$s='select dept from student_collection where dept="MECH"';
					$result = mysqli_query($con,$s);
					$num = mysqli_num_rows($result);
              		if($num==0){
              			echo '<td><a style="text-decoration:none;"; href=#>NOT ALLOTED</a></td>';
              		}
              		else{
              			echo '<td><a style="text-decoration:none;"; href=#>ALLOTED</a></td>';
              		}
              		echo '</tr>';
              		echo '<tr>';
              		echo '<td><a style="text-decoration:none;"; href=year.php?dept_name='.$civil.'>CIVIL</a></td>';
					$s='select dept from student_collection where dept="CIVIL"';
					$result = mysqli_query($con,$s);
					$num = mysqli_num_rows($result);
              		if($num==0){
              			echo '<td><a style="text-decoration:none;"; href=#>NOT ALLOTED</a></td>';
              		}
              		else{
              			echo '<td><a style="text-decoration:none;"; href=#>ALLOTED</a></td>';
              		}
              		echo '</tr>';
              		echo '<tr>';
              		echo '<td><a style="text-decoration:none;"; href=year.php?dept_name='.$ice.'>ICE</a></td>';
					$s='select dept from student_collection where dept="ICE"';
					$result = mysqli_query($con,$s);
					$num = mysqli_num_rows($result);
              		if($num==0){
              			echo '<td><a style="text-decoration:none;"; href=#>NOT ALLOTED</a></td>';
              		}
              		else{
              			echo '<td><a style="text-decoration:none;"; href=#>ALLOTED</a></td>';
              		}
              		echo '</tr>';
              		echo '<tr>';
              		echo '<td><a style="text-decoration:none;"; href=year.php?dept_name='.$it.'>IT</a></td>';
					$s='select dept from student_collection where dept="IT"';
					$result = mysqli_query($con,$s);
					$num = mysqli_num_rows($result);
              		if($num==0){
              			echo '<td><a style="text-decoration:none;"; href=#>NOT ALLOTED</a></td>';
              		}
              		else{
              			echo '<td><a style="text-decoration:none;"; href=#>ALLOTED</a></td>';
              		}
              		echo '</tr>';
              		echo '<tr>';

              		echo '<td><a style="text-decoration:none;"; href=year.php?dept_name='.$bio.'>BIO-TECH</a></td>';
					$s='select dept from student_collection where dept="BIO-TECH"';
					$result = mysqli_query($con,$s);
					$num = mysqli_num_rows($result);
              		if($num==0){
              			echo '<td><a style="text-decoration:none;"; href=#>NOT ALLOTED</a></td>';
              		}
              		else{
              			echo '<td><a style="text-decoration:none;"; href=#>ALLOTED</a></td>';
              		}
              		echo '</tr>';
              		echo '<tr>';
              		echo '<td><a style="text-decoration:none;"; href=year.php?dept_name='.$chem.'>CHEM</a></td>';
					$s='select dept from student_collection where dept="CHEM"';
					$result = mysqli_query($con,$s);
					$num = mysqli_num_rows($result);
              		if($num==0){
              			echo '<td><a style="text-decoration:none;"; href=#>NOT ALLOTED</a></td>';
              		}
              		else{
              			echo '<td><a style="text-decoration:none;"; href=#>ALLOTED</a></td>';
              		}
              		echo '</tr></table';

					?>   
						
			</form>

			<center><a href="detail1.php">Go Back</a></center>
				<br><br><br>

</body>
</html>

<!-- <h1><i>Select the year:</i></h1>
						  <input type="checkbox" style="width: 25px; height: 25px;" name="1year">
						  <label style="font-size: 30px; color: #5D055D; "> First Year</label><br>
						  <input type="checkbox" style="width: 25px; height: 25px;" name="2year">
						  <label style="font-size: 30px; color: #5D055D;"> Second Year</label><br>
						  <input type="checkbox" style="width: 25px; height: 25px;" name="3year">
						  <label style="font-size: 30px; color: #5D055D;"> Third Year</label><br>
						  <input type="checkbox" style="width: 25px; height: 25px;" name="4year">
						  <label style="font-size: 30px; color: #5D055D;"> Final Year</label><br>
						  <input type="submit" name="submit" value="Submit">	<br> -->