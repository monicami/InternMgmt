
<?php
function update_Data($id,$fname,$lname,$email,$tel,$gender,$status,$semester,$year,$intstatus) {
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
    $sql = "update student set stu_FName='$fname', stu_LName='$lname', email='$email', telephone='$tel', gender='$gender', status='$status', semenster='$semester', year='$year', intern_status='$intstatus' where student_ID=$id";
    if (!mysqli_query($con,$sql))
    {
      die('Error: ' . mysqli_error($con));
    }
    //close connection
    mysqli_close($con);
}
?>