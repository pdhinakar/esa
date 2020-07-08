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
<body bgcolor="#e6ccff";>
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
	<h1 style="color: #5D055D; text-align: center; height: 50px;">St.Joseph's College Of Engineering</h1>
	<?php
	require_once("connection.php");
		if(isset($_POST['login']))
		{
			$user_name=$_POST['user_name'];
			$password=$_POST['password'];
			if($user_name == "user" and $password == "user")
			{
				echo "<script type='text/javascript'>window.top.location='detail1.php';</script>";
			}
			else
			{
				echo "Login failed";
			}
		}

		
	?>
	<h1><i>Admin Login</i></h1>
	<fieldset>
		
			<form method="post">
					<h2><i>User Name</i></h2> 
							<input type="text" name="user_name" placeholder="User Name" required="user_name" >
					
							<h2><i>Password</i></h2> 
							<input type="Password" name="password" placeholder="Password" required="password" >
					
						<input type="submit" name="login" value="Login">
						 
						 
	
			</form>
	</fieldset>
	<br><br><br>
</body>
</html>