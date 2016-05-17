
<?php
function insert_DB($id,$fname,$mname,$lname,$email,$tel,$gender,$status,$semester,$year,$intstatus) {
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
    $sql = "insert into student (student_ID,stu_FName,stu_MName,stu_LName,email,telephone,gender,status,semenster,year,intern_status)  values('$id','$fname','$mname','$lname','$email','$tel','$gender','$status','$semester','$year','$intstatus')";
    if (!mysqli_query($con,$sql))
    {
      die('Error: ' . mysqli_error($con));
    }
    echo "<br>"."Add a record";
    //close connection
    mysqli_close($con);
}
?>