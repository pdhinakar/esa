<?php
	require_once("connection.php");
	$s="truncate table student_details";
	mysqli_query($con,$s);
	$T=2;
	$add=0;
	while($T--){
	$s="select * from room_collection";
	$result = mysqli_query($con,$s);
    while($row = mysqli_fetch_assoc( $result )){
    	$d=$row['dept'];
    	$f=$row['floor'];
    	$sr=$row['startroom'];
    	$er=$row['endroom'];
    	$rn=1;
    	while($sr<=$er)
    	{
    		for($i=1;$i<=24;$i++){
    		$reg = "insert into student_details (id,register_no,dept,floor,room_no) values ('','$rn','$d' ,'$f' , '$sr')";
                mysqli_query($con,$reg);
            }
            $sr++;
    		// $add=$add+1;
    		// if($add<=24){
    		// $reg = "insert into student_details (id,register_no,dept,floor,room_no) values ('','$rn','$d' ,'$f' , '$sr')";
      //           mysqli_query($con,$reg);
      //       }
      //       else{
      //       $sr++;
      //       $add=$add%25;
      //   	}
    	}
    }
	}
	$s="select * from student_collection";
	$result = mysqli_query($con,$s);
	$count=1;
    while($row = mysqli_fetch_assoc( $result )){
    	$start=$row['startreg'];
    	$end=$row['endreg'];
    	while($start<=$end)
    	{
    		$reg = "update student_details set register_no='$start' where id='$count'";
            mysqli_query($con,$reg);
            $start++;
            $count++;
    	}
    }
    $s="delete from student_details where register_no='1'";
    mysqli_query($con,$s);
    $message = "Uploaded successfully";
	echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script type='text/javascript'>window.top.location='detail1.php';</script>";
	
?>