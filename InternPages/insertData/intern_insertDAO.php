
<?php

function insert_DB($student_ID,$job_name,$comp_name,$contact_LN,$contact_FN,$telephone,$email,$note) {
	//URL
    $url = "localhost";
    //username
    $user = "root";
    //password
    $password = "123456";
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
    $sql = "insert into intern (student_ID,job_name,comp_name,contact_LN,contact_FN,telephone,email,note)  values('$student_ID','$job_name','$comp_name','$contact_LN','$contact_FN','$telephone','$email','$note')";
    //$sql1 = "update student set intern_status='Hired' where student_ID=$student_ID";
	if (!mysqli_query($con,$sql))
    {
      die('Error: ' . mysqli_error($con));
    }
    //close connection
    mysqli_close($con);
}
function insert_DB1($student_ID){
	//URL
    $url = "localhost";
    //username
    $user = "root";
    //password
    $password = "123456";
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
    //$sql = "insert into intern (student_ID,job_name,comp_name,contact_LN,contact_FN,telephone,email,note)  values('$student_ID','$job_name','$comp_name','$contact_LN','$contact_FN','$telephone','$email','$note')";
    $sql1 = "update student set intern_status='Hired' where student_ID=$student_ID";
	if (!mysqli_query($con,$sql1))
    {
      die('Error: ' . mysqli_error($con));
    }
    //close connection
    mysqli_close($con);
}
?>