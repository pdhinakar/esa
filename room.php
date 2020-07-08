
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
				if($dept!='EXAM_BLOCK'){
				$s="select * from room_details where block='$dept' && floor='GROUND'";
				$result = mysqli_query($con,$s);
			    $num = mysqli_num_rows($result);
	            while($row = mysqli_fetch_assoc( $result )){
		    	$start=$row['startroom'];
			   	$end=$row['endroom'];
			    }
		        $reg = "insert into room_collection (id,dept,floor,startroom,endroom) values ('','$dept','GROUND' ,'$start' , '$end')";
                mysqli_query($con,$reg);}
                else{
				$s="select * from room_details where block='$dept' && floor='FIRST_RIGHT'";
				$result = mysqli_query($con,$s);
			    $num = mysqli_num_rows($result);
	            while($row = mysqli_fetch_assoc( $result )){
		    	$start=$row['startroom'];
			   	$end=$row['endroom'];
			    }
		        $reg = "insert into room_collection (id,dept,floor,startroom,endroom) values ('','$dept','FIRST_RIGHT' ,'$start' , '$end')";
                mysqli_query($con,$reg);}
			}

			if(isset($_POST['2year']))
			{
				if($dept!='EXAM_BLOCK'){
				$s="select * from room_details where block='$dept' && floor='FIRST'";
				$result = mysqli_query($con,$s);
				$num = mysqli_num_rows($result);
			                while($row = mysqli_fetch_assoc( $result )){
			    	$start=$row['startroom'];
			   	$end=$row['endroom'];
			    }
		        $reg = "insert into room_collection (id,dept,floor,startroom,endroom) values ('','$dept','FIRST' ,'$start' , '$end')";
                mysqli_query($con,$reg);}
                else{
				$s="select * from room_details where block='$dept' && floor='SECOND_LEFT'";
				$result = mysqli_query($con,$s);
			    $num = mysqli_num_rows($result);
	            while($row = mysqli_fetch_assoc( $result )){
		    	$start=$row['startroom'];
			   	$end=$row['endroom'];
			    }
		        $reg = "insert into room_collection (id,dept,floor,startroom,endroom) values ('','$dept','SECOND_LEFT' ,'$start' , '$end')";
                mysqli_query($con,$reg);}
			}

			if(isset($_POST['3year']))
			{
				if($dept!='EXAM_BLOCK'){
				$s="select * from room_details where block='$dept' && floor='SECOND'";
				$result = mysqli_query($con,$s);
				$num = mysqli_num_rows($result);
			    while($row = mysqli_fetch_assoc( $result )){
			    $start=$row['startroom'];
			   	$end=$row['endroom'];
			    }
		        $reg = "insert into room_collection (id,dept,floor,startroom,endroom) values ('','$dept','SECOND' ,'$start' , '$end')";
                mysqli_query($con,$reg);}
                else{
				$s="select * from room_details where block='$dept' && floor='SECOND_RIGHT'";
				$result = mysqli_query($con,$s);
			    $num = mysqli_num_rows($result);
	            while($row = mysqli_fetch_assoc( $result )){
		    	$start=$row['startroom'];
			   	$end=$row['endroom'];
			    }
		        $reg = "insert into room_collection (id,dept,floor,startroom,endroom) values ('','$dept','SECOND_RIGHT' ,'$start' , '$end')";
                mysqli_query($con,$reg);}
			}
			if(isset($_POST['4year']))
			{
				if($dept!='EXAM_BLOCK'){
				 $s="select * from room_details where block='$dept' && floor='THIRD'";
				 $result = mysqli_query($con,$s);
	   		     $num = mysqli_num_rows($result);
	             while($row = mysqli_fetch_assoc( $result )){
               	$start=$row['startroom'];
			   	$end=$row['endroom'];
			    }
		        $reg = "insert into room_collection (id,dept,floor,startroom,endroom) values ('','$dept','THIRD' ,'$start' , '$end')";
                mysqli_query($con,$reg);}
                else{
				$s="select * from room_details where block='$dept' && floor='THIRD_LEFT'";
				$result = mysqli_query($con,$s);
			    $num = mysqli_num_rows($result);
	            while($row = mysqli_fetch_assoc( $result )){
		    	$start=$row['startroom'];
			   	$end=$row['endroom'];
			    }
		        $reg = "insert into room_collection (id,dept,floor,startroom,endroom) values ('','$dept','THIRD_LEFT' ,'$start' , '$end')";
                mysqli_query($con,$reg);}
			}
			if(isset($_POST['5year']))
			{
				 $s="select * from room_details where block='$dept' && floor='THIRD_RIGHT'";
				 $result = mysqli_query($con,$s);
	   		     $num = mysqli_num_rows($result);
	             while($row = mysqli_fetch_assoc( $result )){
               	$start=$row['startroom'];
			   	$end=$row['endroom'];
			    }
		        $reg = "insert into room_collection (id,dept,floor,startroom,endroom) values ('','$dept','THIRD_RIGHT' ,'$start' , '$end')";
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
				<h1><i>Select the room series:</i></h1>
						  <?php 
						  require_once("connection.php");
						  echo "<table cellpadding='10'>";
						  // if($dept!='EXAM_BLOCK'){
						    $s="select * from room_details where block='$dept' && floor='GROUND'";
						    $result = mysqli_query($con,$s);
						    $num = mysqli_num_rows($result);
						    if($num==1){
						    	echo '<tr><td><input type="checkbox" style="width: 25px; height: 25px;" name="1year"></td>';
						  		echo '<td><label style="font-size: 30px; color: #5D055D; ">';
			                while($row = mysqli_fetch_assoc( $result )){
			                	$a=$row['startroom'];
			                	$b=$row['endroom'];
			            	}
			            	echo "Ground Floor :     ";
			            	echo "</td></label>";
			            	echo '<td><label style="font-size: 30px; color: #5D055D; ">';
			            	echo $a;
			            	echo ' - ' ;
			            	echo $b;
			            	echo "</label></td></tr>";
			            }
						  
						    $s="select * from room_details where block='$dept' && floor='FIRST'";
						    $result = mysqli_query($con,$s);
						    $num = mysqli_num_rows($result);
						    if($num==1){
						    	echo '<tr><td><input type="checkbox" style="width: 25px; height: 25px;" name="2year"></td>';
						  		echo '<td><label style="font-size: 30px; color: #5D055D; ">';
			                while($row = mysqli_fetch_assoc( $result )){
			                	$a=$row['startroom'];
			                	$b=$row['endroom'];
			            	}
			            	echo "First Floor :     ";
			            	echo "</td></label>";
			            	echo '<td><label style="font-size: 30px; color: #5D055D; ">';
			            	echo $a;
			            	echo ' - ' ;
			            	echo $b;
			            	echo "</label></td></tr>";
			            }
						    $s="select * from room_details where block='$dept' && floor='SECOND'";
						    $result = mysqli_query($con,$s);
						    $num = mysqli_num_rows($result);
						    if($num==1){
						    	echo '<tr><td><input type="checkbox" style="width: 25px; height: 25px;" name="3year"></td>';
						  		echo '<td><label style="font-size: 30px; color: #5D055D; ">';
			                while($row = mysqli_fetch_assoc( $result )){
			                	$a=$row['startroom'];
			                	$b=$row['endroom'];
			            	}
			            	echo "Second Floor : ";
			            	echo "</td></label>";
			            	echo '<td><label style="font-size: 30px; color: #5D055D; ">';
			            	echo $a;
			            	echo ' - ' ;
			            	echo $b;
							echo "</label></td></tr>";
										            }
						  
						    $s="select * from room_details where block='$dept' && floor='THIRD'";
						    $result = mysqli_query($con,$s);
						    $num = mysqli_num_rows($result);
						    if($num==1){
						    	echo '<tr><td><input type="checkbox" style="width: 25px; height: 25px;" name="4year"></td>';
						  		echo '<td><label style="font-size: 30px; color: #5D055D; ">';
			                while($row = mysqli_fetch_assoc( $result )){
			                	$a=$row['startroom'];
			                	$b=$row['endroom'];
			            	}
			            	echo "Third Floor :     ";
			            	echo "</td></label>";
			            	echo '<td><label style="font-size: 30px; color: #5D055D; ">';
			            	echo $a;
			            	echo ' - ' ;
			            	echo $b;
			            	echo "</label></td></tr>";
			            }
			        // }
			        // else{
			        	$s="select * from room_details where block='$dept' && floor='FIRST_RIGHT'";
						    $result = mysqli_query($con,$s);
						    $num = mysqli_num_rows($result);
						    if($num==1){
						    	echo '<tr><td><input type="checkbox" style="width: 25px; height: 25px;" name="1year"></td>';
						  		echo '<td><label style="font-size: 30px; color: #5D055D; ">';
			                while($row = mysqli_fetch_assoc( $result )){
			                	$a=$row['startroom'];
			                	$b=$row['endroom'];
			            	}
			            	echo "First Floor Right :     ";
			            	echo "</td></label>";
			            	echo '<td><label style="font-size: 30px; color: #5D055D; ">';
			            	echo $a;
			            	echo ' - ' ;
			            	echo $b;
			            	echo "</label></td></tr>";
			            }
			            $s="select * from room_details where block='$dept' && floor='SECOND_LEFT'";
						    $result = mysqli_query($con,$s);
						    $num = mysqli_num_rows($result);
						    if($num==1){
						    	echo '<tr><td><input type="checkbox" style="width: 25px; height: 25px;" name="2year"></td>';
						  		echo '<td><label style="font-size: 30px; color: #5D055D; ">';
			                while($row = mysqli_fetch_assoc( $result )){
			                	$a=$row['startroom'];
			                	$b=$row['endroom'];
			            	}
			            	echo "Second Floor Left :     ";
			            	echo "</td></label>";
			            	echo '<td><label style="font-size: 30px; color: #5D055D; ">';
			            	echo $a;
			            	echo ' - ' ;
			            	echo $b;
			            	
			            	echo "</label></td></tr>";
			            }
			            $s="select * from room_details where block='$dept' && floor='SECOND_RIGHT'";
						    $result = mysqli_query($con,$s);
						    $num = mysqli_num_rows($result);
						    if($num==1){
						    	echo '<tr><td><input type="checkbox" style="width: 25px; height: 25px;" name="3year"></td>';
						  		echo '<td><label style="font-size: 30px; color: #5D055D; ">';
			                while($row = mysqli_fetch_assoc( $result )){
			                	$a=$row['startroom'];
			                	$b=$row['endroom'];
			            	}
			            	echo "Second Floor Right :     ";
			            	echo "</td></label>";
			            	echo '<td><label style="font-size: 30px; color: #5D055D; ">';
			            	echo $a;
			            	echo ' - ' ;
			            	echo $b;
			            	echo "</label></td></tr>";
			            }
			            $s="select * from room_details where block='$dept' && floor='THIRD_LEFT'";
						    $result = mysqli_query($con,$s);
						    $num = mysqli_num_rows($result);
						    if($num==1){
						    	echo '<tr><td><input type="checkbox" style="width: 25px; height: 25px;" name="4year"></td>';
						  		echo '<td><label style="font-size: 30px; color: #5D055D; ">';
			                while($row = mysqli_fetch_assoc( $result )){
			                	$a=$row['startroom'];
			                	$b=$row['endroom'];
			            	}
			            	echo "Second Floor Left :     ";
			            	echo "</td></label>";
			            	echo '<td><label style="font-size: 30px; color: #5D055D; ">';
			            	echo $a;
			            	echo ' - ' ;
			            	echo $b;
			            	echo "</label></td></tr>";
			            }
			            $s="select * from room_details where block='$dept' && floor='THIRD_RIGHT'";
						    $result = mysqli_query($con,$s);
						    $num = mysqli_num_rows($result);
						    if($num==1){
						    	echo '<tr><td><input type="checkbox" style="width: 25px; height: 25px;" name="5year"></td>';
						  		echo '<td><label style="font-size: 30px; color: #5D055D; ">';
			                while($row = mysqli_fetch_assoc( $result )){
			                	$a=$row['startroom'];
			                	$b=$row['endroom'];
			            	}
			            	echo "Third Floor Right :     ";
			            	echo "</td></label>";
			            	echo '<td><label style="font-size: 30px; color: #5D055D; ">';
			            	echo $a;
			            	echo ' - ' ;
			            	echo $b;
			            	echo "</label></td></tr>";
			            }
			            echo'</table>';

			        // }
						  ?>
						  <br>
						  <input type="submit" name="submit" value="Submit">	<br>
						
			</form>

			<center><a href="roomarrangement.php">Go Back</a></center>
				<br><br><br>

</body>
</html>

