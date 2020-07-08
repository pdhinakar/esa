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
	<br><h1 style="color: #5D055D; text-align: center; height: 50px;">St.Joseph's College Of Engineering</h1><br>
	<?php
		if(isset($_POST['Slogin']))
		{
			echo "<script type='text/javascript'>window.top.location='studentlogin.php';</script>";

		}
		if(isset($_POST['Alogin']))
		{
			echo "<script type='text/javascript'>window.top.location='adminlogin.php';</script>";

		}
	?>
	<h1><i>Welcome All</i></h1><br>
		
			<form method="post">
						<input type="submit" name="Slogin" value="Student Login">	<br><br><br>
						<input type="submit" name="Alogin" value="Admin Login">	

			</form>
				<br><br><br>

</body>
</html>