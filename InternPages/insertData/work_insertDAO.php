
<?php
function insert_DB($exp_ID,$student_ID,$position,$company_name,$company_location,$start_date,$end_date) {
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
    $sql = "insert into workexp (exp_ID,student_ID,position,company_name,company_location,start_date,end_date)  values('$exp_ID','$student_ID','$position','$company_name','$company_location','$start_date','$end_date')";
    if (!mysqli_query($con,$sql))
    {
      die('Error: ' . mysqli_error($con));
    }
    //close connection
    mysqli_close($con);
}
?>