
<?php
function del_Data($id) {
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
    $sql = "delete from student where student_ID=$id";
    if (!mysqli_query($con,$sql))
    {
      die('Error: ' . mysqli_error());
    }
    //close connection
    mysqli_close($con);
}
?>