<?php 
session_start(); 
?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = test_input($_POST["username"]);
  $passwd = test_input($_POST["passwd"]);
  $utype = test_input($_POST["utype"]);
}
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
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
    $sql = "select user_name, passwd, user_ID from user where user_name='$username'";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_assoc($result);
	$id = $row['user_ID'];
	$name = $row['user_name'];
    if (mysqli_query($con, $sql))
    {
		if($row['user_name'] == "admin"){
			header("location:homea.php");
		}else{
			if($passwd==$row['passwd']){
				
				$_SESSION['id']=$id;
				$_SESSION['name']=$name;
				header("location:homes.php");
			}else {
				echo "Your password is incorrect!";
				}
    }
	}
    //die('Error: ' . mysqli_error($con));
	
    //close connection
    mysqli_close($con);
?>