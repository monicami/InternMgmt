<?php
function update_Data($student_ID1,$student_ID,$job_name,$comp_name,$contact_LN,$contact_FN,$telephone,$email,$note) {
	//URL
    $url = "localhost";
    //username
    $user = "root";
    //password
    $password = "123456";
	$hire="Hired";
	$available="Available";
    //connection
    $con = mysqli_connect($url,$user,$password);
    if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
    }
    //encoding
    mysqli_set_charset($con,"utf8");
    //connect to db
    mysqli_select_db($con,"imis");
	$sql1 = "update student set intern_status='Hired' where student_ID=$student_ID"; 
	//$sql2 = "update student set intern_status='$available' where student_ID=$student_ID1";
    $sql = "update intern set student_ID='$student_ID', job_name='$job_name', comp_name='$comp_name', contact_LN='$contact_LN', contact_FN='$contact_FN', telephone='$telephone', email='$email', note='$note' where student_ID=$student_ID1";    
	if (!mysqli_query($con,$sql)&&!mysqli_query($con,$sql1))
    {
      die('Error: ' . mysqli_error($con));
    }
    
    //close connection
    mysqli_close($con);
}

function update_Data2($student_ID) {
	//URL
    $url = "localhost";
    //username
    $user = "root";
    //password
    $password = "123456";
	$hire="Hired";
	$available="Available";
    //connection
    $con = mysqli_connect($url,$user,$password);
    if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
    }
    //encoding
    mysqli_set_charset($con,"utf8");
    //connect to db
    mysqli_select_db($con,"imis");
	$sql1 = "update student set intern_status='Hired' where student_ID=$student_ID"; 
	//$sql2 = "update student set intern_status='$available' where student_ID=$student_ID1";
    //$sql = "update intern set student_ID='$student_ID', job_name='$job_name', comp_name='$comp_name', contact_LN='$contact_LN', contact_FN='$contact_FN', telephone='$telephone', email='$email', note='$note' where student_ID=$student_ID1";    
	if (!mysqli_query($con,$sql1))
    {
      die('Error: ' . mysqli_error($con));
    }
    
    //close connection
    mysqli_close($con);
}
?>