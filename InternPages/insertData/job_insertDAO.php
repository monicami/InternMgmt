
<?php
function insert_DB($job_id,$job_name,$comp_name,$position,$responsibility,$requirement,$salary,$note) {
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
    $sql = "insert into job (job_ID, job_name, comp_name, position, responsibility, requirement, salary, note)  values('$job_id','$job_name','$comp_name','$position','$responsibility','$requirement','$salary','$note')";
    if (!mysqli_query($con,$sql))
    {
      die('Error: ' . mysqli_error($con));
    }

    //close connection
    mysqli_close($con);
}
?>