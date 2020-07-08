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
	<br><h1 style="color: #5D055D; text-align: center; height: 50px;">St.Joseph's College Of Engineering</h1>
	<?php
	require_once("connection.php");

		if(isset($_POST['Slogin']))
		{
			echo "<script type='text/javascript'>window.top.location='studentallotmentprocess.php';</script>";

		}
		if(isset($_POST['Alogin']))
		{
			echo "<script type='text/javascript'>window.top.location='roomarrangement.php';</script>";

		}
		if(isset($_POST['Overall']))
		{
			echo "<script type='text/javascript'>window.top.location='overall.php';</script>";

		}
		
	?>
	<h1><i>Allotment Process</i></h1>

		
			<form method="post">

						<input type="submit" name="Slogin" value="Students Allotment Process">	<br>

						<input type="submit" name="Alogin" value="Rooms Allotment Process">	<br>

						<input type="submit" name="Overall" value="Submit Process">	<br><br>
						
						<center>
						<a href="generate_pdf.php" download>Generate PDF</a><br><br><br>

						<a href="reset.php">RESET DATA</a><br><br>
					</center>


			</form>

			<center><a href="index.php">Go Back</a></center>
				<br><br><br>

</body>
</html>