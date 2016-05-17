
<?php
function insert_DB($skill_ID,$skill_name,$skill_type) {
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
    $sql = "insert into skill (skill_ID,skill_name,skill_type)  values('$skill_ID','$skill_name','$skill_type')";
    if (!mysqli_query($con,$sql))
    {
      die('Error: ' . mysqli_error($con));
    }
    //close connection
    mysqli_close($con);
}
function insert_skillRecord($skill_ID,$student_ID,$skill_level){
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
    $sql = "insert into own_skill (skill_ID,student_ID,skill_level)  values('$skill_ID','$student_ID','$skill_level')";
    if (!mysqli_query($con,$sql))
    {
      die('Error: ' . mysqli_error($con));
    }
    //close connection
    mysqli_close($con);
}
?>