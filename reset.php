<?php
	require_once("connection.php");
	$s="truncate table student_collection";
	mysqli_query($con,$s);
	$s="truncate table student_details";
	mysqli_query($con,$s);
	$s1="truncate table room_collection";
	mysqli_query($con,$s1);
	echo "<script type='text/javascript'>window.top.location='detail1.php';</script>";
	$message = "Delete all data successfully";
			echo "<script type='text/javascript'>alert('$message');</script>";
?>