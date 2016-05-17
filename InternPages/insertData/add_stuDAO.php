<?php
	
	$con =  mysqli_connect("localhost","root","123456","imis");
	if (!$con)
	{
		die('Could not connect: ' . mysql_error());
	}
	else
	{
		//echo "<p>Connected!</><br>";
	}
	
	
	
	$sql = "insert into user values ('$user_name', 000000 , '$stu_id', 'student')";
	if($user_name!=" " && $stu_id!=" ")
	{
		if(mysqli_query($con, $sql))
		{
			echo "<br>cannot create the student account </br>";
		}
	}
	
	else
	{
		echo "<br> The User name and student ID are necessary! </br> ";
	}
	?>