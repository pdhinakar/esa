<?php
session_start();
?>
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
		          </script>
		          <br>
	
	<h1 style="color: #5D055D; text-align: center; height: 50px;">St.Joseph's College Of Engineering</h1>
	<?php
	require_once("connection.php");
		if(isset($_POST['login']))
		{
			$register_no=$_POST['register_no'];
			if($register_no != "")
			{
       			$s = "select block_name,room_no from student_details where register_no = '$register_no' ";

				$result = mysqli_query($con,$s);

				$num = mysqli_num_rows($result);

				if($num==1)
				{
					$_SESSION['register_no'] = $register_no;
					echo "<script type='text/javascript'>window.top.location='display.php';</script>";

				}
			}
		}
	?>
	<h1><i>Student Detail</i></h1>
	<fieldset style="border-color:#5D055D;margin-right:0px; margin-left:0px;";>
		
			<form method="post" action="display.php">
					<h2><i>Register Number</i></h2> 
							<input type="text" name="register_no" placeholder="Register Number" required="user_name" >
						<input type="submit" name="login" value="Submit">	
			</form>
	</fieldset>
	<br><br>
	<center><a href="index.php">Go Back</a></center>
		<br><br><br>


</body>
</html>