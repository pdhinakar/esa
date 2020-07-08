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
	
	<h1><i>Room Allotment Process</i></h1>
		<?php
			require_once("connection.php");
			$s="select dept from student_collection";
			$result = mysqli_query($con,$s);
				$r=0;
                while($row = mysqli_fetch_assoc( $result )){
                $s1=$row['dept'];
                if($s1=='ICE' || $s1=='BIO-TECH' || $s1=='CHEM')
                {
                	$r=$r+80;
                }
                else
                {
                	$r=$r+180;
                }
            	}
            	$r=$r/48;
            	$r=intval($r);
            	$r=$r+1;
			echo'<h2><i>***You need to allote '.$r.' rooms***</i></h2>'; ?>
		<form method="post">
				<h1><i>Select the Department:</i></h1>
				<?php
				require_once("connection.php");
				$cse = "CSE";
				$ece="ECE";
				$eee_1="EEE_1";
				$eee_2="EEE_2";
				$mech_1="MECH_1";
				$mech_2="MECH_2";
				$civil="CIVIL";
				$ice="ICE";
				$it="IT";
				$bio="BIOTECH";
				$chem="CHEM";
				$eie="EIE";
				$fy="FIRST_YEAR";
				$eb="EXAM_BLOCK";
				$total=0;
				echo '<table border="1" cellpadding="20">';
				echo '<tr>';
				echo '<th style="font-size:30px; color: #5D055D; text-align: center;">Department</th>';
				echo '<th style="font-size:30px; color: #5D055D; text-align: center;">Status</th>';
				echo '<th style="font-size:30px; color: #5D055D; text-align: center;">Allotmented Rooms</th>';
				echo '</tr>';
				echo '<tr>';
					echo '<td><a style="text-decoration:none;"; href=room.php?dept_name='.$cse.'>CSE</a></td>';
					$s='select dept from room_collection where dept="CSE"';
					$result = mysqli_query($con,$s);
					$num = mysqli_num_rows($result);
              		if($num==0){
              			echo '<td><a style="text-decoration:none;"; href=#>NOT ALLOTED</a></td>';
              		}
              		else{
              			echo '<td><a style="text-decoration:none;"; href=#>ALLOTED</a></td>';
              		}
              		$s='select dept from room_collection where dept="CSE"';
					$result = mysqli_query($con,$s);
					$num = mysqli_num_rows($result);
					$num1=$num*3;
					$total=$total+$num1;
					echo '<td><a style="text-decoration:none;"; href=#>'.$num1.'</a></td>';
              		echo '</tr>';
              		echo '<tr>';
              		echo '<td><a style="text-decoration:none;"; href=room.php?dept_name='.$ece.'>ECE</a></td>';
					$s='select dept from room_collection where dept="ECE"';
					$result = mysqli_query($con,$s);
					$num = mysqli_num_rows($result);
              		if($num==0){
              			echo '<td><a style="text-decoration:none;"; href=#>NOT ALLOTED</a></td>';
              		}
              		else{
              			echo '<td><a style="text-decoration:none;"; href=#>ALLOTED</a></td>';
              		}
              		$s='select dept from room_collection where dept="ECE"';
					$result = mysqli_query($con,$s);
					$num = mysqli_num_rows($result);
					$num1=$num*3;
					$total=$total+$num1;
					echo '<td><a style="text-decoration:none;"; href=#>'.$num1.'</a></td>';
              		echo '</tr>';
              		echo '<tr>';
              		echo '<td><a style="text-decoration:none;"; href=room.php?dept_name='.$eee_1.'>EEE_1</a></td>';
					$s='select dept from room_collection where dept="EEE_1"';
					$result = mysqli_query($con,$s);
					$num = mysqli_num_rows($result);
              		if($num==0){
              			echo '<td><a style="text-decoration:none;"; href=#>NOT ALLOTED</a></td>';
              		}
              		else{
              			echo '<td><a style="text-decoration:none;"; href=#>ALLOTED</a></td>';
              		}
              		$s='select dept from room_collection where dept="EEE_1"';
					$result = mysqli_query($con,$s);
					$num = mysqli_num_rows($result);
					$num1=$num*3;
					$total=$total+$num1;
					echo '<td><a style="text-decoration:none;"; href=#>'.$num1.'</a></td>';
              		echo '</tr>';
              		echo '<tr>';
              		echo '<td><a style="text-decoration:none;"; href=room.php?dept_name='.$eee_2.'>EEE_2</a></td>';
					$s='select dept from room_collection where dept="EEE_2"';
					$result = mysqli_query($con,$s);
					$num = mysqli_num_rows($result);
              		if($num==0){
              			echo '<td><a style="text-decoration:none;"; href=#>NOT ALLOTED</a></td>';
              		}
              		else{
              			echo '<td><a style="text-decoration:none;"; href=#>ALLOTED</a></td>';
              		}
              		$s='select dept from room_collection where dept="EEE_2"';
					$result = mysqli_query($con,$s);
					$num = mysqli_num_rows($result);
					$num1=$num*3;
					$total=$total+$num1;
					echo '<td><a style="text-decoration:none;"; href=#>'.$num1.'</a></td>';
              		echo '</tr>';
              		echo '<tr>';
              		echo '<td><a style="text-decoration:none;"; href=room.php?dept_name='.$mech_1.'>MECH_1</a></td>';
					$s='select dept from room_collection where dept="MECH_1"';
					$result = mysqli_query($con,$s);
					$num = mysqli_num_rows($result);
              		if($num==0){
              			echo '<td><a style="text-decoration:none;"; href=#>NOT ALLOTED</a></td>';
              		}
              		else{
              			echo '<td><a style="text-decoration:none;"; href=#>ALLOTED</a></td>';
              		}
              		$s='select dept from room_collection where dept="MECH_1"';
					$result = mysqli_query($con,$s);
					$num = mysqli_num_rows($result);
					$num1=$num*3;
					$total=$total+$num1;
					echo '<td><a style="text-decoration:none;"; href=#>'.$num1.'</a></td>';
              		echo '</tr>';
              		echo '<tr>';
              		echo '<td><a style="text-decoration:none;"; href=room.php?dept_name='.$mech_2.'>MECH_2</a></td>';
					$s='select dept from room_collection where dept="MECH_2"';
					$result = mysqli_query($con,$s);
					$num = mysqli_num_rows($result);
              		if($num==0){
              			echo '<td><a style="text-decoration:none;"; href=#>NOT ALLOTED</a></td>';
              		}
              		else{
              			echo '<td><a style="text-decoration:none;"; href=#>ALLOTED</a></td>';
              		}
              		$s='select dept from room_collection where dept="MECH_2"';
					$result = mysqli_query($con,$s);
					$num = mysqli_num_rows($result);
					$num1=$num*3;
					$total=$total+$num1;
					echo '<td><a style="text-decoration:none;"; href=#>'.$num1.'</a></td>';
              		echo '</tr>';
              		echo '<tr>';
              		echo '<td><a style="text-decoration:none;"; href=room.php?dept_name='.$civil.'>CIVIL</a></td>';
					$s='select dept from room_collection where dept="CIVIL"';
					$result = mysqli_query($con,$s);
					$num = mysqli_num_rows($result);
              		if($num==0){
              			echo '<td><a style="text-decoration:none;"; href=#>NOT ALLOTED</a></td>';
              		}
              		else{
              			echo '<td><a style="text-decoration:none;"; href=#>ALLOTED</a></td>';
              		}
              		$s='select dept from room_collection where dept="CIVIL"';
					$result = mysqli_query($con,$s);
					$num = mysqli_num_rows($result);
					$num1=$num*3;
					$total=$total+$num1;
					echo '<td><a style="text-decoration:none;"; href=#>'.$num1.'</a></td>';
              		echo '</tr>';
              		echo '<tr>';
              		echo '<td><a style="text-decoration:none;"; href=room.php?dept_name='.$ice.'>ICE</a></td>';
					$s='select dept from room_collection where dept="ICE"';
					$result = mysqli_query($con,$s);
					$num = mysqli_num_rows($result);
              		if($num==0){
              			echo '<td><a style="text-decoration:none;"; href=#>NOT ALLOTED</a></td>';
              		}
              		else{
              			echo '<td><a style="text-decoration:none;"; href=#>ALLOTED</a></td>';
              		}
              		$s='select dept from room_collection where dept="ICE"';
					$result = mysqli_query($con,$s);
					$num = mysqli_num_rows($result);
					$num1=$num*3;
					$total=$total+$num1;
					echo '<td><a style="text-decoration:none;"; href=#>'.$num1.'</a></td>';
              		echo '</tr>';
              		echo '<tr>';
              		echo '<td><a style="text-decoration:none;"; href=room.php?dept_name='.$it.'>IT</a></td>';
					$s='select dept from room_collection where dept="IT"';
					$result = mysqli_query($con,$s);
					$num = mysqli_num_rows($result);
              		if($num==0){
              			echo '<td><a style="text-decoration:none;"; href=#>NOT ALLOTED</a></td>';
              		}
              		else{
              			echo '<td><a style="text-decoration:none;"; href=#>ALLOTED</a></td>';
              		}
              		$s='select dept from room_collection where dept="IT"';
					$result = mysqli_query($con,$s);
					$num = mysqli_num_rows($result);
					$num1=$num*3;
					$total=$total+$num1;
					echo '<td><a style="text-decoration:none;"; href=#>'.$num1.'</a></td>';
              		echo '</tr>';
              		echo '<tr>';

              		echo '<td><a style="text-decoration:none;"; href=room.php?dept_name='.$bio.'>BIO-TECH</a></td>';
					$s='select dept from room_collection where dept="BIOTECH"';
					$result = mysqli_query($con,$s);
					$num = mysqli_num_rows($result);
              		if($num==0){
              			echo '<td><a style="text-decoration:none;"; href=#>NOT ALLOTED</a></td>';
              		}
              		else{
              			echo '<td><a style="text-decoration:none;"; href=#>ALLOTED</a></td>';
              		}
              		$s='select dept from room_collection where dept="BIOTECH"';
					$result = mysqli_query($con,$s);
					$num = mysqli_num_rows($result);
					$num1=$num*3;
					$total=$total+$num1;
					echo '<td><a style="text-decoration:none;"; href=#>'.$num1.'</a></td>';
              		echo '</tr>';
              		echo '<tr>';
              		echo '<td><a style="text-decoration:none;"; href=room.php?dept_name='.$eie.'>EIE</a></td>';
					$s='select dept from room_collection where dept="EIE"';
					$result = mysqli_query($con,$s);
					$num = mysqli_num_rows($result);
              		if($num==0){
              			echo '<td><a style="text-decoration:none;"; href=#>NOT ALLOTED</a></td>';
              		}
              		else{
              			echo '<td><a style="text-decoration:none;"; href=#>ALLOTED</a></td>';
              		}
              		$s='select dept from room_collection where dept="EIE"';
					$result = mysqli_query($con,$s);
					$num = mysqli_num_rows($result);
					$num1=$num*3;
					$total=$total+$num1;
					echo '<td><a style="text-decoration:none;"; href=#>'.$num1.'</a></td>';
              		echo '</tr>';
              		echo '<tr>';
              		echo '<td><a style="text-decoration:none;"; href=room.php?dept_name='.$chem.'>CHEM</a></td>';
					$s='select dept from room_collection where dept="CHEM"';
					$result = mysqli_query($con,$s);
					$num = mysqli_num_rows($result);
              		if($num==0){
              			echo '<td><a style="text-decoration:none;"; href=#>NOT ALLOTED</a></td>';
              		}
              		else{
              			echo '<td><a style="text-decoration:none;"; href=#>ALLOTED</a></td>';
              		}
              		$s='select dept from room_collection where dept="CHEM"';
					$result = mysqli_query($con,$s);
					$num = mysqli_num_rows($result);
					$num1=$num*3;
					$total=$total+$num1;
					echo '<td><a style="text-decoration:none;"; href=#>'.$num1.'</a></td>';
              		echo '</tr>';
              		echo '<tr>';
              		echo '<td><a style="text-decoration:none;"; href=room.php?dept_name='.$fy.'>FIRST_YEAR</a></td>';
					$s='select dept from room_collection where dept="FIRST_YEAR"';
					$result = mysqli_query($con,$s);
					$num = mysqli_num_rows($result);
              		if($num==0){
              			echo '<td><a style="text-decoration:none;"; href=#>NOT ALLOTED</a></td>';
              		}
              		else{
              			echo '<td><a style="text-decoration:none;"; href=#>ALLOTED</a></td>';
              		}
              		$s='select dept from room_collection where dept="FIRST_YEAR"';
					$result = mysqli_query($con,$s);
					$num = mysqli_num_rows($result);
					$num1=$num*3;
					$total=$total+$num1;
					echo '<td><a style="text-decoration:none;"; href=#>'.$num1.'</a></td>';
              		echo '</tr>';
              		echo '<tr>';
              		echo '<td><a style="text-decoration:none;"; href=room.php?dept_name='.$eb.'>EXAM_BLOCK</a></td>';
					$s='select dept from room_collection where dept="EXAM_BLOCK"';
					$result = mysqli_query($con,$s);
					$num = mysqli_num_rows($result);
              		if($num==0){
              			echo '<td><a style="text-decoration:none;"; href=#>NOT ALLOTED</a></td>';
              		}
              		else{
              			echo '<td><a style="text-decoration:none;"; href=#>ALLOTED</a></td>';
              		}
              		$s='select dept from room_collection where dept="EXAM_BLOCK"';
					$result = mysqli_query($con,$s);
					$num = mysqli_num_rows($result);
					$num1=$num*80;
					$num2=$num1/48;
					$num3=intval($num2);
					if($num3!=0)
						$num4=$num3+1;
					else
						$num4=$num3;
					$total=$total+$num4;
					echo '<td><a style="text-decoration:none;"; href=#>'.$num4.'</a></td>';
              		// echo '</tr>';
              		// echo "<tr><td><h2><i>Total no. of alloted room </h2></i></td><td<td><h2><i>".$total."<h2><i></td></tr>";
              		echo '</tr></table>';
              		echo'<h2><i>***Total number of alloted room is '.$total.'***</i></h2>';
					?>   
						
			</form><br>

			<center><a href="detail1.php">Go Back</a></center>
				<br><br><br>
</body>
</html>


