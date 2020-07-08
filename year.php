
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
		          <?php
		require_once("connection.php");
		
		if(isset($_POST['submit']))
		{
			$message = "Uploaded successfully";
			echo "<script type='text/javascript'>alert('$message');</script>";
			$dept=$_GET['dept_name'];
			if(isset($_POST['1year']))
			{
				$s="select startreg from Department_details where dept='$dept' && year='1'";
				$result = mysqli_query($con,$s);
                while($row = mysqli_fetch_assoc( $result )){
                $start=$row['startreg'];
            	}
            	$s="select endreg from Department_details where dept='$dept' && year='1'";
				$result = mysqli_query($con,$s);
                while($row = mysqli_fetch_assoc( $result )){
                $end=$row['endreg'];
            	}
				$reg = "insert into student_collection (id,dept,year,startreg,endreg) values ('','$dept','1' ,'$start' , '$end')";
                if(mysqli_query($con,$reg)){
                	// echo "INserted";
                }else{
                	// echo "error";
                }
			}

			if(isset($_POST['2year']))
			{
				$s="select startreg from Department_details where dept='$dept' && year='2'";
				$result = mysqli_query($con,$s);
                while($row = mysqli_fetch_assoc( $result )){
                $start=$row['startreg'];
            	}
            	$s="select endreg from Department_details where dept='$dept' && year='2'";
				$result = mysqli_query($con,$s);
                while($row = mysqli_fetch_assoc( $result )){
                $end=$row['endreg'];
            	}
				$reg = "insert into student_collection (id,dept,year,startreg,endreg) values ('','$dept' ,'2','$start' , '$end')";
                mysqli_query($con,$reg);
			}

			if(isset($_POST['3year']))
			{
				$s="select startreg from Department_details where dept='$dept' && year='3'";
				$result = mysqli_query($con,$s);
                while($row = mysqli_fetch_assoc( $result )){
                $start=$row['startreg'];
            	}
            	$s="select endreg from Department_details where dept='$dept' && year='3'";
				$result = mysqli_query($con,$s);
                while($row = mysqli_fetch_assoc( $result )){
                $end=$row['endreg'];
            	}
				$reg = "insert into student_collection (id,dept,year,startreg,endreg) values ('','$dept','3' ,'$start' , '$end')";
                mysqli_query($con,$reg);
			}
			if(isset($_POST['4year']))
			{
				$s="select startreg from Department_details where dept='$dept' && year='4'";
				$result = mysqli_query($con,$s);
                while($row = mysqli_fetch_assoc( $result )){
                $start=$row['startreg'];
            	}
            	$s="select endreg from Department_details where dept='$dept' && year='4'";
				$result = mysqli_query($con,$s);
                while($row = mysqli_fetch_assoc( $result )){
                $end=$row['endreg'];
            	}
				$reg = "insert into student_collection (id,dept,year,startreg,endreg) values ('','$dept','4' ,'$start' , '$end')";
                mysqli_query($con,$reg);
			}
		}
		?>
	<h1 style="color: #5D055D; text-align: center; height: 50px;">St.Joseph's College Of Engineering</h1>
	
	<h1><i>Student Allotment Process</i></h1>
	
			<form method="post">
				<?php
				$dept=$_GET['dept_name'];
				echo'<h1><i>Department: '.$dept.'</i></h1>'; ?>
				<h1><i>Select the year:</i></h1>
				<table>
					<tr>
						<td><input type="checkbox" style="width: 25px; height: 25px;" name="1year"></td>
						<td> <label style="font-size: 30px; color: #5D055D; "> First Year</label></td>
						<?php echo '<td><a style="text-decoration:none;"; href="specialcases.php?dept_name='.$dept.'">SPECIAL CASES</a></td>'; ?>
					</tr>
					<tr>
						<td><input type="checkbox" style="width: 25px; height: 25px;" name="2year"></td>
						<td><label style="font-size: 30px; color: #5D055D;"> Second Year</label></td>
						<td><a style="text-decoration:none;"; href="specialcases.php?dept_name='.$dept.'">SPECIAL CASES</a></td>
					</tr>
					<tr>
						<td><input type="checkbox" style="width: 25px; height: 25px;" name="3year"></td>
						<td><label style="font-size: 30px; color: #5D055D;"> Third Year</label></td>
						<td><a style="text-decoration:none;"; href="specialcases.php?dept_name='.$dept.'">SPECIAL CASES</a></td>
					</tr>
					<tr>
						<td><input type="checkbox" style="width: 25px; height: 25px;" name="4year"></td>
						<td><label style="font-size: 30px; color: #5D055D;"> Final Year</label></td>
						<td><a style="text-decoration:none;"; href="specialcases.php?dept_name='.$dept.'">SPECIAL CASES</a></td>
					</tr>
				</table>
						  <!-- <input type="checkbox" style="width: 25px; height: 25px;" name="1year">
						  <label style="font-size: 30px; color: #5D055D; "> First Year</label><br>
						  <input type="checkbox" style="width: 25px; height: 25px;" name="2year">
						  <label style="font-size: 30px; color: #5D055D;"> Second Year</label><br>
						  <input type="checkbox" style="width: 25px; height: 25px;" name="3year">
						  <label style="font-size: 30px; color: #5D055D;"> Third Year</label><br>
						  <input type="checkbox" style="width: 25px; height: 25px;" name="4year">
						  <label style="font-size: 30px; color: #5D055D;"> Final Year</label><br> -->
						  <input type="submit" name="submit" value="Submit">	<br>
						
			</form>

			<center><a href="studentallotmentprocess.php">Go Back</a></center>
				<br><br><br>

</body>
</html>

